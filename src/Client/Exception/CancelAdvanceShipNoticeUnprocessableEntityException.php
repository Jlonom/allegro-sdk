<?php

namespace Jlonom\AllegroSDK\Exception;

class CancelAdvanceShipNoticeUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('ASN cannot be cancelled - it is not in IN_TRANSIT status.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}