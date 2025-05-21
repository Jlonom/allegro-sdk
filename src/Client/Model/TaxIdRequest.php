<?php

namespace Jlonom\AllegroSDK\Model;

class TaxIdRequest extends \ArrayObject
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
     * User's tax identification number.
     *
     * @var string
     */
    protected $taxId;
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