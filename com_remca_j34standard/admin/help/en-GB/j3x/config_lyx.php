<?php 
/**
 * tomé el archivo admin/codetemplates/j_3_4_standard/com_architectcomp_j34standard/admin/config.xml
 * y con él generé éste archivo.
 * 
 * El objetivo es mostrar la lista de todos los campos de configuración con sus descripciones
 * en formato latex.
 * 
 * Para obtener los valores de las etiquetas del archivo language.ini coloco el
 * compilado de este archivo en admin/views/dashboard/tmpl/ y lo despliego dentro de una vista, ejemplo
 * http://localhost/JPruebas/administrator/index.php?option=com_t396&view=dashboard&layout=borrame
 * 
 * el archivo language.ini puede contener carácteres especiales de latex, por lo que habrá que depurar.
 * 
 */
class Foo {
	
    protected $_latex_forbidden = array(
        '\u00e1', '\u00e9', '\u00ed', '\u00f3', '\u00fa', '\u00c1', '\u00c9', '\u00cd', '\u00d3', '\u00da', '\u00f1', '\u00d1',
        '\r\n', '~', '^', '\\', 
        '&', '%', '$', '#', '_', '{', '}',
        'á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ',
     );
    //http://www.aq.upm.es/Departamentos/Fisica/agmartin/webpublico/latex/FAQ-CervanTeX/FAQ-CervanTeX-6.html
    //"\'a", "\'e", "\'i{}", "\'o", "\'u", "\'A", "\'E", "\'I", "\'O", "\'U", "\~n", "\~N",
    protected $_latex_replacement = array(
        'á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ',
        '', '\textasciitilde ', '\textasciicircum ', '\textbackslash ',
        '\&', '\%', '\$', '\#', '\_', '\{', '\}', 
        '\\\'a', '\\\'e', '\\\'i{}', '\\\'o', '\\\'u', '\\\'A', '\\\'E', '\\\'I', '\\\'O', '\\\'U', '\\~n', '\\~N',
    );
	
    /**
     * Obtiene el valor una constante i18n definida en un archivo .ini
     * @param string $label Constante i18n
     * @return string valor equivalente
     */
    function jtext2lyx($label){
        return str_replace( $this->_latex_forbidden, $this->_latex_replacement, JText::_($label));
    }

    function printConfigs(){
        #JFactory::getLanguage()->load('com_jtsca', JPATH_ADMINISTRATOR, 'es-GB', true);
        JFactory::getLanguage()->load('com_remca', JPATH_ADMINISTRATOR, 'es-ES', true);
        $output = '';

    $output .= '\textbf{' . $this->jtext2lyx('COM_REMCA_FIELDSET_VERSION_CONTROL_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_REMCA_FIELDSET_VERSION_CONTROL_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SAVE_HISTORY_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_SAVE_HISTORY_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_HOUSES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_HOUSES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_MAIN_CATEGORIES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_MAIN_CATEGORIES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_MIME_TYPES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_MIME_TYPES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_MLS_FOR_DELETE_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_MLS_FOR_DELETE_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_ORDERS_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_ORDERS_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_ORDERS_DETAILS_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_ORDERS_DETAILS_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_PHOTOS_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_PHOTOS_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_RENT_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_RENT_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_RENT_REQUEST_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_RENT_REQUEST_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_RENT_SAL_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_RENT_SAL_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_REVIEW_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_REVIEW_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_TRACK_SOURCE_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_TRACK_SOURCE_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_USERS_WISHLIST_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_USERS_WISHLIST_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_VIDEO_SOURCE_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_VIDEO_SOURCE_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_BUYING_REQUEST_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_BUYING_REQUEST_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_CATEGORIES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_CATEGORIES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_CONST_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_CONST_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_CONST_LANGUAGE_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_CONST_LANGUAGE_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_FEATURE_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_FEATURE_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_FEATURE_HOUSES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_FEATURE_HOUSES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_LANGUAGES_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_LANGUAGES_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('JCATEGORIES'). '} & \textbf{' . $this->jtext2lyx('COM_REMCA_FIELD_CONFIG_CATEGORIES_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_SHOW_BASE_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_FIELD_SHOW_BASE_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_EMPTY_CATEGORIES_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_SHOW_EMPTY_CATEGORIES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_SHOW_UNAUTH_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_SHOW_CATEGORY_UNAUTH_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_CATEGORY_ITEMS_TO_DISPLAY_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_CATEGORY_ITEMS_TO_DISPLAY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_NUMBER_CATEGORY_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_NUMBER_CATEGORY_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('JCATEGORY'). '} & \textbf{' . $this->jtext2lyx('COM_REMCA_FIELD_CONFIG_CATEGORY_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_FIELD_CATEGORY_COMPONENT_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_FIELD_CATEGORY_COMPONENT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_TITLE'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_TITLE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_IMAGE_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_IMAGE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_HEADING_TITLE_TEXT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_HEADING_TITLE_TEXT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_EMPTY_CATEGORIES_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_SHOW_EMPTY_CATEGORIES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_SHOW_UNAUTH_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_SHOW_CATEGORY_UNAUTH_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_NUMBER_CATEGORY_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_NUMBER_CATEGORY_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_REMCA_FIELD_SHOW_CATEGORY_TAGS_LABEL'). ' & ' . $this->jtext2lyx('COM_REMCA_FIELD_SHOW_CATEGORY_TAGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_REMCA_PERMISSIONS_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_REMCA_PERMISSIONS_DESC'). '} \tabularnewline\hline '. "\r\n";

        return $output;
    }

}
