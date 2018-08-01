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
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * Favoritos list controller class.
 *
 */
class RemcaControllerWisheslist extends JControllerLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_REMCA_WISHESLIST';
	/**
	 * @var		string	The name of the list view.
	 */	
	protected $view_list = 'wisheslist';
	/**
	 * Constructor
	 *
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

	}	
	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 * 
	 */
	public function getModel($name = 'Wisheslist', $prefix = 'RemcaModel',$config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
                
        /*
         * Function that allows download database information
         * @ToDo implementar ACL
         * from outside: $model = JModelLegacy::getInstance('WishlistForm','RemcaModel', array('ignore_request' => FALSE));	
         */
        public function export(){
            /*
            return false;
            $model = $this->getModel = $this->getModel('Wisheslist','RemcaModel',array('ignore_request' => FALSE));
			
			//states
//			$model->setState('list.ordering', 'a.ordering');//override
//			$model->setState('list.direction', 'ASC');//override
//			$model->setState('list.select', 'a.*');//override
			$model->setState('filter.state', 1);
            $query = $model->getListQuery4Export();
            */
$query = <<<EOT 
SELECT
h.`id`, c1.`title` 'Categoría', h.`name` 'Título', h.`description` 'Descripción', c4.`name` 'municipio', c3.`name` 'estado', c2.`name` 'país', h.`price` 'precio', c5.`currency` 'moneda', h.`hzipcode` 'código postal', h.`hlocation` 'ubicación', h.`rooms` 'habitaciones', h.`bathrooms`, h.`bedrooms` 'baños', h.`contacts` 'Contacts', h.`property_type`, h.`year` 'año de construcción', h.`agent` 'Agent', h.`area_unit`, h.`land_area`, h.`land_area_unit`, h.`expiration_date`, h.`lot_size` 'área del lote', h.`house_size` 'área de construcción', h.`garages` 'cocheras', h.`date`, h.`edok_link`, h.`owneremail`
FROM 
jos_rem_wisheslist w
INNER JOIN jos_rem_houses h ON w.id_house = h.id
LEFT JOIN jos_categories c1 ON h.catid = c1.id
LEFT JOIN jos_rem_countries c2 ON h.id_country = c2.id
LEFT JOIN jos_rem_lstates c3 ON h.id_lstate = c3.id
LEFT JOIN jos_rem_lmunicipalities c4 ON h.id_lmunicipality = c4.id
LEFT JOIN jos_rem_countries c5 ON h.id_currency = c5.id

WHERE 1
AND w.state = 1
AND h.state = 1
LIMIT 20;
EOT;
            $remca_helper = new RemcaHelper();
            $remca_helper->export('Wisheslist',$query);
        }
}