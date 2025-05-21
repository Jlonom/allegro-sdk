<?php

namespace Jlonom\AllegroSDK\Exception;

class UploadAttachmentPUTRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Exceeded size limit');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}