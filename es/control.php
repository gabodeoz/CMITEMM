<?php
class Control extends HtmlBo {

   public function handler_views ($view = '') {
        $html = '';
        switch ($view) {
            case VIEW_ALTA_MASIVA_EQUIPOS:
                $html = $this->view_selected($view,'Alta masiva de equipos',PATH_FORM);                
                break;
            case VIEW_UPDATE_USER:
                $html = $this->view_selected($view,'Actualizar usuario',PATH_FORM);                                
                break;
            case VIEW_ALTA_EQUIPOS:
                $html = $this->view_selected($view,'Alta de equipos',PATH_FORM);                                                
                break;
            case VIEW_USERS:
                $html = $this->view_selected($view,'Usuarios',PATH_TABLE);                                                                
                break;
            case VIEW_LOGIN:
                $html = $this->view_selected($view,'Inicio de sesion',PATH_FORM);                                                
                break;
        }//.switch 
        print ($html);
    }
    
    private function view_selected($view, $title, $path) {
        $str_hmtml = '';
        if ($view == VIEW_LOGIN) {
            $str_html = $this->getHtml(PATH_TEMPLATE, VIEW_LOGIN);
        } else {
            $str_html = $this->getHtml(PATH_TEMPLATE, VIEW_MAIN);
        }
        $str_html = str_replace(TITULO, $title, $str_html);
        $str_html = str_replace(REGEX_BODY, $this->getHtml($path, $view), $str_html);
        return $str_html;
    }

//.handler
}

?>