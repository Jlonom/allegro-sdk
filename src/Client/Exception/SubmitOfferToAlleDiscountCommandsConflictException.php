<?php

namespace Jlonom\AllegroSDK\Exception;

class SubmitOfferToAlleDiscountCommandsConflictException extends ConflictException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Provided UUID is already being used.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}