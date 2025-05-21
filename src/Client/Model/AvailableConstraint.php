<?php

namespace Jlonom\AllegroSDK\Model;

class AvailableConstraint extends \ArrayObject
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
     * One of the type COUNTRY_SAME_QUANTITY or COUNTRY_DELIVERY_SAME_QUANTITY
     *
     * @var string|null
     */
    protected $type;
    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @var list<string>|null
     */
    protected $availableDeliveryMethods;
    /**
     * One of the type COUNTRY_SAME_QUANTITY or COUNTRY_DELIVERY_SAME_QUANTITY
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * One of the type COUNTRY_SAME_QUANTITY or COUNTRY_DELIVERY_SAME_QUANTITY
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @return list<string>|null
     */
    public function getAvailableDeliveryMethods(): ?array
    {
        return $this->availableDeliveryMethods;
    }
    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @param list<string>|null $availableDeliveryMethods
     *
     * @return self
     */
    public function setAvailableDeliveryMethods(?array $availableDeliveryMethods): self
    {
        $this->initialized['availableDeliveryMethods'] = true;
        $this->availableDeliveryMethods = $availableDeliveryMethods;
        return $this;
    }
}