<?php
/**
 * Description of HTMLClass
 *
 * @author Microtemm
 */
class HtmlBo {
     private function render_dinamic($html = '', $array_de_resultados, $regex = '', $comodines = array()) {
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

    private function getHtml($path,$html_file = '') {
         $file = $path . $html_file . '.html';
         $template = file_get_contents($file);
         return $template;
    }
    
    public function getVIew($view, $data = array()){         
        $html='';
        switch ($view){
        CASE VIEW_LOGIN :
            $html = $this->getHtml(PATH_TEMPLATE, $view);
            $html = str_replace('<!--#title%-->','CMI',$html);
            $html = str_replace('<!--#'. $view .'%-->',$this->getHtml(PATH_FORM , $view),$html);             
        break;
        //default:
          //  $html = $this->getHtml(PATH_TEMPLATE,VIEW_DEFAULTT);            
        }
        print $html;
    }
    
    
    
    
    
    
    
    
    

    function render_dinamic_data($html, $data) {
        foreach ($data[0] as $clave => $valor) {
            $html = str_replace('<!--#' . $clave . '%-->', $valor, $html);
        }
        return $html;
    }

   // $form = file_get_contents($file);
    

}
