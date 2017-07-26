<?php
// Проверяем если капча была введена
if ( isset($_POST['captcha']) )
{
    $code = $_POST['captcha']; // Получаем переданную капчу.
    session_start();

    // Сравниваем введенную капчу с сохраненной в переменной в сессии
    if(isset($_SESSION['captcha']) && strtoupper($_SESSION['captcha']) == strtoupper($code))

    {
        echo 'Капча введена правильно';
    }else{
        echo 'Капча введена не верно';
    }

    // Удаляем капчу из сессии
    unset($_SESSION['captcha']);

    exit();
}

var_dump($_POST);
?>