<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 18:30
 */

namespace Models;


class SendForm
{
    private $full_name;
    private $email;
    private $message;
    private $captcha;

    public function setData($full_name, $email, $message, $captcha)
    {
        $this->full_name = $full_name;
        $this->email = $email;
        $this->message = $message;
        $this->captcha = $captcha;

        d($this);
    }
}

