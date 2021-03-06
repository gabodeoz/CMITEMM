<?php
class Control extends HtmlBo {
#handler_views
   public function handler_views ($view = '') {
        $html = '';
        switch ($view) {
            case VIEW_CREATE_USER:
                $html = $this->view_selected($view,'Alta de usuarios',PATH_FORM,CREATE_USER);                
                break; 
            case VIEW_LOGIN:
                $html = $this->view_selected($view,'Inicio de sesion',PATH_FORM,VALIDATE_USER);                                                
                break;
            case VIEW_USERS:
                $html = $this->view_selected($view,'Usuarios',PATH_TABLE,GET_USERS);                                                                
                break;
            case VIEW_ALTA_EMPLEADO:
                $html = $this->view_selected($view,'Alta empleado',PATH_FORM,CREATE_EMPLOYE);                
                break;
            case VIEW_REPORTE_INVENTARIO:
                $html = $this->view_selected($view,'Reporte de inventario',PATH_FORM);                
                break; 
            case VIEW_GENERAR_RESGUARDO:
                $html = $this->view_selected($view,'Generar resguardo',PATH_FORM);                
                break; 
            case VIEW_CONSULTA_UBICACIONES:
                $html = $this->view_selected($view,'Consulta de ubicaciones',PATH_FORM);                
                break; 
            case VIEW_CONSULTA_EMPLEADOS:
                $html = $this->view_selected($view,'Consulta de empleados',PATH_FORM);                
                break;                                       
            case VIEW_CONSULTA_EQUIPOS:                
                $html = $this->view_selected($view,'Consulta de equipos',PATH_FORM);                
                break;
            case VIEW_ALTA_MASIVA_EQUIPOS:
                $html = $this->view_selected($view,'Alta masiva de equipos',PATH_FORM);                
                break;
            case VIEW_UPDATE_USER:
                $html = $this->view_selected($view,'Actualizar usuario',PATH_FORM);                                
                break;
            case VIEW_ALTA_EQUIPOS:
                $html = $this->view_selected($view,'Alta de equipos',PATH_FORM);                                                
                break;            
            case VIEW_HOME:
                $html = $this->view_selected($view,'Principal',PATH_FORM);                                                                
                break;
        }//.switch 
        print ($html);
    }
    
    private function view_selected($view, $title, $path, $action='') {
        $file_js = '';
        $str_hmtml = '';
        if ($view == VIEW_LOGIN) {
            $str_html = $this->getHtml(PATH_TEMPLATE, VIEW_LOGIN);
        } else {
            $str_html = $this->getHtml(PATH_TEMPLATE, VIEW_MAIN);
        }
        $str_html = str_replace(REGEX_BODY, $this->getHtml($path, $view), $str_html);
        $str_html = str_replace(TITLE, $title, $str_html);        
        $str_html = str_replace("%action%",PATH_CORE.$action, $str_html); 
        $str_html = str_replace("%VIEW_HOME%",VIEW_HOME, $str_html); 
        
        $str_html = str_replace(REGEX_BODY, $this->getHtml($path, $view), $str_html);
        #verificamos si existe javascript       
        $file_js =PATH_JS.$view.'.js';
        if(is_readable($file_js)){               
            $str_html = str_replace(REGEX_JS, file_get_contents($file_js), $str_html);            
        }        
        return $str_html;
    }

//.handler
}

?>