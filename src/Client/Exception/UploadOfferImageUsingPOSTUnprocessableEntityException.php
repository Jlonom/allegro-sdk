<?php

namespace Jlonom\AllegroSDK\Exception;

class UploadOfferImageUsingPOSTUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable entity (problem with image server)');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}