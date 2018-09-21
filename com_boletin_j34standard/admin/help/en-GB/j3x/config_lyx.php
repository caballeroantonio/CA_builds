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
 * administrator/index.php?option=com_t396&view=dashboard&layout=borrame
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
        JFactory::getLanguage()->load('com_boletin', JPATH_ADMINISTRATOR, 'es-ES', true);
        $output = '';

    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_FIELDSET_VERSION_CONTROL_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_FIELDSET_VERSION_CONTROL_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SAVE_HISTORY_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SAVE_HISTORY_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_BREADCRUMB_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_CATEGORY_BREADCRUMB_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LIMIT_CATEGORY_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_LIMIT_CATEGORY_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LINK_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_LINK_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PARENT_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_PARENT_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LINK_PARENT_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_LINK_PARENT_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_FECHA_BOLETIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_FECHA_BOLETIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_REGION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_REGION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_INSTANCIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_INSTANCIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_ACTOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_ACTOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_PARTE_A_NOTIFICAR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_PARTE_A_NOTIFICAR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_AUTO_O_RESOLUCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_FIELD_AUTO_O_RESOLUCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_CATEGORY_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_CATEGORY_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_CATEGORY_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_CATEGORY_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDERING_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_ORDERING_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LIST_ORDERING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FACUERDOS_LIST_ORDERING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('JCATEGORIES'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_FIELD_CONFIG_CATEGORIES_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_SHOW_BASE_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_FIELD_SHOW_BASE_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_EMPTY_CATEGORIES_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_EMPTY_CATEGORIES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_UNAUTH_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_UNAUTH_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_CATEGORY_ITEMS_TO_DISPLAY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_CATEGORY_ITEMS_TO_DISPLAY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUMBER_CATEGORY_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_NUMBER_CATEGORY_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('JCATEGORY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_FIELD_CONFIG_CATEGORY_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_FIELD_CATEGORY_COMPONENT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_FIELD_CATEGORY_COMPONENT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_TITLE'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_TITLE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_IMAGE_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_IMAGE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_HEADING_TITLE_TEXT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_CATEGORY_HEADING_TITLE_TEXT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_EMPTY_CATEGORIES_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_EMPTY_CATEGORIES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_SUBCATEGORIES_DESCRIPTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_MAXIMUM_CATEGORY_LEVELS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_UNAUTH_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_UNAUTH_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUMBER_CATEGORY_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_NUMBER_CATEGORY_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PERMISSIONS_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PERMISSIONS_DESC'). '} \tabularnewline\hline '. "\r\n";

        return $output;
    }

}
