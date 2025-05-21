<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1AdditionalMarketplacePublication extends \ArrayObject
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
    * The publication status of the offer on an additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - The seller has not declared their intention to list this offer on the marketplace
     - *PENDING* - The qualification process has not started; the offer is not listed yet
     - *IN_PROGRESS* - We are processing whether the offer qualifies to be listed on the marketplace; the offer is not listed yet
     - *APPROVED* - The offer is approved to be listed on the marketplace
     - *REFUSED* - The offer will not be listed on the marketplace; the offer may be re-qualified if is corrected
    *
    * @var string
    */
    protected $state;
    /**
    * The publication status of the offer on an additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - The seller has not declared their intention to list this offer on the marketplace
     - *PENDING* - The qualification process has not started; the offer is not listed yet
     - *IN_PROGRESS* - We are processing whether the offer qualifies to be listed on the marketplace; the offer is not listed yet
     - *APPROVED* - The offer is approved to be listed on the marketplace
     - *REFUSED* - The offer will not be listed on the marketplace; the offer may be re-qualified if is corrected
    *
    * @return string
    */
    public function getState(): string
    {
        return $this->state;
    }
    /**
    * The publication status of the offer on an additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - The seller has not declared their intention to list this offer on the marketplace
     - *PENDING* - The qualification process has not started; the offer is not listed yet
     - *IN_PROGRESS* - We are processing whether the offer qualifies to be listed on the marketplace; the offer is not listed yet
     - *APPROVED* - The offer is approved to be listed on the marketplace
     - *REFUSED* - The offer will not be listed on the marketplace; the offer may be re-qualified if is corrected
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
}