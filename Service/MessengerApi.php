<?php

namespace Samiax\FbMessengerApiBundle\Service;

class MessengerApi
{
    public $messenger;

    public function __construct($messenger)
    {
        $this->messenger = $messenger;
    }
}
