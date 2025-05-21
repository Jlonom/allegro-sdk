<?php

namespace Jlonom\AllegroSDK\Model;

class BundledOfferDTO extends \ArrayObject
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
     * Offer ID
     *
     * @var string
     */
    protected $id;
    /**
     * How many units of this offer will be in bundle.
     *
     * @var int
     */
    protected $requiredQuantity;
    /**
     * Set if bundle should be shown on offer page.
     *
     * @var bool
     */
    protected $entryPoint;
    /**
     * Offer ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Offer ID
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
     * How many units of this offer will be in bundle.
     *
     * @return int
     */
    public function getRequiredQuantity(): int
    {
        return $this->requiredQuantity;
    }
    /**
     * How many units of this offer will be in bundle.
     *
     * @param int $requiredQuantity
     *
     * @return self
     */
    public function setRequiredQuantity(int $requiredQuantity): self
    {
        $this->initialized['requiredQuantity'] = true;
        $this->requiredQuantity = $requiredQuantity;
        return $this;
    }
    /**
     * Set if bundle should be shown on offer page.
     *
     * @return bool
     */
    public function getEntryPoint(): bool
    {
        return $this->entryPoint;
    }
    /**
     * Set if bundle should be shown on offer page.
     *
     * @param bool $entryPoint
     *
     * @return self
     */
    public function setEntryPoint(bool $entryPoint): self
    {
        $this->initialized['entryPoint'] = true;
        $this->entryPoint = $entryPoint;
        return $this;
    }
}