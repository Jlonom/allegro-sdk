<?php

namespace Jlonom\AllegroSDK\Exception;

class PreconditionFailedException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 412);
    }
}