<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
 * TSJ CDMX Libros TxCA Component Route Helper
 *
 */
abstract class JtCaHelperRoute
{
	protected static $lookup = array();
			
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjc01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE INGRESOS DE VALORES
	 */
	public static function getLjc02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE EGRESOS DE VALORES
	 */
	public static function getLjc03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO DE PROMOCIONES
	 */
	public static function getLjc04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA SENTENCIA
	 */
	public static function getLjc05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIN
	 */
	public static function getLjc06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE EXHORTOS
	 */
	public static function getLjc07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE OFICIOS
	 */
	public static function getLjc08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ACTUARIOS
	 */
	public static function getLjc09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AUXILIARES DE LA ADMINISTRACIN DE JUSTICIA
	 */
	public static function getLjc10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO DE AMPAROS
	 */
	public static function getLjc12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE FIANZAS
	 */
	public static function getLjc13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc13&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE MULTAS
	 */
	public static function getLjc14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the AGENDA DE AUDIENCIAS
	 */
	public static function getLjc16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIN AL ARCHIVO
	 */
	public static function getLjc17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIN DE DOCUMENTOS AL ARCHIVO
	 */
	public static function getLjc18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ENVO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIN
	 */
	public static function getLjc19Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc19'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc19&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc19&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTCULOS 13 FRACCIN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIN PBLICA
	 */
	public static function getLjc20Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc20'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc20&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc20&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE MINISTERIO PBLICO
	 */
	public static function getLjc21Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljc21'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljc21&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljc21&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
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

		// Prepare the reverse lookup array.
		if (self::$lookup === null)
		{
			self::$lookup = array();

			$component	= JComponentHelper::getComponent('com_jtca');
			$items		= $menus->getItems('component_id', $component->id);
			foreach ($items as $item)
			{
				if (isset($item->query) AND isset($item->query['view']))
				{
					$view = $item->query['view'];
					if (isset($item->query['layout']))
					{
						$item_layout = $item->query['layout'];
					
						if (!isset(self::$lookup[$view.'-'.$item_layout]))
						{
							self::$lookup[$view.'-'.$item_layout] = array();
						}
						if (isset($item->query['id']))
						{
							self::$lookup[$view.'-'.$item_layout][$item->query['id']] = $item->id;
						}						
					}
					else
					{
						if (!isset(self::$lookup[$view]))
						{
							self::$lookup[$view] = array();
						}
						if (isset($item->query['id']))
						{
							self::$lookup[$view][$item->query['id']] = $item->id;
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
					if (isset(self::$lookup[$view]))
					{
						foreach($ids as $id)
						{
							if (isset(self::$lookup[$view][(int)$id]))
							{
								return self::$lookup[$view][(int)$id];
							}
						}
					}
				}
				else
				{
					if (isset(self::$lookup[$view.'-'.$layout]))
					{
						foreach($ids as $id)
						{
							if (isset(self::$lookup[$view.'-'.$layout][(int)$id]))
							{
								return self::$lookup[$view.'-'.$layout][(int)$id];
							}
						}
					}				
				}
			}
		}
		return null;
		
	}
}
