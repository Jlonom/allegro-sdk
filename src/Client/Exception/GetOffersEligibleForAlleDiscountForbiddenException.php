<?php

namespace Jlonom\AllegroSDK\Exception;

class GetOffersEligibleForAlleDiscountForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Forbidden. Access to the AlleDiscount campaign may have been restricted, check user message.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}