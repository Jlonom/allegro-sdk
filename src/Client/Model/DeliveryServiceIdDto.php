<?php

namespace Jlonom\AllegroSDK\Model;

class DeliveryServiceIdDto extends \ArrayObject
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
     * Id of delivery method, chosen by buyer in order.
     *
     * @var string
     */
    protected $deliveryMethodId;
    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     *
     * @var string
     */
    protected $credentialsId;
    /**
     * Id of delivery method, chosen by buyer in order.
     *
     * @return string
     */
    public function getDeliveryMethodId(): string
    {
        return $this->deliveryMethodId;
    }
    /**
     * Id of delivery method, chosen by buyer in order.
     *
     * @param string $deliveryMethodId
     *
     * @return self
     */
    public function setDeliveryMethodId(string $deliveryMethodId): self
    {
        $this->initialized['deliveryMethodId'] = true;
        $this->deliveryMethodId = $deliveryMethodId;
        return $this;
    }
    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     *
     * @return string
     */
    public function getCredentialsId(): string
    {
        return $this->credentialsId;
    }
    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     *
     * @param string $credentialsId
     *
     * @return self
     */
    public function setCredentialsId(string $credentialsId): self
    {
        $this->initialized['credentialsId'] = true;
        $this->credentialsId = $credentialsId;
        return $this;
    }
}