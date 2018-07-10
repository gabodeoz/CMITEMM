<?php
class Control extends HtmlBo {

   public function handler($metod = '') {
        $html = '';
        switch ($metod) {
            case VIEW_USERS:
                $html = $this->getHtml(PATH_TEMPLATE, VIEW_MAIN);
                
                break;
            case VIEW_LOGIN:
                $html = $this->getHtml(PATH_TEMPLATE, $metod);
                $html = str_replace(TITULO,'Inicio sesion', $html);
                $form =  $this->getHtml(PATH_FORM, $metod);
                $html = str_replace(FORM_LOGIN,$form, $html);
                break;
        }//.switch     
        print ($html);
    }

//.handler
}

?>