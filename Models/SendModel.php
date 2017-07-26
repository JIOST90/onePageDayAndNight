<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 18:29
 */

namespace Models;


class SendModel
{
    const STATUS_NONE = 0;
    const STATUS_SEND = 1;
    const STATUS_NOT_SEND = 2;

    public static function check($id, $status)
    {
        return ($id == $status);
    }

    public function send($client_name, $client_email, $message)
    {
        $subject = 'Новая заявка!';

        $to = 'veronika170755@gmail.com, a.s.kashtanov@gmail.com';
        $from = 'zakaz@localhost';

        $messageToSend = "\r\n
            Имя и Фамилия: $client_name\r\n
            Email: $client_email\r\n
            Сообщение: $message\r\n";

        return (mail($to, $subject, $messageToSend,
            "From: $from\r\n") ? self::STATUS_SEND : self::STATUS_NOT_SEND);
    }
}