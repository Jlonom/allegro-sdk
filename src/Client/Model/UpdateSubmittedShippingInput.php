<?php

namespace Jlonom\AllegroSDK\Model;

class UpdateSubmittedShippingInput extends \ArrayObject
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
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime
     */
    protected $estimatedTimeOfArrival;
    /**
     * Vehicle licence plate number.
     *
     * @var string
     */
    protected $truckLicencePlate;
    /**
     * Represents courier details of shipping.
     *
     * @var Courier
     */
    protected $courier;
    /**
     * Represents shipping details from third party.
     *
     * @var ThirdParty
     */
    protected $thirdParty;
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return \DateTime
     */
    public function getEstimatedTimeOfArrival(): \DateTime
    {
        return $this->estimatedTimeOfArrival;
    }
    /**
     * The estimated date and time of Advance Ship Notice arrival in the warehouse. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \DateTime $estimatedTimeOfArrival
     *
     * @return self
     */
    public function setEstimatedTimeOfArrival(\DateTime $estimatedTimeOfArrival): self
    {
        $this->initialized['estimatedTimeOfArrival'] = true;
        $this->estimatedTimeOfArrival = $estimatedTimeOfArrival;
        return $this;
    }
    /**
     * Vehicle licence plate number.
     *
     * @return string
     */
    public function getTruckLicencePlate(): string
    {
        return $this->truckLicencePlate;
    }
    /**
     * Vehicle licence plate number.
     *
     * @param string $truckLicencePlate
     *
     * @return self
     */
    public function setTruckLicencePlate(string $truckLicencePlate): self
    {
        $this->initialized['truckLicencePlate'] = true;
        $this->truckLicencePlate = $truckLicencePlate;
        return $this;
    }
    /**
     * Represents courier details of shipping.
     *
     * @return Courier
     */
    public function getCourier(): Courier
    {
        return $this->courier;
    }
    /**
     * Represents courier details of shipping.
     *
     * @param Courier $courier
     *
     * @return self
     */
    public function setCourier(Courier $courier): self
    {
        $this->initialized['courier'] = true;
        $this->courier = $courier;
        return $this;
    }
    /**
     * Represents shipping details from third party.
     *
     * @return ThirdParty
     */
    public function getThirdParty(): ThirdParty
    {
        return $this->thirdParty;
    }
    /**
     * Represents shipping details from third party.
     *
     * @param ThirdParty $thirdParty
     *
     * @return self
     */
    public function setThirdParty(ThirdParty $thirdParty): self
    {
        $this->initialized['thirdParty'] = true;
        $this->thirdParty = $thirdParty;
        return $this;
    }
}