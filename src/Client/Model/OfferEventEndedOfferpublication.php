<?php

namespace Jlonom\AllegroSDK\Model;

class OfferEventEndedOfferpublication extends \ArrayObject
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
    * Indicates the reason for ending the offer:
    - `USER` - offer ended by the seller.
    - `ADMIN` - offer ended by an admin.
    - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
    - `EMPTY_STOCK` - offer ended because all available items had been sold out.
    - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
      if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
      success status, but further processing failed.
    - `UNKNOWN` - in rare cases the reason might be unknown.
    *
    * @var string
    */
    protected $endedBy;
    /**
    * Indicates the reason for ending the offer:
    - `USER` - offer ended by the seller.
    - `ADMIN` - offer ended by an admin.
    - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
    - `EMPTY_STOCK` - offer ended because all available items had been sold out.
    - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
      if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
      success status, but further processing failed.
    - `UNKNOWN` - in rare cases the reason might be unknown.
    *
    * @return string
    */
    public function getEndedBy(): string
    {
        return $this->endedBy;
    }
    /**
    * Indicates the reason for ending the offer:
    - `USER` - offer ended by the seller.
    - `ADMIN` - offer ended by an admin.
    - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
    - `EMPTY_STOCK` - offer ended because all available items had been sold out.
    - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
      if the base marketplace of offer requires full productization.
    - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
      success status, but further processing failed.
    - `UNKNOWN` - in rare cases the reason might be unknown.
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
}