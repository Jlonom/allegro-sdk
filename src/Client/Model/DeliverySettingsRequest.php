<?php

namespace Jlonom\AllegroSDK\Model;

class DeliverySettingsRequest extends \ArrayObject
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
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     *
     * @var DeliverySettingsRequestMarketplace
     */
    protected $marketplace;
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     *
     * @var DeliverySettingsRequestFreeDelivery
     */
    protected $freeDelivery;
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     *
     * @var DeliverySettingsRequestAbroadFreeDelivery
     */
    protected $abroadFreeDelivery;
    /**
     * Policy of calculating delivery costs.
     *
     * @var DeliverySettingsRequestJoinPolicy
     */
    protected $joinPolicy;
    /**
     * Policy of custom delivery cost.
     *
     * @var DeliverySettingsRequestCustomCost
     */
    protected $customCost;
    /**
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     *
     * @return DeliverySettingsRequestMarketplace
     */
    public function getMarketplace(): DeliverySettingsRequestMarketplace
    {
        return $this->marketplace;
    }
    /**
     * The marketplace for which delivery settings will be modified. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace parameter should always be explicitly set.
     *
     * @param DeliverySettingsRequestMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(DeliverySettingsRequestMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     *
     * @return DeliverySettingsRequestFreeDelivery
     */
    public function getFreeDelivery(): DeliverySettingsRequestFreeDelivery
    {
        return $this->freeDelivery;
    }
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic). If you do not want to set free domestic delivery threshold, do not set this value.
     *
     * @param DeliverySettingsRequestFreeDelivery $freeDelivery
     *
     * @return self
     */
    public function setFreeDelivery(DeliverySettingsRequestFreeDelivery $freeDelivery): self
    {
        $this->initialized['freeDelivery'] = true;
        $this->freeDelivery = $freeDelivery;
        return $this;
    }
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     *
     * @return DeliverySettingsRequestAbroadFreeDelivery
     */
    public function getAbroadFreeDelivery(): DeliverySettingsRequestAbroadFreeDelivery
    {
        return $this->abroadFreeDelivery;
    }
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign). If you do not want to set free foreign delivery threshold, do not set this value.
     *
     * @param DeliverySettingsRequestAbroadFreeDelivery $abroadFreeDelivery
     *
     * @return self
     */
    public function setAbroadFreeDelivery(DeliverySettingsRequestAbroadFreeDelivery $abroadFreeDelivery): self
    {
        $this->initialized['abroadFreeDelivery'] = true;
        $this->abroadFreeDelivery = $abroadFreeDelivery;
        return $this;
    }
    /**
     * Policy of calculating delivery costs.
     *
     * @return DeliverySettingsRequestJoinPolicy
     */
    public function getJoinPolicy(): DeliverySettingsRequestJoinPolicy
    {
        return $this->joinPolicy;
    }
    /**
     * Policy of calculating delivery costs.
     *
     * @param DeliverySettingsRequestJoinPolicy $joinPolicy
     *
     * @return self
     */
    public function setJoinPolicy(DeliverySettingsRequestJoinPolicy $joinPolicy): self
    {
        $this->initialized['joinPolicy'] = true;
        $this->joinPolicy = $joinPolicy;
        return $this;
    }
    /**
     * Policy of custom delivery cost.
     *
     * @return DeliverySettingsRequestCustomCost
     */
    public function getCustomCost(): DeliverySettingsRequestCustomCost
    {
        return $this->customCost;
    }
    /**
     * Policy of custom delivery cost.
     *
     * @param DeliverySettingsRequestCustomCost $customCost
     *
     * @return self
     */
    public function setCustomCost(DeliverySettingsRequestCustomCost $customCost): self
    {
        $this->initialized['customCost'] = true;
        $this->customCost = $customCost;
        return $this;
    }
}