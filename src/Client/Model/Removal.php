<?php

namespace Jlonom\AllegroSDK\Model;

class Removal extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Date until a removal request can be submitted in ISO 8601 format
     *
     * @var string
     */
    protected $possibleTo;
    /**
     * Submitted removal request, null if removal was not requested
     *
     * @var RemovalRequest
     */
    protected $request;
    /**
     * Date until a removal request can be submitted in ISO 8601 format
     *
     * @return string
     */
    public function getPossibleTo(): string
    {
        return $this->possibleTo;
    }
    /**
     * Date until a removal request can be submitted in ISO 8601 format
     *
     * @param string $possibleTo
     *
     * @return self
     */
    public function setPossibleTo(string $possibleTo): self
    {
        $this->initialized['possibleTo'] = true;
        $this->possibleTo = $possibleTo;
        return $this;
    }
    /**
     * Submitted removal request, null if removal was not requested
     *
     * @return RemovalRequest
     */
    public function getRequest(): RemovalRequest
    {
        return $this->request;
    }
    /**
     * Submitted removal request, null if removal was not requested
     *
     * @param RemovalRequest $request
     *
     * @return self
     */
    public function setRequest(RemovalRequest $request): self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
}