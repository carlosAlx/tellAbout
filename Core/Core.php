<?php

//namespace Core;
//classe que controla url
class Core
{

    public function run2()
    {

        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currentController = 'HomeController';
            $currentAction = 'index';
        }

        $currentController = ucfirst($currentController);

        if (
            !file_exists('Controllers/' . $currentController . '.php')// ||  !method_exists('Controllers/' . $currentController, $currentAction)
        ) {
            $currentController = 'NotfoundController';
            $currentAction = 'index';
        }

        $c = new $currentController();

        call_user_func_array(array($c, $currentAction), $params);
    }
    public function run()
    {
        $url = '/' . (isset($_GET['q']) ? $_GET['q'] : '');
       // $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }


        $params = array();
        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && $url[0] != '/') {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currentController = 'HomeController';
            $currentAction = 'index';
        }
        $currentController = ucfirst($currentController);

        if (!file_exists('Controllers/' . $currentController . '.php')) {
            $currentController = 'NotfoundController';
            $currentAction = 'index';
        }


        $c = new $currentController();

        if (!method_exists($c, $currentAction)) {
            $currentAction = 'index';
        }

        call_user_func_array(array($c, $currentAction), $params);
    }
}
