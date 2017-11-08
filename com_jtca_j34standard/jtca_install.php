<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.install
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @version			Id: architectcomp_install.php 48 20170806 caballeroantonio $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.install
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
 * @CAlicense		GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file'); 
/**
 * Script file of ArchitectComp_name component
 */
class com_jtcaInstallerScript
{
    /**
     * method to install the component
     * 
     * @param	object	parent installer application
     *
     * @return void
     */
    function install($parent) 
    {
        $manifest = $parent->get("manifest");
        $parent = $parent->getParent();
        $source = $parent->getPath("source");
        
        $db = JFactory::getDbo();       
  		$query = $db->getQuery(true);
      
		$install_html_file = __DIR__ . '/jtca_install.html';

        $buffer = '';

		if (file_exists($install_html_file))
		{
			$buffer .= file_get_contents($install_html_file);
		}

        $install_error = false;

		// Opening HTML
		ob_start();            
		?>
		<div id="jtcainstall-info">
			<h1><?php echo JText::_('COM_JTCA_INSTALL_HEADER'); ?></h1>
			<div id="jtcainstall-intro">
				<?php echo JText::_('COM_JTCA_INSTALL_INTRO'); ?>
			</div>
			<table id="jtcainstall-table" class="adminlist">
				<thead class="jtcainstall-heading">
					<tr>
						<th colspan="3">
							<?php echo JText::_('COM_JTCA_INSTALL_HEADER');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="jtcainstall-subheading">
						<th colspan="2">
							<?php echo JText::_('COM_JTCA_EXTENSION_HEADER');?>
						</th>
						<th width="50%">
							<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
						</th>					
					</tr>			
					<tr class="jtcainstall-row">
						<td  colspan="2">
							<?php echo JText::_('COM_JTCA');?>
						</td>
						<td class="jtcainstall-success">
							<?php echo JText::_('COM_JTCA_INSTALL_PACKAGE_SUCCESS');?>
						</td>
					</tr>
					<tr>				
						<td colspan="3">
							<?php echo JText::_('COM_JTCA_INSTALL_CORE_COMPONENT_SUCCESS');?>
						</td>
					</tr>
		<?php
		$buffer .= ob_get_clean();

        // Install plugins
		
		if (count($manifest->plugins->plugin) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		
			          
			foreach($manifest->plugins->plugin as $plugin)
			{
				$attributes = $plugin->attributes();
				$plg = $source.'/'.$attributes['folder'].'/'.$attributes['plugin'];

		        $installer = new JInstaller();
		        
				if (!$installer->install($plg))
				{
					$error_msg = '';
					while ($error = JError::getError(true))
					{
						$error_msg .= $error;
						$install_error = true;
					}
					$buffer .= $this->printError($attributes['plugin'], $attributes['group'], 'install', $error_msg);
					//$this->abort();
					break;
				}
				else
				{
					$buffer .= $this->printSuccess($attributes['plugin'], $attributes['group'], 'install');
				}              
	            
 				$query->clear();
				$query->update($db->quoteName('#__extensions'));
				//Set any other field values as required
				$query->set($db->quoteName('enabled').' = 1');
				$query->where($db->quoteName('name').' = '.$db->quote($attributes['plugin']));
				$query->where($db->quoteName('type').' = '.$db->quote('plugin'));
				$db->setQuery($query->__toString());
	            try
	            {
					$db->execute();
					$buffer .= $this->printSuccess($attributes['plugin'], $attributes['group'], 'publish');
				}
				catch (RuntimeException $e)
				{
					$install_error = true;
					$buffer .= $this->printError($attributes['plugin'], $attributes['group'], 'publish',  $e->getMessage());
				}
			}
		}  

		// Install modules
 		if (count($manifest->modules->module) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		

			foreach($manifest->modules->module as $module)
			{
				$error_msg = '';
				$attributes = $module->attributes();
				$mod = $source.'/'.$attributes['folder'].'/'.$attributes['module'];
	            
		        $installer = new JInstaller();
		        
				if (!$installer->install($mod))
				{
					while ($error = JError::getError(true))
					{
						$error_msg .= $error;
						$install_error = true;
					}
					$buffer .= $this->printError($attributes['module'], 'site', 'install', $error_msg);
					//$this->abort();
					break;
				}
				else
				{
					$buffer .= $this->printSuccess($attributes['module'], 'site', 'install');
				}  
			}
		}  
		
		// Populate the content types for UCM
		$this->populateUCM();
			
        // Closing HTML
			ob_start();
	?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3" text-align="center">
							<?php if ($install_error) : ?>
								<div id="jtcainstall-component-error">
									<?php echo JText::_('COM_JTCA_INSTALL_COMPONENT_ERROR'); ?>
								</div>			
							<?php else : ?>
								<div id="jtcainstall-component-success">
									<?php echo JText::_('COM_JTCA_INSTALL_COMPONENT_SUCCESS'); ?>
								</div>			
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td colspan="3" text-align="center">
							<?php echo JText::_('COM_JTCA_JOOMLA_LOGO_DISCLAIMER'); ?>	
						</td>				
					</tr>					
				</tfoot>
			</table>					
		</div>
		 <?php
		$buffer .= ob_get_clean();


    // Return stuff
		echo $buffer;		
	
    }

