<?php

namespace Jlonom\AllegroSDK\Model;

class ShippingRatesSet extends \ArrayObject
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
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
     *
     * @var string
     */
    protected $id;
    /**
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<ShippingRate>
     */
    protected $rates;
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     *
     * @var string
     */
    protected $lastModified;
    /**
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Shipping rates set ID (UUID) When creating a shipping rates set (Post) the field is ignored. It is required when updating (Put) a shipping rates.
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
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User defined name of the shipping rates set. It may only contain: letters, numbers, hyphens, dots, commas and spaces.
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
     * 
     *
     * @return list<ShippingRate>
     */
    public function getRates(): array
    {
        return $this->rates;
    }
    /**
     * 
     *
     * @param list<ShippingRate> $rates
     *
     * @return self
     */
    public function setRates(array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     *
     * @return string
     */
    public function getLastModified(): string
    {
        return $this->lastModified;
    }
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format. When creating (Post) or updating (Put) a shipping rates set the field is ignored.
     *
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified(string $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
}