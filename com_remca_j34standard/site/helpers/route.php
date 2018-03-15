<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: route.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
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
 * RealEstateManagerCA Component Route Helper
 *
 */
abstract class RemcaHelperRoute
{
	protected static $lookup = array();
			
	/**
	 * @param	integer	The route of the House
	 */
	public static function getHouseRoute($id, $cat_id = 0, $language = 0, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'house'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=house&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=house&layout='.$layout.'&id='. $id;
		}

		if ($cat_id > 1)
		{
			$options['countItems'] = false;
			$options['table'] = '#__rem_houses';		
			$categories = JCategories::getInstance('Remca', $options);
		
			$category = $categories->get($cat_id);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$cat_id;
			}
		}
		
		if ($language AND $language != "*" AND JLanguageMultilang::isEnabled())
		{
				$link .= '&lang=' . $language;
				$needles['language'] = $language;
		}
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Photo
	 */
	public static function getPhotoRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'photo'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=photo&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=photo&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Mime_type
	 */
	public static function getMimeTypeRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'mimetype'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=mimetype&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=mimetype&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Mls_for_delete
	 */
	public static function getMlsForDeleteRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'mlsfordelete'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=mlsfordelete&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=mlsfordelete&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Order
	 */
	public static function getOrderRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'order'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=order&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=order&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Orders_detail
	 */
	public static function getOrdersDetailRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ordersdetail'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=ordersdetail&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=ordersdetail&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Main_category
	 */
	public static function getMainCategoryRoute($id, $language = 0, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'maincategory'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=maincategory&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=maincategory&layout='.$layout.'&id='. $id;
		}

		
		if ($language AND $language != "*" AND JLanguageMultilang::isEnabled())
		{
				$link .= '&lang=' . $language;
				$needles['language'] = $language;
		}
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Rent
	 */
	public static function getRentRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'rent'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=rent&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=rent&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Rent_request
	 */
	public static function getRentRequestRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'rentrequest'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=rentrequest&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=rentrequest&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Rent_sal
	 */
	public static function getRentSalRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'rentsal'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=rentsal&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=rentsal&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Review
	 */
	public static function getReviewRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'review'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=review&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=review&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Track_source
	 */
	public static function getTrackSourceRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'tracksource'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=tracksource&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=tracksource&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Users_wishlist
	 */
	public static function getUsersWishlistRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'userswishlist'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=userswishlist&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=userswishlist&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Video_source
	 */
	public static function getVideoSourceRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'videosource'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=videosource&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=videosource&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Buying Requests
	 */
	public static function getBuyingRequestRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'buyingrequest'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=buyingrequest&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=buyingrequest&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Category
	 */
	public static function getCategoryRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'category'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=category&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=category&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Const
	 */
	public static function getConstRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'const'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=const&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=const&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Const_language
	 */
	public static function getConstLanguageRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'constlanguage'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=constlanguage&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=constlanguage&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Feature
	 */
	public static function getFeatureRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'feature'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=feature&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=feature&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Feature_house
	 */
	public static function getFeatureHouseRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'featurehouse'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=featurehouse&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=featurehouse&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Language
	 */
	public static function getLanguageRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'language'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=language&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=language&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Municipality
	 */
	public static function getLmunicipalityRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lmunicipality'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=lmunicipality&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=lmunicipality&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the State
	 */
	public static function getLstateRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lstate'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=lstate&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=lstate&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Country
	 */
	public static function getCountryRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'country'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=country&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=country&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Config
	 */
	public static function getConfigRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'config'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_remca&view=config&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_remca&view=config&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
		//se está repitiendo
	public static function getCategoryRoute_($cat_id, $keep_item_id = false, $language = 0)
	{
		if ($cat_id instanceof JCategoryNode)
		{
			$id = $cat_id->id;
			$category = $cat_id;
		}
		else
		{
			$id = (int) $cat_id;
			$options['countItems'] = false;
			$options['table'] = '';			
			$category = JCategories::getInstance('Remca', $options)->get($id);
		}

		if($id < 1 OR !($category instanceof JCategoryNode))
		{
			$link = '';
		}
		else
		{
			$needles = array();
					
			$link = 'index.php?option=com_remca&view=category&id='.$id;
		
			$cat_ids = array_reverse($category->getPath());
			$needles['category'] = $cat_ids;
			$needles['categories'] = $cat_ids;

			if ($language AND $language != "*" AND JLanguageMultilang::isEnabled())
			{
					$link .= '&lang=' . $language;
					$needles['language'] = $language;
			}
			
			if ($item = self::findItem($needles, $keep_item_id))
			{
				$link .= '&Itemid='.$item;
			}
			else
			{
				//Create the link
				$link = 'index.php?option=com_remca&view=category&id='.$id;
				if($category)
				{
					$cat_ids = array_reverse($category->getPath());
					
					$needles['category'] = $cat_ids;
					$needles['categories'] = $cat_ids;
					
					if ($item = self::findItem($needles, $keep_item_id))
					{
						$link .= '&Itemid='.$item;
					}
					else
					{
						if ($item = self::findItem(null, $keep_item_id))
						{
							$link .= '&Itemid='.$item;
						}
					}
				}
			}
		}

		return $link;
	}
	protected static function findItem($needles = null, $keep_item_id = false, $layout = 'default')
	{
		if($keep_item_id)
		{
			return null;	
		}	

		$app		= JFactory::getApplication();
		$menus		= $app->getMenu('site');
		$language	= isset($needles['language']) ? $needles['language'] : '*';

		// Prepare the reverse lookup array.
		if (!isset(self::$lookup[$language]))
		{
			self::$lookup[$language] = array();

			$component	= JComponentHelper::getComponent('com_remca');

			$attributes = array('component_id');
			$values = array($component->id);

			if ($language != '*')
			{
				$attributes[] = 'language';
				$values[] = array($needles['language'], '*');
			}

			$items		= $menus->getItems($attributes, $values);

			foreach ($items as $item)
			{
				if (isset($item->query) AND isset($item->query['view']))
				{
					$view = $item->query['view'];
					if (isset($item->query['layout']))
					{
						$item_layout = $item->query['layout'];					
						if (!isset(self::$lookup[$language][$view.'-'.$item_layout]))
						{
							self::$lookup[$language][$view.'-'.$item_layout] = array();
						}
						if (isset($item->query['id'])) {

							// here it will become a bit tricky
							// language != * can override existing entries
							// language == * cannot override existing entries
							if (!isset(self::$lookup[$language][$view.'-'.$item_layout][$item->query['id']]) OR $item->language != '*')
							{
								self::$lookup[$language][$view.'-'.$item_layout][$item->query['id']] = $item->id;
							}
						}
					}
					else
					{
						if (!isset(self::$lookup[$language][$view]))
						{
							self::$lookup[$language][$view] = array();
						}
						if (isset($item->query['id']))
						{
							// here it will become a bit tricky
							// language != * can override existing entries
							// language == * cannot override existing entries
							if (!isset(self::$lookup[$language][$view][$item->query['id']]) OR $item->language != '*')
							{
								self::$lookup[$language][$view][$item->query['id']] = $item->id;
							}
							
						}					
					}
				}
			}
		}

		if ($needles)
		{
			foreach ($needles as $view => $ids)
			{
				if ($layout == '' OR $layout == 'default')
				{			
					if (isset(self::$lookup[$language][$view]))
					{
						foreach ($ids as $id)
						{
							if (isset(self::$lookup[$language][$view][(int) $id]))
							{
								return self::$lookup[$language][$view][(int) $id];
							}
						}
					}
				}
				else
				{
					if (isset(self::$lookup[$language][$view.'-'.$layout]))
					{
						foreach ($ids as $id)
						{
							if (isset(self::$lookup[$language][$view.'-'.$layout][(int) $id]))
							{
								return self::$lookup[$language][$view.'-'.$layout][(int) $id];
							}
						}
					}
				}				
			}
		}

		$active = $menus->getActive();
		if ($active AND $active->component == 'com_remca' AND ($language == '*' OR in_array($active->language, array('*', $language)) OR !JLanguageMultilang::isEnabled()))
		{
			return $active->id;
		}

		// if not found, return language specific home link
		$default = $menus->getDefault($language);
		return !empty($default->id) ? $default->id : null;
		
	}
}
