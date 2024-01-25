<?php

namespace app\controller;

use app\dto\Message;
use app\model\MessageModel;

class MessageController
{

    public function __construct(
        private MessageModel $messageModel
    )
    {}

    public function addMessage(Message $message)
    {
        $this->messageModel->addMessage($message);
    }

    public function getMessages(): array
    {
        return $this->messageModel->getMessages();
    }
}