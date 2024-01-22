<?php

namespace app\controller;

use app\services\MessageServices;
use app\model\MessageModel;

require_once dirname(__DIR__) . "/../config/init.php";

if (!empty(trim($_POST['name'])) && !empty(trim($_POST['content']))) {
    $name = $_POST['name'];
    $content = $_POST['content'];

    $messageServices = new MessageServices(new MessageModel());
    $messageServices->addMessage(['name' => $name, 'content' => $content]);
}

header("Location: /public/index.php");



