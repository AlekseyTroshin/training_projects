<?php


namespace app\dto;


class MessageDTO extends Message
{

    public function __construct(string $name, string $content)
    {
        $this->setName($name);
        $this->setContent($content);
    }

}