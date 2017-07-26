<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.07.2017
 * Time: 18:05
 */

$this->render('blocks/block_header');
$this->render('blocks/block_title');
$this->render('blocks/block_body', ['status' => $status]);
