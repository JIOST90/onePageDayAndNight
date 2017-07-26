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
use Models\SendModel;

class App extends BaseController
{

    public function init()
    {

        $model = new SendModel();

        if($data = (new DataModel())->postData(FeedbackForm::class)){

            // Проверяем если капча была введена

                $code = $data['capcha']; // Получаем переданную капчу.
                session_start();


// Сравниваем введенную капчу с сохраненной в переменной в сессии
            if($data['email'] != '' && isset($_SESSION['capcha']) && strtoupper($_SESSION['capcha']) == strtoupper($code)){

// Удаляем капчу из сессии
                unset($_SESSION['capcha']);

                $client_name = (isset($data['full_name']))
                    ? (strlen($data['full_name']) < 255
                        ? addslashes($data['full_name'])
                        : 'Превышенна максимальная длинна имени 255')
                    : 'нет имени';
                $client_email =  isset($data['email'])
                    ? (strlen($data['email']) < 255
                        ? addslashes($data['email'])
                        : 'Превышенна максимальная длинна почты 255')
                    : 'нет почты';
                $message = isset($data['message']) ? (strlen($data['message']) < 500 ? addslashes($data['message']) : 'Превышенна максимальная длинна текста 500') : 'сообщения нет';

                $status = $model->send($client_name, $client_email, $message);
            } else {
                $status = SendModel::STATUS_NOT_SEND;
            }
        }

        $this->render('layout/main', [
            'status' => !empty($status) ? $status : SendModel::STATUS_NONE
        ]);

    }

}