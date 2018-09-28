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

    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_FECHA_ACUERDO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_FECHA_ACUERDO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_FECHA_BOLETIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_FECHA_BOLETIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_JUZGADO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_JUZGADO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_ACTOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_ACTOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_DEMANDADO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_DEMANDADO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TERCERIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TERCERIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TIPO_JUICIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TIPO_JUICIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TOCA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TOCA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_ANIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_ANIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TIPO_RESOLUCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_FIELD_TIPO_RESOLUCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_FECHA_ACUERDO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_FECHA_ACUERDO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_FECHA_BOLETIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_FECHA_BOLETIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_SALA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_SALA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ACTOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ACTOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_DEMANDADO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_DEMANDADO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TERCERIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TERCERIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TIPO_JUICIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TIPO_JUICIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TOCA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TOCA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ANIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ANIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ASUNTO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_ASUNTO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TIPO_RESOLUCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_FIELD_TIPO_RESOLUCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_ID_DELEGACION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_ID_DELEGACION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_PROMOVENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_PROMOVENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_DESTINATARIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_DESTINATARIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_AUTORIDADES_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_AUTORIDADES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_FECHA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_FIELD_FECHA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PRODECON_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_NOMBRE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_NOMBRE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_MARCA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_MARCA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_PORCENTAJE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_PORCENTAJE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_IS_CONCILIANET_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_IS_CONCILIANET_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_IS_CONCILIAEXPRES_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_IS_CONCILIAEXPRES_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_ID_GIRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_FIELD_ID_GIRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PROFECO_PROVEEDORES_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_RFC_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_RFC_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_NOMBRE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_NOMBRE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_OFICIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_OFICIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_OFICIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_OFICIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_EMISOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_EMISOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_ID_MEDIO_NOTIFICACION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_ID_MEDIO_NOTIFICACION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_NOTIFICACION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_NOTIFICACION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_SURTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_FIELD_FECHA_SURTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SRSPS_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_SANCIONADORA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_SANCIONADORA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_RESOLUCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_RESOLUCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_SANCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_SANCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_DURACION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_DURACION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_INICIO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_INICIO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_FIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_F_FIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_DEPENDENCIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_DEPENDENCIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_CAUSA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_CAUSA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_ORIGEN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_ORIGEN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_PATERNO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_PATERNO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_MATERNO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_MATERNO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_NOMBRE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_FIELD_NOMBRE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_RSPS_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_INSTANCIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_INSTANCIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_ASUNTO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_ASUNTO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_NEUN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_NEUN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_NCOCC_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_NCOCC_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_FECHA_AUTO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_FECHA_AUTO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_CUADERNO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_ID_CUADERNO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_FECHA_PUBLICACION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_FIELD_FECHA_PUBLICACION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_PJF_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_INSTANCIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_INSTANCIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_FECHA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_FECHA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_ACTOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_FIELD_ACTOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFCA_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DISPLAY'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_CONFIG_SINGLE_ITEM_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FIELD_LAYOUT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_CHOOSE_LAYOUT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_ICONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_SHOW_PRINT_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_EMAIL_ICON_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_EMAIL_ICON_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_KEEP_ITEMID_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_KEEP_ITEMID_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_BREADCRUMB_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_CATEGORY_BREADCRUMB_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LIMIT_CATEGORY_NAVIGATION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_LIMIT_CATEGORY_NAVIGATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_READMORE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_READMORE_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_READMORE_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LINK_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_LINK_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PARENT_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_PARENT_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LINK_PARENT_CATEGORY_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_LINK_PARENT_CATEGORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADMIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_ADMIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_FECHA_BOLETIN_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_FECHA_BOLETIN_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_REGION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_REGION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_INSTANCIA_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_INSTANCIA_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_EXPEDIENTE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_EXPEDIENTE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_ACTOR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_ACTOR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_PARTE_A_NOTIFICAR_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_PARTE_A_NOTIFICAR_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_AUTO_O_RESOLUCION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_FIELD_AUTO_O_RESOLUCION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_CONFIG_BLOG_LIST_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_CONFIG_BLOG_LIST_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_LEADING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_LEADING_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_INTRO_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_INTRO_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_COLUMNS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_COLUMNS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_NUM_LINKS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_LINKS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_MULTI_COLUMN_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_MULTI_COLUMN_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_CATEGORY_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_CATEGORY_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_CATEGORY_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_CATEGORY_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDERING_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_ORDERING_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_ORDER_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_ORDER_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_ORDER_DIRECTION_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_ORDER_DIRECTION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_FILTER_FIELD_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_FILTER_FIELD_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_SHOW_HEADINGS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_PAGINATION_RESULTS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_PAGINATION_LIMIT_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_PAGINATION_LIMIT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NUM_PER_PAGE_LABEL'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NO_ITEMS_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_NO_ITEMS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_ADD_LINK_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_ADD_LINK_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_SHOW_DATE_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_SHOW_DATE_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_DATE_FORMAT_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_DATE_FORMAT_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_BOLETIN_LIST_ORDERING_LABEL'). ' & ' . $this->jtext2lyx('COM_BOLETIN_TFJFA_BACUERDOS_LIST_ORDERING_DESC'). ' \tabularnewline\hline '. "\r\n";
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
