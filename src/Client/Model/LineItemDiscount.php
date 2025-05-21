<?php

namespace Jlonom\AllegroSDK\Model;

class LineItemDiscount extends \ArrayObject
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
    * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     - `COUPON` - a coupon discount
     - `CAMPAIGN` - a campaign discount
    
    *
    * @var string
    */
    protected $type;
    /**
    * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     - `COUPON` - a coupon discount
     - `CAMPAIGN` - a campaign discount
    
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Describes the types of discounts used in the lineItems. The types of discounts can be as follows:
     - `BUNDLE` - a bundle discount (used also for bundles with no price change)
     - `UNIT_PERCENTAGE_DISCOUNT` - a MULTIPACK or CROSS_MULTIPACK discount
     - `WHOLESALE_PRICE_LIST` - a wholesale price list discount (a discount for company users only)
     - `LARGE_ORDER_DISCOUNT` - a large order discount (a discount for company users only)
     - `TURNOVER_DISCOUNT` - a turnover discount (a discount for company users only)
     - `COUPON` - a coupon discount
     - `CAMPAIGN` - a campaign discount
    
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}