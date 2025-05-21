<?php

namespace Jlonom\AllegroSDK\Exception;

class UpdateAdvanceShipNoticePreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Concurrent modification of ASN');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}