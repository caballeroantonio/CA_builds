<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.mod_remca
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: default.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.mod_architectcomp
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
?>
<div class="remca mod_wa_entry_conversations<?php echo $module_class_sfx; ?>">
	<?php if($params->get('list-style','') <> '') : ?>
		<?php 
			$list_style_type = $params->get('list-style') == 'ul'? 'list-style-type: disc;' : '';
			echo '<'.$params->get('list-style').' style="list-style-position: inside;'. $list_style_type.'">'; 
		?>
	<?php endif; ?>
	<?php foreach ($list as $item) :  ?>
		<?php if($params->get('list-style','') <> '') : ?>
			<li>
		<?php else: ?>
			<span>
		<?php endif; ?>
				<a href="<?php echo $item->link; ?>">
						<?php echo $item->id; ?>
				</a>
		<?php if($params->get('list-style','') <> '') : ?>
			</li>
		<?php else :?>
			</span><br />
		<?php endif; ?>
	<?php endforeach; ?>
	<?php if($params->get('list-style','') <> '') : ?>
		<?php echo '</'.$params->get('list-style').'>'; ?>
	<?php endif; ?>
</ul>
</div>
