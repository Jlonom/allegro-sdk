<?php

namespace Jlonom\AllegroSDK\Model;

class Company extends \ArrayObject
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
     * User's company name.
     *
     * @var string
     */
    protected $name;
    /**
     * User's tax identification number.
     *
     * @var string
     */
    protected $taxId;
    /**
     * User's company name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User's company name.
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
     * User's tax identification number.
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * User's tax identification number.
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
}