<?php

namespace app\services;

use app\model\MessageModel;


class MessageServices
{

    private MessageModel $messageModel;

    public function __construct(MessageModel $messageModel)
    {
        $this->messageModel = $messageModel;
    }

    public function addMessage(array $message)
    {
        $this->messageModel->addMessage($message);
    }

    public function getMessages(): array
    {
        return $this->messageModel->getMessages();
    }

}