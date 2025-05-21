<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormReference extends \ArrayObject
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
     * Checkout form identifier
     *
     * @var string
     */
    protected $id;
    /**
     * Checkout form revision
     *
     * @var string
     */
    protected $revision;
    /**
     * Checkout form identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Checkout form identifier
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Checkout form revision
     *
     * @return string
     */
    public function getRevision(): string
    {
        return $this->revision;
    }
    /**
     * Checkout form revision
     *
     * @param string $revision
     *
     * @return self
     */
    public function setRevision(string $revision): self
    {
        $this->initialized['revision'] = true;
        $this->revision = $revision;
        return $this;
    }
}