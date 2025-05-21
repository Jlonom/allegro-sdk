<?php

namespace Jlonom\AllegroSDK\Model;

class TaxRate extends \ArrayObject
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
     * A country code for which given VAT setting is defined.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Values of tax rates for given country code.
     *
     * @var list<TaxRateValue>
     */
    protected $values;
    /**
     * A country code for which given VAT setting is defined.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * A country code for which given VAT setting is defined.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Values of tax rates for given country code.
     *
     * @return list<TaxRateValue>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * Values of tax rates for given country code.
     *
     * @param list<TaxRateValue> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}