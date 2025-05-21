<?php

namespace Jlonom\AllegroSDK\Exception;

class GetFulfillmentOrderParcelsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('User not authenticated or token is expired');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}