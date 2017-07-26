<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 18:28
 */

namespace Models;


class DataModel
{
    /** @var  array */
    private $dataPost;

    /** @var  array */
    private $dataGet;

    public function __construct()
    {
        $this->dataPost = $_POST;
        $this->dataGet = $_GET;
    }

    /**
     * @param $name
     * @return array|null
     */
    public function postData($name)
    {
        return  $this->checkPostData($name) ? $this->dataPost[$name] : null;
    }

    /**
     * проверка наличия postData
     *
     * @param $name
     * @return bool
     */
    public function checkPostData($name)
    {
        return array_key_exists ( $name, $this->dataPost );
    }

    /**
     * @param $name
     * @return array|null
     */
    public function getData($name)
    {
        return  $this->checkGetData($name) ? $this->dataGet[$name] : null;
    }

    /**
     * проверка наличия getData
     *
     * @param $name
     * @return bool
     */
    public function checkGetData($name)
    {
        return array_key_exists ( $name, $this->dataGet );
    }
}