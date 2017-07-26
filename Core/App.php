<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 13:02
 */

namespace Core;

use Controllers\BaseController;
use Models\DataModel;
use Models\FeedbackForm;
use Models\SendForm;
use Models\SendModel;
use Models\Filter\SuperFilter;

use Models\Filter\CheckEmail;
use Models\Filter\CheckName;
use Models\Filter\CheckMessage;

class App extends BaseController
{

    public function init()
    {

        $model = new SendModel();

        if($data = (new DataModel())->postData(FeedbackForm::class)){

// Проверяем если капча была введена
            $code = $data['captcha']; // Получаем переданную капчу.
            session_start();

// Сравниваем введенную капчу с сохраненной в переменной в сессии
            if($data['email'] != '' && isset($_SESSION['captcha']) && strtoupper($_SESSION['captcha']) == strtoupper($code)){

// Удаляем капчу из сессии
                unset($_SESSION['captcha']);

                $client_name = isset($data['full_name'])
                    ? (strlen($data['full_name']) < 255
                        ? addslashes($data['full_name'])
                        : 'Превышенна максимальная длинна имени 255')
                    : 'нет имени';
                //$client_name = (new SuperFilter())->validation(CheckName::class, $client_name);

                //Проверка email
                $client_email = isset($data['email'])
                    ? (strlen($data['email']) < 255
                        ? addslashes($data['email'])
                        : 'Превышенна максимальная длинна почты 255')
                    : 'нет почты';
                $client_email = (new SuperFilter())->validation(CheckEmail::class, $client_email);

                $message = isset($data['message'])
                    ? (strlen($data['message']) < 1001
                        ? addslashes($data['message'])
                        : 'Превышенна максимальная длинна текста 500')
                    : 'сообщения нет';
                //$message = (new SuperFilter())->validation(CheckMessage::class, $message);

                $form = new SendForm();
                $form->setData($client_name, $client_email, $message, $code);

                $status = $model->send($client_name, $client_email, $message);

            }
        }

        $this->render('layout/main', [
            'status' => !empty ($status) ? $status : SendModel::STATUS_NONE
        ]);

    }

}