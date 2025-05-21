<?php

namespace Jlonom\AllegroSDK\Model;

class ProductOfferResponsePublication extends \ArrayObject
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
    * The publication status of the product assigned to the offer:
    - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
    - `LISTED` - a reviewed product from our database was identified and assigned to the offer
    - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
    - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
    *
    * @var string
    */
    protected $status;
    /**
    * The publication status of the product assigned to the offer:
    - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
    - `LISTED` - a reviewed product from our database was identified and assigned to the offer
    - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
    - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * The publication status of the product assigned to the offer:
    - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
    - `LISTED` - a reviewed product from our database was identified and assigned to the offer
    - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
    - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
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