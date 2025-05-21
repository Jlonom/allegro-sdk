<?php

namespace Jlonom\AllegroSDK\Exception;

class AddMessageToDisputeUsingPOSTConflictException extends ConflictException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Dispute is in a state that forbids adding new messages');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}