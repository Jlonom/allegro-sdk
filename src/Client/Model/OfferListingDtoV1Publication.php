<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1Publication extends \ArrayObject
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
    * The publication status of the current offer. The possible values:
    
     - *INACTIVE* - a draft offer
     - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     - *ACTIVE* - the offer is active
     - *ENDED* - the offer was active and is now ended (for whatever reason)
    *
    * @var string
    */
    protected $status;
    /**
     * The date and time of activation in UTC for a planned listing.
     *
     * @var string
     */
    protected $startingAt;
    /**
     * The actual date and time of activation in UTC.
     *
     * @var string
     */
    protected $startedAt;
    /**
     * The date and time of a planned ending in UTC.
     *
     * @var string
     */
    protected $endingAt;
    /**
     * The actual date and time of last ending in UTC.
     *
     * @var string
     */
    protected $endedAt;
    /**
     * Information on the offer's publication marketplaces.
     *
     * @var OfferListingDtoV1PublicationMarketplaces
     */
    protected $marketplaces;
    /**
    * The publication status of the current offer. The possible values:
    
     - *INACTIVE* - a draft offer
     - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     - *ACTIVE* - the offer is active
     - *ENDED* - the offer was active and is now ended (for whatever reason)
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * The publication status of the current offer. The possible values:
    
     - *INACTIVE* - a draft offer
     - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     - *ACTIVE* - the offer is active
     - *ENDED* - the offer was active and is now ended (for whatever reason)
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The date and time of activation in UTC for a planned listing.
     *
     * @return string
     */
    public function getStartingAt(): string
    {
        return $this->startingAt;
    }
    /**
     * The date and time of activation in UTC for a planned listing.
     *
     * @param string $startingAt
     *
     * @return self
     */
    public function setStartingAt(string $startingAt): self
    {
        $this->initialized['startingAt'] = true;
        $this->startingAt = $startingAt;
        return $this;
    }
    /**
     * The actual date and time of activation in UTC.
     *
     * @return string
     */
    public function getStartedAt(): string
    {
        return $this->startedAt;
    }
    /**
     * The actual date and time of activation in UTC.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The date and time of a planned ending in UTC.
     *
     * @return string
     */
    public function getEndingAt(): string
    {
        return $this->endingAt;
    }
    /**
     * The date and time of a planned ending in UTC.
     *
     * @param string $endingAt
     *
     * @return self
     */
    public function setEndingAt(string $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;
        return $this;
    }
    /**
     * The actual date and time of last ending in UTC.
     *
     * @return string
     */
    public function getEndedAt(): string
    {
        return $this->endedAt;
    }
    /**
     * The actual date and time of last ending in UTC.
     *
     * @param string $endedAt
     *
     * @return self
     */
    public function setEndedAt(string $endedAt): self
    {
        $this->initialized['endedAt'] = true;
        $this->endedAt = $endedAt;
        return $this;
    }
    /**
     * Information on the offer's publication marketplaces.
     *
     * @return OfferListingDtoV1PublicationMarketplaces
     */
    public function getMarketplaces(): OfferListingDtoV1PublicationMarketplaces
    {
        return $this->marketplaces;
    }
    /**
     * Information on the offer's publication marketplaces.
     *
     * @param OfferListingDtoV1PublicationMarketplaces $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(OfferListingDtoV1PublicationMarketplaces $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
}