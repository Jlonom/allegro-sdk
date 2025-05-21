<?php

namespace Jlonom\AllegroSDK\Exception;

class GetAdvanceShipNoticeReceivingStateNotFoundException extends NotFoundException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Not Found (ASN doesn\'t exist or is in state DRAFT or IN_TRANSIT)');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}