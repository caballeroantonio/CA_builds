<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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
	 * @param	integer	The route of the LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL)
	 */
	public static function getLsc01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjf01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjp01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjccm01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjoc01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjpdng01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjpes01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjjadng01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLjjadg01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO
	 */
	public static function getLcp01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO
	 */
	public static function getLcp02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE REMISIONES CON DETENIDO DE JUZGADOS ADOLESCENTES
	 */
	public static function getLcp03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO DE PGR
	 */
	public static function getLcp04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO DE PGR
	 */
	public static function getLcp05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA INCOMPETENCIAS ADOLESCENTES
	 */
	public static function getLcp06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA EXCUSAS DE ADOLESCENTES
	 */
	public static function getLcp07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ETAPA DE EJECUCIÓN PARA ADOLESCENTES
	 */
	public static function getLcp09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE BENEFICIOS PENITENCIARIOS.
	 */
	public static function getLcp10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO PRIMERA INSTANCIA.
	 */
	public static function getLcp18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO PRIMERA INSTANCIA.
	 */
	public static function getLcp19Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp19'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp19&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp19&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA INCOMPETENCIAS PRIMERA INSTANCIA.
	 */
	public static function getLcp20Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp20'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp20&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp20&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE PRIMERA INSTANCIA.
	 */
	public static function getLcp21Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp21'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp21&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp21&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ORDENES DE ARRAIGOS Y DE CATEOS PRIMERA INSTANCIA.
	 */
	public static function getLcp22Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp22'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp22&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp22&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ORDENES DE APREHENSIÓN, REAPREHENSION Y TRASLADO.
	 */
	public static function getLcp23Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp23'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp23&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp23&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO DE LA LEY DE ACCESO A LAS MUJERES A UNA VIDA LIBRE DE VIOLENCIA.
	 */
	public static function getLcp24Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp24'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp24&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp24&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO DELITOS NO GRAVES
	 */
	public static function getLcp25Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp25'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp25&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp25&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO DELITOS NO GRAVES
	 */
	public static function getLcp26Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp26'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp26&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp26&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA INCOMPETENCIAS DELITOS NO GRAVES
	 */
	public static function getLcp27Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp27'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp27&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp27&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS  DE DELITOS NO GRAVES
	 */
	public static function getLcp28Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp28'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp28&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp28&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ORDENES PARA ARRAIGOS Y CATEOS DELITOS NO GRAVES
	 */
	public static function getLcp29Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp29'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp29&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp29&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE OFICIOS.
	 */
	public static function getLcp11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE TURNO DE SALAS PARA JUZGADOS ORALES.
	 */
	public static function getLcp12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE EXPEDIENTILLOS DE JUZGADOS DE EJECUCIÓN PARA JUZGADOS PENAL O NO GRAVES.
	 */
	public static function getLcp13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp13&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE CUMPLIMIENTO DE EJECUTORIAS PARA JUZGADOS DE EJECUCIÓN.
	 */
	public static function getLcp14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE OFICIOS DE AMPAROS DE TRAMITE.
	 */
	public static function getLcp15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp15&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE  OFICIOS DE AMPAROS DE CONOCIMIENTO.
	 */
	public static function getLcp16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES JUZGADOS DE PRIMERA INSTANCIA
	 */
	public static function getLcp30Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp30'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp30&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp30&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES JUZGADOS DE DELITOS NO GRAVES
	 */
	public static function getLcp31Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp31'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp31&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp31&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES JUZGADOS DE EJECUCIÓN DE SENTENCIA
	 */
	public static function getLcp32Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp32'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp32&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp32&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES DE SALAS PENALES
	 */
	public static function getLcp33Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp33'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp33&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp33&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES JUZGADOS DE ADOLESCENTES
	 */
	public static function getLcp34Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp34'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp34&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp34&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE LIBERTADES DE SALAS DE ADOLESCENTES
	 */
	public static function getLcp35Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp35'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp35&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp35&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE RETURNO DE ADOLESCENTES
	 */
	public static function getLcp36Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp36'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp36&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp36&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES
	 */
	public static function getLcp39Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp39'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp39&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp39&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ORDENES DE DETENCIÓN PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES
	 */
	public static function getLcp40Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp40'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp40&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp40&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE REMISIONES SIN DETENIDO DE JUZGADOS ADOLESCENTES
	 */
	public static function getLcp41Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lcp41'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lcp41&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lcp41&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO
	 */
	public static function getLspe01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RESOLUCIONES DE PLANO
	 */
	public static function getLspe02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RESOLUCIONES
	 */
	public static function getLspe03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE BENEFICIOS REVOCADO Y O/A
	 */
	public static function getLspe04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE DESISTIMIENTO
	 */
	public static function getLspe05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ARCHIVO
	 */
	public static function getLspe06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE FINANZAS
	 */
	public static function getLspe07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE INGRESO Y EGRESO DE BILLETES
	 */
	public static function getLspe08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lspe08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lspe08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lspe08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO (SISTEMA TRADICIONAL)
	 */
	public static function getLsps01Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps01'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps01&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps01&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)
	 */
	public static function getLsc02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc02&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE REGISTRO DE BILLETES DE DEPÓSITO (INGRESOS)
	 */
	public static function getLjp02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE INGRESO DE VALORES
	 */
	public static function getLjccm02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESO
	 */
	public static function getLjpdng02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjpes02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjjadng02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjjadg02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)
	 */
	public static function getLsps02Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps02'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps02&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps02&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the Libro De Ejemplo
	 */
	public static function getLejemploRoute($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lejemplo'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lejemplo&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lejemplo&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE VISTAS AL M.P (OFICIAL)
	 */
	public static function getLsc03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc03&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE EGRESOS DE VALORES
	 */
	public static function getLjccm03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EGRESOS
	 */
	public static function getLjoc03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CERTIFICADO DE DEPÓSITOS DE EGRESO
	 */
	public static function getLjpdng03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjpes03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes03&layout='.$layout.'&id='. $id;
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
	public static function getLjjadng03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE INGRESOS
	 */
	public static function getLjjadg03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO (NUEVO SISTEMA) (COLEGIADO)
	 */
	public static function getLsps03Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps03'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps03&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps03&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE MULTAS (OFICIAL)
	 */
	public static function getLsc04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc04&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjf04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf04&layout='.$layout.'&id='. $id;
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
	public static function getLjp04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjoc04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PROMOCIONES
	 */
	public static function getLjpdng04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng04&layout='.$layout.'&id='. $id;
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
	public static function getLjpes04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE SENTENCIAS
	 */
	public static function getLjjadng04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE EGRESOS
	 */
	public static function getLjjadg04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ACTUARIO
	 */
	public static function getLsps04Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps04'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps04&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps04&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the AGENDA (OFICIAL)
	 */
	public static function getLsc05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc05&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE SENTENCIAS
	 */
	public static function getLjf05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf05&layout='.$layout.'&id='. $id;
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
	public static function getLjp05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp05&layout='.$layout.'&id='. $id;
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
	public static function getLjccm05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE SENTENCIAS
	 */
	public static function getLjoc05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA SENTENCIAS
	 */
	public static function getLjpdng05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng05&layout='.$layout.'&id='. $id;
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
	public static function getLjpes05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjjadng05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE SENTENCIAS
	 */
	public static function getLjjadg05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg05&layout='.$layout.'&id='. $id;
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
	public static function getLsps05Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps05'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps05&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps05&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)
	 */
	public static function getLsc06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
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
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjf06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjp06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjccm06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm06&layout='.$layout.'&id='. $id;
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
	public static function getLjoc06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjpdng06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS
	 */
	public static function getLjpes06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes06&layout='.$layout.'&id='. $id;
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
	public static function getLjjadng06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RECURSOS DE APELACIÓN
	 */
	public static function getLjjadg06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLsps06Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps06'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps06&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps06&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE EGRESOS (OFICIAL)
	 */
	public static function getLsc07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc07&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE EXHORTOS
	 */
	public static function getLjf07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf07&layout='.$layout.'&id='. $id;
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
	public static function getLjccm07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm07&layout='.$layout.'&id='. $id;
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
	public static function getLjoc07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc07&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS CIRCULANTES
	 */
	public static function getLjpes07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes07&layout='.$layout.'&id='. $id;
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
	public static function getLjjadng07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the REGISTRO DE BILLETES DE DEPOSITO
	 */
	public static function getLsps07Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps07'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps07&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps07&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Ingresos
	 */
	public static function getLsc08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc08&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE OFICIOS
	 */
	public static function getLjf08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf08&layout='.$layout.'&id='. $id;
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
	public static function getLjp08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp08&layout='.$layout.'&id='. $id;
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
	public static function getLjccm08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm08&layout='.$layout.'&id='. $id;
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
	public static function getLjoc08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc08&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLjpes08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS
	 */
	public static function getLjjadng08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Egresos
	 */
	public static function getLsc14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO DE ENTREGAS DE TOCAS
	 */
	public static function getLsps08Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps08'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps08&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps08&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE GOBIERNO (OFICIAL)
	 */
	public static function getLsc09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc09&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE ACTUARIOS
	 */
	public static function getLjf09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf09&layout='.$layout.'&id='. $id;
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
	public static function getLjp09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp09&layout='.$layout.'&id='. $id;
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
	public static function getLjccm09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA
	 */
	public static function getLjoc09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc09&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE MULTAS JUDICIALES
	 */
	public static function getLjpes09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ACTUARIO
	 */
	public static function getLjjadng09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng09&layout='.$layout.'&id='. $id;
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
	public static function getLjjadg09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLsps09Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps09'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps09&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps09&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ACTUARIO (OFICIAL)
	 */
	public static function getLsc10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA
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
	 * @param	integer	The route of the LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA, TUTORES Y CURADORES
	 */
	public static function getLjf10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ACTUARIO
	 */
	public static function getLjp10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO PARA NOTARIOS
	 */
	public static function getLjccm10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS
	 */
	public static function getLjoc10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc10&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the AGENDA DE AUDIENCIAS PARA JUICIOS ORALES
	 */
	public static function getLjpes10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLjjadng10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS
	 */
	public static function getLjjadg10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg10&layout='.$layout.'&id='. $id;
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
	public static function getLsps10Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps10'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps10&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps10&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRETA DE OFICIOS (OFICIAL)
	 */
	public static function getLsc11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO PARA NOTARIOS
	 */
	public static function getLjf11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf11&layout='.$layout.'&id='. $id;
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
	public static function getLjp11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp11&layout='.$layout.'&id='. $id;
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
	public static function getLjccm11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm11&layout='.$layout.'&id='. $id;
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
	public static function getLjoc11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS CIRCULANTES O NEGADOS
	 */
	public static function getLjpdng11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE INGRESOS Y EGRESOS DE BILLETES DE DEPÓSITO
	 */
	public static function getLjpes11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLjjadng11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng11&layout='.$layout.'&id='. $id;
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
	public static function getLjjadg11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE FIANZA
	 */
	public static function getLsps11Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps11'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps11&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps11&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO DE AMPAROS (OFICIAL)
	 */
	public static function getLsc12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc12&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE REGISTRO DE AMPAROS
	 */
	public static function getLjf12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO DE AMPAROS CIRCULANTES O NEGADOS
	 */
	public static function getLjp12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp12&layout='.$layout.'&id='. $id;
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
	public static function getLjccm12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm12&layout='.$layout.'&id='. $id;
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
	public static function getLjoc12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc12&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE FIANZAS
	 */
	public static function getLjpes12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBROS DE VALORES
	 */
	public static function getLjjadng12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadng12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadng12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadng12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the REGISTRO DE PROMOCIONES
	 */
	public static function getLsps12Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps12'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps12&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps12&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES
	 */
	public static function getLsc13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsc13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsc13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsc13&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE CONTROL DE FIANZAS
	 */
	public static function getLjf13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf13&layout='.$layout.'&id='. $id;
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
	public static function getLjp13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp13&layout='.$layout.'&id='. $id;
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
	public static function getLjccm13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm13&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE NOTARIOS
	 */
	public static function getLjoc13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc13&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng13&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RESOLUCIONES EN AUDIENCIA
	 */
	public static function getLjpes13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes13&layout='.$layout.'&id='. $id;
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
	public static function getLjjadg13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg13&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the CONTROL DE FIRMAS DEL PROCESADO
	 */
	public static function getLsps13Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps13'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps13&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps13&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the LIBRO DE CONTROL DE MULTAS
	 */
	public static function getLjf14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf14&layout='.$layout.'&id='. $id;
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
	public static function getLjp14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE FIANZAS
	 */
	public static function getLjoc14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljoc14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljoc14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljoc14&layout='.$layout.'&id='. $id;
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
	public static function getLjpdng14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE RESOLUCIONES DE PLANO
	 */
	public static function getLjpes14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLjjadg14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg14&layout='.$layout.'&id='. $id;
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
	public static function getLsps14Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'lsps14'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=lsps14&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=lsps14&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUERDOS
	 */
	public static function getLjf15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf15&layout='.$layout.'&id='. $id;
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
	public static function getLjccm15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm15&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLjpdng15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng15&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE BENEFICIOS REVOCADOS Y ORDENES DE RE-APREHENSIÓN
	 */
	public static function getLjpes15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes15&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the ARTICULO 36 O ARTICULO 28 LJADF
	 */
	public static function getLjjadg15Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg15'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg15&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg15&layout='.$layout.'&id='. $id;
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
	 * @param	integer	The route of the AGENDA DE AUDIENCIAS
	 */
	public static function getLjf16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf16&layout='.$layout.'&id='. $id;
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
	public static function getLjp16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN DE EXPEDIENTES AL ARCHIVO
	 */
	public static function getLjccm16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS
	 */
	public static function getLjpdng16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE DESISTIMIENTOS
	 */
	public static function getLjpes16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PRESENTACIÓN DE ADOLESCENTES EN LIBERTAD ANTE EL JUEZ
	 */
	public static function getLjjadg16Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg16'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg16&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg16&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
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
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLjf17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE PEDIMENTOS
	 */
	public static function getLjp17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO
	 */
	public static function getLjccm17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljccm17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljccm17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljccm17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE FIRMAS PROCESADOS
	 */
	public static function getLjpdng17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ARCHIVO
	 */
	public static function getLjpes17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLjjadg17Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg17'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg17&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg17&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO
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
	 * @param	integer	The route of the LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO
	 */
	public static function getLjf18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS
	 */
	public static function getLjp18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLjpdng18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpdng18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpdng18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpdng18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE AMPAROS *LOCOS*
	 */
	public static function getLjjadg18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljjadg18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljjadg18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljjadg18&layout='.$layout.'&id='. $id;
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
	public static function getLjpes18Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljpes18'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljpes18&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljpes18&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN
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
	 * @param	integer	The route of the LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN
	 */
	public static function getLjf19Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf19'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf19&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf19&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE FIRMAS DE PROCESADOS
	 */
	public static function getLjp19Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp19'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp19&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp19&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA
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
	 * @param	integer	The route of the LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA
	 */
	public static function getLjf20Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf20'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf20&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf20&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE TURNO PARA CONCLUSIONES
	 */
	public static function getLjp20Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp20'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp20&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp20&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE MINISTERIO PÚBLICO
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
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES
	 */
	public static function getLjf21Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf21'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf21&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf21&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE REMISIÓN AL ARCHIVO
	 */
	public static function getLjp21Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljp21'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljp21&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljp21&layout='.$layout.'&id='. $id;
		}

		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
	/**
	 * @param	integer	The route of the LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES
	 */
	public static function getLjf22Route($id, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'ljf22'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_jtca&view=ljf22&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_jtca&view=ljf22&layout='.$layout.'&id='. $id;
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
