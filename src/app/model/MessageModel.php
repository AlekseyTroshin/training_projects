<?php

namespace app\model;

use app\dto\Message;
use app\dto\MessageDTO;
use database\Db;

class MessageModel
{

    public function __construct(
        private Db $db
    )
    {}

    public function addMessage(Message $message)
    {
        $this->db->query(
          'INSERT INTO ' . TABLE_DB . ' (name, content) VALUE (:name, :content)',
            [':name' => $message->getName(), ':content' => $message->getContent()],
            Message::class
        );
    }

    public function getMessages(): array
    {
        return $this->db->query(
            'SELECT name, content FROM ' . TABLE_DB,
            [],
            Message::class
        );
    }

}