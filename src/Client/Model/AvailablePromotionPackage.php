<?php

namespace Jlonom\AllegroSDK\Model;

class AvailablePromotionPackage extends \ArrayObject
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
     * Promotion package identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Promotion package name.
     *
     * @var string
     */
    protected $name;
    /**
     * Promo package cycle duration.
     *
     * @var string
     */
    protected $cycleDuration;
    /**
     * Promotion package identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Promotion package identifier.
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
     * Promotion package name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Promotion package name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Promo package cycle duration.
     *
     * @return string
     */
    public function getCycleDuration(): string
    {
        return $this->cycleDuration;
    }
    /**
     * Promo package cycle duration.
     *
     * @param string $cycleDuration
     *
     * @return self
     */
    public function setCycleDuration(string $cycleDuration): self
    {
        $this->initialized['cycleDuration'] = true;
        $this->cycleDuration = $cycleDuration;
        return $this;
    }
}