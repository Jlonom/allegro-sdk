<?php

namespace Jlonom\AllegroSDK\Exception;

class GetSubmitCommandUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Jlonom\AllegroSDK\Model\ErrorsHolder
     */
    private $errorsHolder;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jlonom\AllegroSDK\Model\ErrorsHolder $errorsHolder, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid request parameters.');
        $this->errorsHolder = $errorsHolder;
        $this->response = $response;
    }
    public function getErrorsHolder(): \Jlonom\AllegroSDK\Model\ErrorsHolder
    {
        return $this->errorsHolder;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}