<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListProductOfferResponse extends \ArrayObject
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
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>
     *
     * @var string
     */
    protected $type = 'MANUAL';
    /**
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}