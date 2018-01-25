<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.vote
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: vote.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.vote
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
 * @Joomlacopyright Copyright (c)2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @CAlicense		GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 */

defined('_JEXEC') or die;
/**
 *
 * Remca vote plugin class.
 */
class PlgRemcaVote extends JPlugin
{
	/**
	 * @var    $autoloadLanguage boolean	Load the language file on instantiation
	 */
	protected $autoloadLanguage = true;

	/**
	 * Create the rating information to be output
	 * 
	 * @param	string			$context	Context of the paging
	 * @param	array			&$row		Passed by reference and row updated with html for prev and/or next buttons
	 * @param	json/registry	&$params	Item navigation parameters	
	 * @param	integer			$page		Current Item page		
	 * @param	string			$object		Object name		
	 * 
	 * @return  string			$html		HTML to be output
	 */	
	protected function OutputRating($context, &$row, &$params, $page=0, $object)
	{
		$html = '';
		$app = JFactory::getApplication();
				
		if ($object <> '')
		{
			$rating = (int) @$row->rating;
			$rating_count =  (int) @$row->rating_count;

			$view = $app->input->getString('view', '');
			$img = '';

			// look for images in template if available
			$star_image_on = JHtml::_('image', 'system/rating_star.png', JText::_('PLG_REMCA_VOTE_STAR_ACTIVE'), null, true);
			$star_image_off = JHtml::_('image', 'system/rating_star_blank.png', JText::_('PLG_REMCA_VOTE_STAR_INACTIVE'), null, true);

			for ($i=0; $i < $rating; $i++)
			{
				$img .= $star_image_on;
			}
			for ($i=$rating; $i < 5; $i++)
			{
				$img .= $star_image_off;
			}
			$html .= '<div class="'.$object.'_rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">';
			$html .= '<p class="unseen element-invisible">'.JText::sprintf( 'PLG_REMCA_VOTE_USER_RATING', '<span itemprop="ratingValue">'.$rating.'</span>', '<span itemprop="bestRating">5</span>' )
					. '<meta itemprop="ratingCount" content="' . $rating_count . '" />'
					. '<meta itemprop="worstRating" content="0" />'
					. '</p>';
			$html .= $img;
			$html .= "</div>\n";

			if ( ($view == $object) AND isset($row->state) AND $row->state == 1)
			{
				$uri = JUri::getInstance();
				$uri->setQuery($uri->getQuery().'&hitcount=0');
				
				// create option list for voting select box
				$options = array();
				for($i = 1; $i < 6; $i++)
				{
					$options[] = JHtml::_('select.option', $i, JText::sprintf('PLG_REMCA_VOTE_VOTE', $i));
				}

				// generate voting form
				$html .= '<form method="post" action="' . htmlspecialchars($uri->toString()) . '" class="form-inline">';
				$html .= '<span class="'.$object.'_vote">';
				$html .= '<label class="unseen element-invisible" for="'.$object.'_vote_' . $row->id . '">'.JText::_('PLG_REMCA_VOTE_LABEL').'</label>';
				$html .= JHtml::_('select.genericlist', $options, 'user_rating', null, 'value', 'text', '5', $object.'_vote_'.$row->id);
				$html .= '&#160;<input class="btn btn-mini" type="submit" name="submit_vote" value="' . JText::_('PLG_REMCA_VOTE_RATE') . '" />';
				$html .= '<input type="hidden" name="task" value="'.$object.'.vote" />';
				$html .= '<input type="hidden" name="hitcount" value="0" />';
				$html .= '<input type="hidden" name="url" value="' . htmlspecialchars($uri->toString()) . '" />';
				$html .= JHtml::_('form.token');
				$html .= '</span>';
				$html .= '</form>';				
			}
		}
		return $html;
	}
}