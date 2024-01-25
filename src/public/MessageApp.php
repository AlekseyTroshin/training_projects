<?php

namespace public;

use app\controller\MessageController;

class MessageApp
{

    public function __construct(
        private MessageController $messageController
    )
    {}

    public function getController(): MessageController
    {
        return $this->messageController;
    }

}