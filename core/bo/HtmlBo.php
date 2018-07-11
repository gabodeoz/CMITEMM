<?php
/**
 * Description of HTMLClass
 *
 * @author Microtemm
 */
class  HtmlBo {
    protected function render_dinamic($html = '', $array_de_resultados, $regex = '', $comodines = array()) {
        //print_r($array_de_resultados);
        $array_coincidencias = array();
        $template = get_template($html);
        preg_match($regex, $template, $array_coincidencias);
        //print_r($array_coincidencias);
        $codigo = $array_coincidencias[0];

        $render_options = '';
        foreach ($array_de_resultados as $array_asociativo) {
            $sustituciones = array_values($array_asociativo);
            $render_options .= str_replace($comodines, $sustituciones, $codigo);
        }
        $html = str_replace($codigo, $render_options, $template);
        return $html;
    }

    protected function getHtml($path, $html_file = '') {
        $template = '';
        $file_path = $path . $html_file . '.html';
        
        if (is_readable($file_path)) {
            $template = file_get_contents($file_path);
        }else{
            $template = $this->getHtml(PATH_TEMPLATE,VIEW_DEFAULT);             
        }
        return $template;
    }
    
    protected function render_dinamic_data($html, $data) {
        foreach ($data[0] as $clave => $valor) {
            $html = str_replace('<!--#' . $clave . '%-->', $valor, $html);
        }
        return $html;
    }

}
