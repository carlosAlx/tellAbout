<?php

class Controller
{
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require_once 'view/' . $viewName . '.php';
    }
    public function loadTemplate($viewName, $viewData)
    {
        require_once 'view/template.php';
    }
}
