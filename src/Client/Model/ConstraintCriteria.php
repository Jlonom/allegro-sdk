<?php

namespace Jlonom\AllegroSDK\Model;

class ConstraintCriteria extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     *
     * @var string
     */
    protected $type;
    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @var list<JustId>
     */
    protected $deliveryMethods;
    /**
     * 
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Constraint type. COUNTRY_SAME_QUANTITY is used by additional services that are realised before shipping (e.g. GIFT_WRAP), while COUNTRY_DELIVERY_SAME_QUANTITY is for additional services that are realised in delivery (e.g. CARRY_IN).
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @return list<JustId>
     */
    public function getDeliveryMethods(): array
    {
        return $this->deliveryMethods;
    }
    /**
     * This is used by additional services that are realised in transport (e.g. CARRY_IN), and this field exists together with COUNTRY_DELIVERY_SAME_QUANTITY constraint type. It describes which delivery methods can realise particular service.
     *
     * @param list<JustId> $deliveryMethods
     *
     * @return self
     */
    public function setDeliveryMethods(array $deliveryMethods): self
    {
        $this->initialized['deliveryMethods'] = true;
        $this->deliveryMethods = $deliveryMethods;
        return $this;
    }
}