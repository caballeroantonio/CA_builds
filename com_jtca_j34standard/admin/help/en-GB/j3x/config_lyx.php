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
    $output .= $this->jtext2lyx('COM_JTCA_LJC02S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC02S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC03S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC03S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC04S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC04S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC05S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC05S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC06S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC06S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC07S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC07S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC08S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC08S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC09S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC09S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC10S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC10S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC12S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC12S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC13S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC13S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC14S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC14S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC16S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC16S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC17S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC17S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC18S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC18S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC19S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC19S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC20S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC20S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";
    $output .= $this->jtext2lyx('COM_JTCA_LJC21S_FIELD_SAVE_HISTORY_LABEL'). ' & ' . $this->jtext2lyx('COM_JTCA_LJC21S_FIELD_SAVE_HISTORY_DESC'). ' \tabularnewline\hline '. "\r\n";

        return $output;
    }

}
