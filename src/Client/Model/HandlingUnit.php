<?php

namespace Jlonom\AllegroSDK\Model;

class HandlingUnit extends \ArrayObject
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
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     *
     * @var string
     */
    protected $unitType;
    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     *
     * @var float
     */
    protected $amount;
    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     *
     * @var string
     */
    protected $labelsType;
    /**
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     *
     * @return string
     */
    public function getUnitType(): string
    {
        return $this->unitType;
    }
    /**
     * The unit type of Advance Ship Notice. Available values - BOX, PALLET, CONTAINER.
     *
     * @param string $unitType
     *
     * @return self
     */
    public function setUnitType(string $unitType): self
    {
        $this->initialized['unitType'] = true;
        $this->unitType = $unitType;
        return $this;
    }
    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Amount of unit type. Not required when ASN status is DRAFT. When unit type is BOX or PALLET then it means how many handling units will be sent. When unit type is CONTAINER then it means how many handling units inside a container will be sent.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     *
     * @return string
     */
    public function getLabelsType(): string
    {
        return $this->labelsType;
    }
    /**
     * Not required when ASN status is DRAFT. Available values - ONE_FULFILMENT, NONE. When unit type is CONTAINER labelsType can not be set to ONE_FULFILMENT.
     *
     * @param string $labelsType
     *
     * @return self
     */
    public function setLabelsType(string $labelsType): self
    {
        $this->initialized['labelsType'] = true;
        $this->labelsType = $labelsType;
        return $this;
    }
}