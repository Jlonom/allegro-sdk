<?php

namespace Jlonom\AllegroSDK\Exception;

class GetParcelTrackingUsingGETBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Bad request, e.g. unknown carrier id, missing or too many waybills in query parameter');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}