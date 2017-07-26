<?php
// Проверяем если капча была введена
if ( isset($_POST['capcha']) ) {
    $code = $_POST['capcha']; // Получаем переданную капчу.
    session_start();

    // Сравниваем введенную капчу с сохраненной в переменной в сессии
    if(isset($_SESSION['capcha']) && strtoupper($_SESSION['capcha']) == strtoupper($code)) {
        echo 'Капча введена правильно';
    }else{
        echo 'Капча введена не верно';
    }

    // Удаляем капчу из сессии
    unset($_SESSION['capcha']);

    exit();
}

var_dump($_POST);
?>