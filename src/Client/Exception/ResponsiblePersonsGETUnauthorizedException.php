<?php

namespace Jlonom\AllegroSDK\Exception;

class ResponsiblePersonsGETUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Jlonom\AllegroSDK\Model\AuthError
     */
    private $authError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jlonom\AllegroSDK\Model\AuthError $authError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->authError = $authError;
        $this->response = $response;
    }
    public function getAuthError(): \Jlonom\AllegroSDK\Model\AuthError
    {
        return $this->authError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}