    /**
     * method to uninstall the component
     *
     * @param	object	parent installer application
     *
     * @return void
     */
    function uninstall($parent) 
    {
            // $parent is the class calling this method
        $manifest = $parent->get("manifest");
        $parent = $parent->getParent();
		$uninstall_html_file = __DIR__ . '/jtca_uninstall.html';

		$db = JFactory::getDbo();
 		$query = $db->getQuery(true);

        $buffer = '';

		// Drop out Style
		if (file_exists($uninstall_html_file))
		{
			$buffer .= file_get_contents($uninstall_html_file);
		}
        
        $install_error = false;
		             
		// Opening HTML
		ob_start();            
     ?>
	<div id="jtcainstall-info">
		<h1><?php echo JText::_('COM_JTCA_UNINSTALL_HEADER'); ?></h1>
			<table id="jtcainstall-table" class="adminlist">
				<thead class="jtcainstall-heading">
					<tr>
						<th colspan="3">
							<?php echo JText::_('COM_JTCA_UNINSTALL_HEADER');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="jtcainstall-subheading">
						<th colspan="2">
							<?php echo JText::_('COM_JTCA_EXTENSION_HEADER');?>
						</th>
						<th width="50%">
							<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
						</th>					
					</tr>			
					<tr class="jtcainstall-row">
						<td  colspan="2">
							<?php echo JText::_('COM_JTCA');?>
						</td>
						<td class="jtcainstall-success">
							<?php echo JText::_('COM_JTCA_UNINSTALL_PACKAGE_SUCCESS');?>
						</td>
					</tr>
	<?php
		$buffer .= ob_get_clean();  
        // Uninstall plugins
		if (count($manifest->plugins->plugin) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		
		        
			foreach($manifest->plugins->plugin as $plugin)
			{
				$attributes = $plugin->attributes();

 				$query->clear();
				$query->select($db->quoteName('extension_id'));
				$query->from($db->quoteName('#__extensions'));
				$query->where($db->quoteName('name').' = '.$db->quote($attributes['plugin']));
				$query->where($db->quoteName('type').' = '.$db->quote('plugin'));
				$db->setQuery($query->__toString());
							
				$plg_id = $db->loadResult(); 
				if ($plg_id) 
				{
			        $installer = new JInstaller();
			        
					if (!$installer->uninstall('plugin', $plg_id))
					{
						$error_msg = '';
						while ($error = JError::getError(true))
						{
							$error_msg .= $error;
							$install_error = true;
						}
						$buffer .= $this->printError($attributes['plugin'], $attributes['group'], 'uninstall', $error_msg);
						//$this->abort();
						break;
					}
					else
					{
						$buffer .= $this->printSuccess($attributes['plugin'], $attributes['group'], 'uninstall');
					} 				
				}
			}  
		}  
		
		// Uninstall modules
 		if (count($manifest->modules->module) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		
				
			foreach($manifest->modules->module as $module)
			{
				$attributes = $module->attributes();

 				$query->clear();
				$query->select($db->quoteName('extension_id'));
				$query->from($db->quoteName('#__extensions'));
				$query->where($db->quoteName('name').' = '.$db->quote($attributes['module']));
				$query->where($db->quoteName('type').' = '.$db->quote('module'));
				$db->setQuery($query->__toString());
							
				$mod_id = $db->loadResult(); 
				if ($mod_id) 
				{
			        $installer = new JInstaller();
			        
					if (!$installer->uninstall('module', $mod_id))
					{
						$error_msg = '';
						while ($error = JError::getError(true))
						{
							$error_msg .= $error;
							$install_error = true;
						}
						$buffer .= $this->printError($attributes['module'], 'site', 'uninstall', $error_msg);
						//$this->abort();
						break;
					}
					else
					{
						$buffer .= $this->printSuccess($attributes['module'], 'site', 'uninstall');
					} 					
				}
			}    
		}  
		//  Ensure all folders are deleted
		JFolder::delete(JPATH_SITE.'/images/jtca'); 
		JFolder::delete(JPATH_SITE.'/plugins/jtca'); 

		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc01')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc02')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc03')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc04')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc05')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc06')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc07')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc08')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc09')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc10')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc12')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc13')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc14')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc16')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc17')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc18')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc19')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc20')
					 );

		$db->execute(); 
		$db->setQuery(
						'DELETE FROM '.$db->quoteName('#__content_types')
						.' WHERE '.$db->quoteName('type_alias').' = '.$db->quote('com_jtca.ljc21')
					 );

		$db->execute(); 
		
					
        // Closing HTML
			ob_start();
		?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<?php if ($install_error) : ?>
								<div id="jtcainstall-component-error">
									<?php echo JText::_('COM_JTCA_UNINSTALL_COMPONENT_ERROR'); ?>
								</div>			
							<?php else : ?>
								<div id="jtcainstall-component-success">
									<?php echo JText::_('COM_JTCA_UNINSTALL_COMPONENT_SUCCESS'); ?>
								</div>			
							<?php endif; ?>
						</td>
					</tr>
				</tfoot>
			</table>					
		</div>		
		 <?php
		 $buffer .= ob_get_clean();


		// Return stuff
		echo $buffer;
    }

    /**
     * method to update the component
     *
     * @param	object	parent installer application
     *
     * @return void
     */
    function update($parent) 
    {
        $manifest = $parent->get("manifest");
        $parent = $parent->getParent();
        $source = $parent->getPath("source");

        $db = JFactory::getDbo();
 		$query = $db->getQuery(true);
        
       
		$install_html_file = __DIR__ . '/jtca_install.html';

        $buffer = '';

		if (file_exists($install_html_file))
		{
			$buffer .= file_get_contents($install_html_file);
		}

        $install_error = false;

		// Opening HTML
		ob_start();            
		?>
		<div id="jtcainstall-info">
			<h1><?php echo JText::_('COM_JTCA_UPDATE_HEADER'); ?></h1>
			<table id="jtcainstall-table" class="adminlist">
				<thead class="jtcainstall-heading">
					<tr>
						<th colspan="3">
							<?php echo JText::_('COM_JTCA_UPDATE_HEADER');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="jtcainstall-subheading">
						<th colspan="2">
							<?php echo JText::_('COM_JTCA_EXTENSION_HEADER');?>
						</th>
						<th width="50%">
							<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
						</th>					
					</tr>			
					<tr class="jtcainstall-row">
						<td  colspan="2">
							<?php echo JText::_('COM_JTCA');?>
						</td>
						<td class="jtcainstall-success">
							<?php echo JText::_('COM_JTCA_UPDATE_PACKAGE_SUCCESS');?>
						</td>
					</tr>					
		<?php
		$buffer .= ob_get_clean();  
			          
        // Install plugins
        
		if (count($manifest->plugins->plugin) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_PLUGIN_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		
		        
			foreach($manifest->plugins->plugin as $plugin)
			{
				$attributes = $plugin->attributes();
				$plg = $source.'/'.$attributes['folder'].'/'.$attributes['plugin'];
	            
				// check if the plugin is a new version for this externsion or a new plugin and either update or install
 				$query->clear();
				$query->select($db->quoteName('extension_id'));
				$query->from($db->quoteName('#__extensions'));
				$query->where($db->quoteName('name').' = '.$db->quote($attributes['plugin']));
				$query->where($db->quoteName('type').' = '.$db->quote('plugin'));
				$db->setQuery($query->__toString());
							
				$plg_id = $db->loadResult(); 
				if ($plg_id) 
				{
					$plg_type = 'update';
				}
				else
				{          
					$plg_type = 'install';
				}

			    $installer = new JInstaller();
			    
				if (!$installer->$plg_type($plg))
				{
					$error_msg = '';
					while ($error = JError::getError(true))
					{
						$error_msg .= $error;
						$install_error = true;
					}
					$buffer .= $this->printError($attributes['plugin'], $attributes['group'], $plg_type, $error_msg);
					//$this->abort();
					break;
				}
				else
				{
					$buffer .= $this->printSuccess($attributes['plugin'], $attributes['group'], $plg_type);
				}              
				if ($plg_type == 'install')
				{

 					$query->clear();
					$query->update($db->quoteName('#__extensions'));
					//Set any other field values as required
					$query->set($db->quoteName('enabled').' = 1');
					$query->where($db->quoteName('name').' = '.$db->quote($attributes['plugin']));
					$query->where($db->quoteName('type').' = '.$db->quote('plugin'));
					$db->setQuery($query->__toString());

					try
					{
						$db->execute();
						$buffer .= $this->printSuccess($attributes['plugin'], $attributes['group'], 'publish');
					}
					catch (RuntimeException $e)
					{
						$install_error = true;
						$buffer .= $this->printError($attributes['plugin'], $attributes['group'], 'publish',  $e->getMessage());
					}					
				}
			}
		}  
        
		// Install modules
 		if (count($manifest->modules->module) > 0)
		{
			// Opening HTML
			ob_start();            
			?>
			<tr class="jtcainstall-subheading">
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_HEADER');?>
				</th>
				<th>
					<?php echo JText::_('COM_JTCA_MODULE_GROUP_HEADER');?>
				</th>				
				<th width="50%">
					<?php echo JText::_('COM_JTCA_STATUS_HEADER');?>
				</th>					
			</tr>

			<?php
			$buffer .= ob_get_clean();		
				
			foreach($manifest->modules->module as $module)
			{
				$error_msg = '';
				$attributes = $module->attributes();
				$mod = $source.'/'.$attributes['folder'].'/'.$attributes['module'];
	            
				// check if the module is a new version for this externsion or a new plugin and either update or install
 				$query->clear();
				$query->select($db->quoteName('extension_id'));
				$query->from($db->quoteName('#__extensions'));
				$query->where($db->quoteName('name').' = '.$db->quote($attributes['module']));
				$query->where($db->quoteName('type').' = '.$db->quote('module'));
				$db->setQuery($query->__toString());
							
				$mod_id = $db->loadResult(); 
 				if ($mod_id) 
				{
					$mod_type = 'update';
				}
				else
				{
					$mod_type = 'install';
				}
	           
		        $installer = new JInstaller();
		        
				if (!$installer->$mod_type($mod))
				{
					while ($error = JError::getError(true))
					{
						$error_msg .= $error;
						$install_error = true;
					}
					$buffer .= $this->printError($attributes['module'], 'site', $mod_type, $error_msg);
					//$this->abort();
					break;
				}
				else
				{
					$buffer .= $this->printSuccess($attributes['module'], 'site',$mod_type);
				}  
			}
		}  

    
        // Closing HTML
			ob_start();
		?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<?php if ($install_error) : ?>
								<div id="jtcainstall-component-error">
									<?php echo JText::_('COM_JTCA_UPDATE_COMPONENT_ERROR'); ?>
								</div>			
							<?php else : ?>
								<div id="jtcainstall-component-success">
									<?php echo JText::_('COM_JTCA_UPDATE_COMPONENT_SUCCESS'); ?>
								</div>			
							<?php endif; ?>
						</td>
					</tr>
				</tfoot>
			</table>					
		</div>		
		 <?php
		 $buffer .= ob_get_clean();


		// Return stuff
		echo $buffer;		
    }
    /**
     * method to run before an install/update/uninstall method
     *
     * @param	string	type of action being performed
     * @param	object	parent installer application
     *
     * @return boolean	result is true or false
     */
    function preflight($type, $parent) 
    {
		$joomla_version = new JVersion();

		// Installing component manifest file version
		$this->release = $parent->get( "manifest" )->version;
		
		// Manifest file minimum Joomla! version
		$this->minimum_joomla_release = $parent->get( "manifest" )->attributes()->version;   

		// abort if the current Joomla! release is older
		if( version_compare( $joomla_version->getShortVersion(), $this->minimum_joomla_release, 'lt' ) ) {
			Jerror::raiseWarning(null, JTEXT::sprintf('COM_JTCA_INSTALL_COMPONENT_ERROR_WRONG_JOOMLA_VERSION',$this->minimum_joomla_release));
			return false;
		}
		switch ($type)
		{
			case 'install' :
				break; 
			case 'uninstall' :
				break; 
			case 'update' :
				$manifest = $this->getManifest();
				$old_release = $manifest['version'];
				$rel = $old_release . ' to ' . $this->release;
				// abort if the component being installed is not newer than the currently installed version		
				if ( version_compare( $this->release, $old_release, 'lt' ) )
				{
					Jerror::raiseWarning(null, JTEXT::sprintf('COM_JTCA_UPDATE_COMPONENT_ERROR_WRONG_VERSION_SEQUENCE', $rel));
					return false;
				}			
			default :
				break; 
		}	
		return true;        
    }

    /**
     * method to run after an install/update/uninstall method
     *
     * @param	string	type of action being performed
     * @param	object	parent installer application
     *
     * @return void
     */
    function postflight($type, $parent) 
    {
    
		switch ($type)
		{
			case 'install' :
				JFolder::create(JPATH_SITE.'/images/jtca'); 
				
				break;    				
			case 'update' :
				/*
				// Define in an array the param updates required and then use the setParams function to update them in the extensions table
				$param_array = array();
				// Repeat for each change
				$param_array[] = array('name' => 'value');
				setParams($param_array);
				*/
				break; 					
			default :
				break; 
		}				
    }
 	/**
	 * get a  manifest value in the component's row of the extension table
	 * 
	 * @return	array	manifest values
	 */
	private function getManifest()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Construct the query
		$query->select($db->quoteName('manifest_cache'));
		$query->from($db->quoteName('#__extensions'));	
		$query->where($db->quoteName('name').' = '.$db->quote('com_jtca'));		
		$query->where($db->quoteName('type').' = '.$db->quote('component'));

		$db->setQuery($query->__toString());
		
		$manifest = json_decode( $db->loadResult(), true );
		return $manifest;
	}
  	/**
	 * get a  parameter value in the component's row of the extension table
	 * 
	 * @return	array	parameter values
	 */
	private function getParams()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Construct the query
		$query->select($db->quoteName('params'));
		$query->from($db->quoteName('#__extensions'));	
		$query->where($db->quoteName('name').' = '.$db->quote('com_jtca'));		
		$query->where($db->quoteName('type').' = '.$db->quote('component'));

		$db->setQuery($query->__toString());
		
		$params = json_decode( $db->loadResult(), true );
		return $params;
	}
	/**
	 * sets parameter values in the component's row of the extension table
	 * 
     * @param	array	param array for the extension
	 * 
	 */
	private function setParams($param_array) {
		if ( count($param_array) > 0 )
		{
			// read the existing component value(s)
			$db = JFactory::getDbo();
			$params = $this->getParams();
			// add the new variable(s) to the existing one(s)
			foreach ( $param_array as $name => $value )
			{
				$params[ (string) $name ] = (string) $value;
			}
			// store the combined new and existing values back as a JSON string
			$params_string = json_encode( $params );
			
			$query = $db->getQuery(true);
			$query->update($db->quoteName('#__extensions'));
			$query->set($db->quoteName('params').' = '.$db->quote( $params_string ));
			$query->where($db->quoteName('name').' = '.$db->quote('com_jtca'));
			$query->where($db->quoteName('type').' = '.$db->quote('component'));

			$db->setQuery($query->__toString());
			
			$db->execute();
		}
	} 	   
    /**
     * method to output an error message for one of the packages in the component
     *
     * @param	string	the package being installed
     * @param	string	group - e.g. table name, or plugin group or part of site
     * @param	string	type of action - install, publish, update and uninstall
     * @param	string	the error message to display
     *
     * @return void
     */    
    private function printError($package, $group, $action, $msg)
    {
        ob_start();
        ?>
	<tr class="jtcainstall-row">
		<td>
			<?php echo $package;?>
		</td>
		<td>
			<?php echo $group;?>
		</td>								
		<td class="jtcainstall-error">
			<div>
				<?php echo JText::_('COM_JTCA_'.strtoupper($action).'_PACKAGE_ERROR');?><br />
				<span class="jtcainstall-errormsg">
					<?php echo $msg; ?>
				</span>	
			</div>		
		</td>
	</tr>    
    <?php
            $out = ob_get_clean();
        return $out;
    }
    /**
     * method to output a successful install message for one of the packages in the component
     *
     * @param	string	the package being installed
     * @param	string	group - e.g. table name, or plugin group or part of site
     * @param	string	type of action - install, publish, update and uninstall
  	 *
     * @return void
     */   
    private function printSuccess($package, $group, $action)
    {
        ob_start();
        ?>
		<tr class="jtcainstall-row">
			<td>
				<?php echo $package;?>
			</td>
			<td>
				<?php echo $group;?>
			</td>								
			<td class="jtcainstall-success">
				<div><?php echo JText::_('COM_JTCA_'.strtoupper($action).'_PACKAGE_SUCCESS');?></div>
			</td>
		</tr> 		
		<?php
            $out = ob_get_clean();
        return $out;
    }
    /**
     * function to add entries for the component tables to the ucm content type table
     *
     * @return void
     */   
    private function populateUCM()
    {
        $db = JFactory::getDbo();       
    
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE GOBIERNO';
		$content_type['type_alias'] = 'com_jtca.ljc01';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc01s","key":"id","type":"Ljc01s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc01Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc01.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE INGRESOS DE VALORES';
		$content_type['type_alias'] = 'com_jtca.ljc02';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc02s","key":"id","type":"Ljc02s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc02Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc02.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE EGRESOS DE VALORES';
		$content_type['type_alias'] = 'com_jtca.ljc03';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc03s","key":"id","type":"Ljc03s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc03Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc03.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE REGISTRO DE PROMOCIONES';
		$content_type['type_alias'] = 'com_jtca.ljc04';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc04s","key":"id","type":"Ljc04s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc04Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc04.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE TURNO PARA SENTENCIA';
		$content_type['type_alias'] = 'com_jtca.ljc05';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc05s","key":"id","type":"Ljc05s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc05Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc05.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE RECURSOS DE APELACIN';
		$content_type['type_alias'] = 'com_jtca.ljc06';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc06s","key":"id","type":"Ljc06s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc06Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc06.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE EXHORTOS';
		$content_type['type_alias'] = 'com_jtca.ljc07';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc07s","key":"id","type":"Ljc07s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc07Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc07.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE OFICIOS';
		$content_type['type_alias'] = 'com_jtca.ljc08';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc08s","key":"id","type":"Ljc08s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc08Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc08.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE ACTUARIOS';
		$content_type['type_alias'] = 'com_jtca.ljc09';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc09s","key":"id","type":"Ljc09s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc09Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc09.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE AUXILIARES DE LA ADMINISTRACIN DE JUSTICIA';
		$content_type['type_alias'] = 'com_jtca.ljc10';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc10s","key":"id","type":"Ljc10s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc10Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc10.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE REGISTRO DE AMPAROS';
		$content_type['type_alias'] = 'com_jtca.ljc12';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc12s","key":"id","type":"Ljc12s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc12Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc12.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE CONTROL DE FIANZAS';
		$content_type['type_alias'] = 'com_jtca.ljc13';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc13s","key":"id","type":"Ljc13s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc13Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc13.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE CONTROL DE MULTAS';
		$content_type['type_alias'] = 'com_jtca.ljc14';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc14s","key":"id","type":"Ljc14s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc14Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc14.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'AGENDA DE AUDIENCIAS';
		$content_type['type_alias'] = 'com_jtca.ljc16';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc16s","key":"id","type":"Ljc16s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc16Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc16.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE REMISIN AL ARCHIVO';
		$content_type['type_alias'] = 'com_jtca.ljc17';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc17s","key":"id","type":"Ljc17s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc17Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc17.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE REMISIN DE DOCUMENTOS AL ARCHIVO';
		$content_type['type_alias'] = 'com_jtca.ljc18';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc18s","key":"id","type":"Ljc18s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc18Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc18.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE ENVO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIN';
		$content_type['type_alias'] = 'com_jtca.ljc19';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc19s","key":"id","type":"Ljc19s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc19Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc19.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTCULOS 13 FRACCIN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIN PBLICA';
		$content_type['type_alias'] = 'com_jtca.ljc20';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc20s","key":"id","type":"Ljc20s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc20Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc20.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		$content_type = array();
		$content_type['type_title'] = 'LIBRO DE MINISTERIO PBLICO';
		$content_type['type_alias'] = 'com_jtca.ljc21';
		$content_type['table'] = '{"special":{"dbtable":"jtca_ljc21s","key":"id","type":"Ljc21s","prefix":"JtCaTable","config":"array()"},';
		$content_type['table'] .= '"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}';
		$content_type['rules'] = '';
		$content_type['field_mappings'] = '{"special":{},"common":{"core_content_item_id":"id",';
		$content_type['field_mappings'] .= '"core_title":"null",';
		$content_type['field_mappings'] .= '"core_state":"null",';
		$content_type['field_mappings'] .= '"core_alias":"null",';
		$content_type['field_mappings'] .= '"core_created_time":"created",';
		$content_type['field_mappings'] .= '"core_modified_time":"modified",';
		$content_type['field_mappings'] .= '"core_body":"null",';
		$content_type['field_mappings'] .= '"core_hits":"null",';
		$content_type['field_mappings'] .= '"core_publish_up":"null",';
		$content_type['field_mappings'] .= '"core_publish_down":"null",';
		$content_type['field_mappings'] .= '"core_access":"null",';
		$content_type['field_mappings'] .= '"core_params":"null",';
		$content_type['field_mappings'] .= '"core_featured":"null",';
		$content_type['field_mappings'] .= '"core_metadata":"null",';
		$content_type['field_mappings'] .= '"core_language":"null",';
		$content_type['field_mappings'] .= '"core_images":"null",';
		$content_type['field_mappings'] .= '"core_urls":"null",';
		$content_type['field_mappings'] .= '"core_version":"version",';
		$content_type['field_mappings'] .= '"core_ordering":"ordering",';
		$content_type['field_mappings'] .= '"core_metakey":"null",';
		$content_type['field_mappings'] .= '"core_metadesc":"null",';
		$content_type['field_mappings'] .= '"core_catid":"null",';
		$content_type['field_mappings'] .= '"core_xreference":"null",';
		$content_type['field_mappings'] .= '"asset_id":"null"';
		$content_type['field_mappings'] .= '}}';									
		$content_type['router'] = 'JtCaHelperRoute::getLjc21Route';

		$content_type['content_history_options']['formFile'] = 'administrator/components/com_jtca/models/forms/ljc21.xml';
                $content_type['content_history_options']['hideFields'][] = 'version';
		$content_type['content_history_options']['ignoreChanges'][] = 'modified_by';
                $content_type['content_history_options']['ignoreChanges'][] = 'modified';
		$content_type['content_history_options']['ignoreChanges'][] = 'version';
		$content_type['content_history_options']['convertToInt'][] = 'ordering';
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'created_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
		$content_type['content_history_options']['displayLookup'][] = array('sourceColumn'=>'modified_by','targetTable'=>'#__users','targetColumn'=>'id','displayColumn'=>'name');
                
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}', TRUE));
                if('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('{"displayLookup":[{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
                if('' != '')            
                    $content_type['content_history_options'] = array_merge_recursive($content_type['content_history_options'], json_decode('', TRUE));
				
                $content_type['content_history_options'] = json_encode($content_type['content_history_options']);
		$db->setQuery('INSERT INTO '.$db->quoteName('#__content_types')
						.' ('
							.$db->quoteName('type_title').', '
							.$db->quoteName('type_alias').', '
							.$db->quoteName('table').', '
							.$db->quoteName('rules').', '
							.$db->quoteName('field_mappings').', '
							.$db->quoteName('router').', '
							.$db->quoteName('content_history_options')
						.') VALUES '
						.' ('
							  .$db->quote($content_type['type_title']).', '
							  .$db->quote($content_type['type_alias']).', '
							  .$db->quote($content_type['table']).', '
							  .$db->quote($content_type['rules']).', '
							  .$db->quote($content_type['field_mappings']).', '
							  .$db->quote($content_type['router']).', '
							  .$db->quote($content_type['content_history_options'])
						  .');'
					  );

		$db->execute(); 
		
	}  
}
