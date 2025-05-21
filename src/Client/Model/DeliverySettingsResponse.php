<?php

namespace Jlonom\AllegroSDK\Model;

class DeliverySettingsResponse extends \ArrayObject
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
     * Marketplace for which delivery settings were returned.
     *
     * @var DeliverySettingsResponseMarketplace
     */
    protected $marketplace;
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     *
     * @var DeliverySettingsResponseFreeDelivery
     */
    protected $freeDelivery;
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     *
     * @var DeliverySettingsResponseAbroadFreeDelivery
     */
    protected $abroadFreeDelivery;
    /**
     * Policy of calculating delivery costs.
     *
     * @var DeliverySettingsResponseJoinPolicy
     */
    protected $joinPolicy;
    /**
     * Policy of custom delivery cost.
     *
     * @var DeliverySettingsResponseCustomCost
     */
    protected $customCost;
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Marketplace for which delivery settings were returned.
     *
     * @return DeliverySettingsResponseMarketplace
     */
    public function getMarketplace(): DeliverySettingsResponseMarketplace
    {
        return $this->marketplace;
    }
    /**
     * Marketplace for which delivery settings were returned.
     *
     * @param DeliverySettingsResponseMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(DeliverySettingsResponseMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     *
     * @return DeliverySettingsResponseFreeDelivery
     */
    public function getFreeDelivery(): DeliverySettingsResponseFreeDelivery
    {
        return $this->freeDelivery;
    }
    /**
     * A minimum total order amount required to qualify for free domestic delivery (for example for allegro-cz marketplace, only Czechia is treated as domestic).
     *
     * @param DeliverySettingsResponseFreeDelivery $freeDelivery
     *
     * @return self
     */
    public function setFreeDelivery(DeliverySettingsResponseFreeDelivery $freeDelivery): self
    {
        $this->initialized['freeDelivery'] = true;
        $this->freeDelivery = $freeDelivery;
        return $this;
    }
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     *
     * @return DeliverySettingsResponseAbroadFreeDelivery
     */
    public function getAbroadFreeDelivery(): DeliverySettingsResponseAbroadFreeDelivery
    {
        return $this->abroadFreeDelivery;
    }
    /**
     * A minimum total order amount required to qualify for free foreign delivery (for example for allegro-cz marketplace, all delivery countries other than Czechia are treated as foreign).
     *
     * @param DeliverySettingsResponseAbroadFreeDelivery $abroadFreeDelivery
     *
     * @return self
     */
    public function setAbroadFreeDelivery(DeliverySettingsResponseAbroadFreeDelivery $abroadFreeDelivery): self
    {
        $this->initialized['abroadFreeDelivery'] = true;
        $this->abroadFreeDelivery = $abroadFreeDelivery;
        return $this;
    }
    /**
     * Policy of calculating delivery costs.
     *
     * @return DeliverySettingsResponseJoinPolicy
     */
    public function getJoinPolicy(): DeliverySettingsResponseJoinPolicy
    {
        return $this->joinPolicy;
    }
    /**
     * Policy of calculating delivery costs.
     *
     * @param DeliverySettingsResponseJoinPolicy $joinPolicy
     *
     * @return self
     */
    public function setJoinPolicy(DeliverySettingsResponseJoinPolicy $joinPolicy): self
    {
        $this->initialized['joinPolicy'] = true;
        $this->joinPolicy = $joinPolicy;
        return $this;
    }
    /**
     * Policy of custom delivery cost.
     *
     * @return DeliverySettingsResponseCustomCost
     */
    public function getCustomCost(): DeliverySettingsResponseCustomCost
    {
        return $this->customCost;
    }
    /**
     * Policy of custom delivery cost.
     *
     * @param DeliverySettingsResponseCustomCost $customCost
     *
     * @return self
     */
    public function setCustomCost(DeliverySettingsResponseCustomCost $customCost): self
    {
        $this->initialized['customCost'] = true;
        $this->customCost = $customCost;
        return $this;
    }
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Date and time of the last modification of the set in UTC ISO 8601 format.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}