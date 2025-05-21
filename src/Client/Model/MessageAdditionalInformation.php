<?php

namespace Jlonom\AllegroSDK\Model;

class MessageAdditionalInformation extends \ArrayObject
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
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     *
     * @var string|null
     */
    protected $vin;
    /**
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     *
     * @return string|null
     */
    public function getVin(): ?string
    {
        return $this->vin;
    }
    /**
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     *
     * @param string|null $vin
     *
     * @return self
     */
    public function setVin(?string $vin): self
    {
        $this->initialized['vin'] = true;
        $this->vin = $vin;
        return $this;
    }
}