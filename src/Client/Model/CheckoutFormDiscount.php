<?php

namespace Jlonom\AllegroSDK\Model;

/**
 *
 * @deprecated
 */
class CheckoutFormDiscount extends \ArrayObject
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
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program
     *
     * @var string
     */
    protected $type;
    /**
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Describes the types of discounts used in the checkout form. The types of discounts can be as follows: * `COUPON` - a coupon was used during payment * `BUNDLE` - some items were bought as a bundle * `MULTIPACK` - at least one item was bought with a multipack option turned on * `CROSSMULTIPACK` - some items, each from a different offer, were bought together as a multipack * `ALLEGRO_PRICES` - some items are included in the Allegro Prices program
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