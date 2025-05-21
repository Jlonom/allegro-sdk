<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesResponseItemPublication extends \ArrayObject
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
     * Possible values:</br> - `APPROVED` - the offer is visible in the given additional marketplace if it is active.</br> - `REFUSED` - the offer or the seller does not meet the conditions required to display the offer in the given additional marketplace.</br> - `IN_PROGRESS` - the process of qualifying the offer visibility in a given additional service is in progress.</br> - `NOT_REQUESTED` - the seller has not indicated the intention of visibility in the given additional service.</br> - `PENDING` - the seller has indicated the intention of visibility on a given additional marketplace, but the qualification process has not started, for example, due to offer status (only active offers are subject to the qualification process).
     *
     * @var string
     */
    protected $state;
    /**
     * Reasons for marketplace publication refusal. Empty list for not refused marketplaces.
     *
     * @var list<AdditionalMarketplacesRefusalReasonResponse>
     */
    protected $refusalReasons;
    /**
     * Possible values:</br> - `APPROVED` - the offer is visible in the given additional marketplace if it is active.</br> - `REFUSED` - the offer or the seller does not meet the conditions required to display the offer in the given additional marketplace.</br> - `IN_PROGRESS` - the process of qualifying the offer visibility in a given additional service is in progress.</br> - `NOT_REQUESTED` - the seller has not indicated the intention of visibility in the given additional service.</br> - `PENDING` - the seller has indicated the intention of visibility on a given additional marketplace, but the qualification process has not started, for example, due to offer status (only active offers are subject to the qualification process).
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * Possible values:</br> - `APPROVED` - the offer is visible in the given additional marketplace if it is active.</br> - `REFUSED` - the offer or the seller does not meet the conditions required to display the offer in the given additional marketplace.</br> - `IN_PROGRESS` - the process of qualifying the offer visibility in a given additional service is in progress.</br> - `NOT_REQUESTED` - the seller has not indicated the intention of visibility in the given additional service.</br> - `PENDING` - the seller has indicated the intention of visibility on a given additional marketplace, but the qualification process has not started, for example, due to offer status (only active offers are subject to the qualification process).
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Reasons for marketplace publication refusal. Empty list for not refused marketplaces.
     *
     * @return list<AdditionalMarketplacesRefusalReasonResponse>
     */
    public function getRefusalReasons(): array
    {
        return $this->refusalReasons;
    }
    /**
     * Reasons for marketplace publication refusal. Empty list for not refused marketplaces.
     *
     * @param list<AdditionalMarketplacesRefusalReasonResponse> $refusalReasons
     *
     * @return self
     */
    public function setRefusalReasons(array $refusalReasons): self
    {
        $this->initialized['refusalReasons'] = true;
        $this->refusalReasons = $refusalReasons;
        return $this;
    }
}