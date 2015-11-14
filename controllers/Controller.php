<?php

/*
 * Simple Controller
 * using $_GET['r'] = 'controllername/method'
 * $controller = new Controller($r)
 * $controller->run();
 */

class Controller {

    public $caction;
    public $cmethod;
    public $action;
    public $method;
    public $dirLayout = 'views/layouts/';
    public $layout = 'main.php';

    public function __construct($r = NULL) {
        //looking for "/"
        $pos = strpos($r, "/");

        if (empty($r)) {
            $this->caction = 'site';
            $this->cmethod = 'index';
        } else {

            if ($pos === false) {
                $this->caction = $r;
                $this->cmethod = 'index';
            } else {
                $parts = explode("/", $r);
                $this->caction = strtolower($parts[0]);
                $this->cmethod = strtolower($parts[1]);
            }
        }


        $this->action = ucfirst($this->caction) . 'Controller';
        $this->method = strtolower($this->cmethod);

        //$this->run();
    }

    public function setLayout($file) {
        $layout = "/layout/" . $file . '.php';
        $this->layout = $layout;
    }

    //echo $view->render('viewfile.php', array('foo' => 'bar'));
    public function render($view, $variables = array()) {
        extract($variables);

        $content = 'views/' . strtolower($this->caction) . '/' . $view . '.php';
        $layout = $this->dirLayout . $this->layout;

        if (!file_exists($content)) {
            echo 'content: ' . $content . ' not exist!';
            exit(0);
        }

        if (!file_exists($layout)) {
            echo 'layouts: ' . $this->layout . ' not exist!';
            exit(0);
        }

        ob_start();
        include($layout);
        $renderedView = ob_get_clean();

        ob_end_clean();
        echo $renderedView;
    }

    public function run() {
        $controller = new $this->action;
        $method = $this->method;
        return $controller->$method();
    }

    public static function parseUri($r) {
        
    }

}
