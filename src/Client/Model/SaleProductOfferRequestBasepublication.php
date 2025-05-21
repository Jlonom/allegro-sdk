<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferRequestBasepublication extends \ArrayObject
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
}