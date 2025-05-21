<?php

namespace Jlonom\AllegroSDK\Exception;

class UpdateAutomaticPricingRuleUsingPutConflictException extends ConflictException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Conflict - rule with that name already exists for this seller');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}