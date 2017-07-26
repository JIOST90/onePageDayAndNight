<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 13:12
 */

namespace Controllers;
use Models\DataModel;

class BaseController
{

    public function render($view, $data = [])
    {
        foreach ($data as $key => $val){
            $$key = $val;
        }

        ob_start();
        include 'view/' . $view . '.php';
        $html = ob_get_clean();

        echo $html;
    }

    public function getData()
    {
        return (new DataModel());
    }
}