<?php

namespace Jlonom\AllegroSDK\Exception;

class GetCompatibilityListSuggestionNotFoundException extends NotFoundException
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
        parent::__construct('Suggestion was not found.');
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