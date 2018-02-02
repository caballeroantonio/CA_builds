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
        JFactory::getLanguage()->load('com_jtca', JPATH_ADMINISTRATOR, 'es-ES', true);
        $output = '';

    $output .= '\textbf{' . $this->jtext2lyx('COM_JTCA_FIELDSET_VERSION_CONTROL_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_JTCA_FIELDSET_VERSION_CONTROL_DESC'). '} \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('JGLOBAL_HISTORY_LIMIT_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('JGLOBAL_SAVE_HISTORY_OPTIONS_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_SAVE_HISTORY_OPTIONS_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP19S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP19S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP20S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP20S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP21S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP21S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP22S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP22S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP23S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP23S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP24S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP24S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP25S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP25S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP26S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP26S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP27S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP27S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP28S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP28S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP29S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP29S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP30S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP30S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP31S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP31S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP32S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP32S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP33S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP33S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP34S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP34S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP35S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP35S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP36S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP36S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP39S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP39S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP40S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP40S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LCP41S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LCP41S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPE08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPE08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS01S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS01S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LEJEMPLOS_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LEJEMPLOS_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS11S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS11S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADNG12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADNG12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSC13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSC13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJOC14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJOC14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LSPS14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LSPS14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG15S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG15S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJCCM17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJCCM17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPDNG18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPDNG18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJJADG18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJJADG18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJPES18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJPES18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC19S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC19S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF19S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF19S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP19S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP19S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC20S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC20S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF20S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF20S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP20S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP20S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC21S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC21S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF21S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF21S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJP21S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJP21S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJF22S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJF22S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= '\textbf{' . $this->jtext2lyx('COM_JTCA_PERMISSIONS_LABEL'). '} & \textbf{' . $this->jtext2lyx('COM_JTCA_PERMISSIONS_DESC'). '} \tabularnewline\hline '. "\r\n";

        return $output;
    }

}
