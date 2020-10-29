<?php

namespace Samiax\FbMessengerApiBundle\Service;

class Messenger
{
    public $messenger;

    public function __construct($messenger)
    {
    	$this->messenger = $messenger;
    }

    public function getMessage()
    {
    	return $this->messenger->message;
    }
}
