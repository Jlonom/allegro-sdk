<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferPublicationResponse extends \ArrayObject
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
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     *
     * @var string
     */
    protected $duration;
    /**
     * Publication starting date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer.
     *
     * @var \DateTime
     */
    protected $startingAt;
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
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @var bool
     */
    protected $republish;
    /**
     * Publication ending date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @var \DateTime
     */
    protected $endingAt;
    /**
    * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     success status, but further processing failed.
    *
    * @var string
    */
    protected $endedBy;
    /**
     * Information about publication in multiple marketplaces.<br/> See [Changes in listing offers - we will add the possibility to display offers in foreign domains of Allegro's marketplaces](https://developer.allegro.pl/news/changes-in-listing-offers-we-will-add-the-possibility-to-display-offers-in-foreign-domains-of-allegro-s-marketplaces-9gKv0RVzRTK) for more details regarding this field
     *
     * @var SaleProductOfferPublicationMarketplacesResponse
     */
    protected $marketplaces;
    /**
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * Publication starting date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer.
     *
     * @return \DateTime
     */
    public function getStartingAt(): \DateTime
    {
        return $this->startingAt;
    }
    /**
     * Publication starting date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer.
     *
     * @param \DateTime $startingAt
     *
     * @return self
     */
    public function setStartingAt(\DateTime $startingAt): self
    {
        $this->initialized['startingAt'] = true;
        $this->startingAt = $startingAt;
        return $this;
    }
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
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @return bool
     */
    public function getRepublish(): bool
    {
        return $this->republish;
    }
    /**
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @param bool $republish
     *
     * @return self
     */
    public function setRepublish(bool $republish): self
    {
        $this->initialized['republish'] = true;
        $this->republish = $republish;
        return $this;
    }
    /**
     * Publication ending date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @return \DateTime
     */
    public function getEndingAt(): \DateTime
    {
        return $this->endingAt;
    }
    /**
     * Publication ending date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @param \DateTime $endingAt
     *
     * @return self
     */
    public function setEndingAt(\DateTime $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;
        return $this;
    }
    /**
    * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     success status, but further processing failed.
    *
    * @return string
    */
    public function getEndedBy(): string
    {
        return $this->endedBy;
    }
    /**
    * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     success status, but further processing failed.
    *
    * @param string $endedBy
    *
    * @return self
    */
    public function setEndedBy(string $endedBy): self
    {
        $this->initialized['endedBy'] = true;
        $this->endedBy = $endedBy;
        return $this;
    }
    /**
     * Information about publication in multiple marketplaces.<br/> See [Changes in listing offers - we will add the possibility to display offers in foreign domains of Allegro's marketplaces](https://developer.allegro.pl/news/changes-in-listing-offers-we-will-add-the-possibility-to-display-offers-in-foreign-domains-of-allegro-s-marketplaces-9gKv0RVzRTK) for more details regarding this field
     *
     * @return SaleProductOfferPublicationMarketplacesResponse
     */
    public function getMarketplaces(): SaleProductOfferPublicationMarketplacesResponse
    {
        return $this->marketplaces;
    }
    /**
     * Information about publication in multiple marketplaces.<br/> See [Changes in listing offers - we will add the possibility to display offers in foreign domains of Allegro's marketplaces](https://developer.allegro.pl/news/changes-in-listing-offers-we-will-add-the-possibility-to-display-offers-in-foreign-domains-of-allegro-s-marketplaces-9gKv0RVzRTK) for more details regarding this field
     *
     * @param SaleProductOfferPublicationMarketplacesResponse $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(SaleProductOfferPublicationMarketplacesResponse $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
}