<?php

namespace Jlonom\AllegroSDK\Exception;

class ListMessagesGETUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Incorrect limit, offset, after or before');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}