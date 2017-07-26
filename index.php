<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 12:58
 */

spl_autoload_register(function ($class_name) {
    include (str_replace('\\', "/", "$class_name.php"));
});

function d($val, $exit = false) {

    echo '<pre>';
    print_r($val);
    echo '</pre>';

    if (!$exit) {
        exit;
    }

}

$app = new Core\App();

$app->init();

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
