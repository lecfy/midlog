<?php

class Controller extends BaseController
{


    protected function view($name, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        $return = require_once APP_PATH . 'Views/header.php';
        $return .= require_once APP_PATH . 'Views/' . $name . '.php';
        $return .= require_once APP_PATH . 'Views/footer.php';

        return $return;
    }
}