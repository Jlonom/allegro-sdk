<?php

namespace Jlonom\AllegroSDK\Model;

class Tax extends \ArrayObject
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
     * The buy now tax rate, Format 0.00. The tax is linked to the default country that corresponds to the base marketplace of this offer.
     *
     * @var string
     */
    protected $percentage;
    /**
     * The buy now tax rate, Format 0.00. The tax is linked to the default country that corresponds to the base marketplace of this offer.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * The buy now tax rate, Format 0.00. The tax is linked to the default country that corresponds to the base marketplace of this offer.
     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}