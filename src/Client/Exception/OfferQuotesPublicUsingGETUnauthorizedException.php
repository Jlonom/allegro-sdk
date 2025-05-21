<?php

namespace Jlonom\AllegroSDK\Exception;

class OfferQuotesPublicUsingGETUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Full authentication is required to access this resource');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}