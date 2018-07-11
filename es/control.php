<?php
class Control extends HtmlBo {

   public function handler_views ($view = '') {
        $html = '';
        switch ($view) {
            case VIEW_USERS:
                $html = $this->getHtml(PATH_TEMPLATE, VIEW_MAIN);
                $html = str_replace(TITULO,'Usuarios', $html);
                $form =  $this->getHtml(PATH_FORM, $view);
                $html = str_replace(REGEX_BODY,$form, $html);
                break;
            case VIEW_LOGIN:
                $html = $this->getHtml(PATH_TEMPLATE, $view);
                $html = str_replace(TITULO,'Inicio sesion', $html);
                $form =  $this->getHtml(PATH_FORM, $view);
                $html = str_replace(FORM_LOGIN,$form, $html);
                break;
        }//.switch 
        print ($html);
    }

//.handler
}

?>