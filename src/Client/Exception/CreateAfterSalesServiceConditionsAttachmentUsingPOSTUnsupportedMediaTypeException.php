<?php

namespace Jlonom\AllegroSDK\Exception;

class CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unsupported media type.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}