<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryOptionsDto extends \ArrayObject
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
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     *
     * @var bool
     */
    protected $advertisement;
    /**
     * Indicates whether advertisements listed in this category must have a price given. If the value is `true` then you don't have to provide a price when listing an advertisement in this category.
     *
     * @var bool
     */
    protected $advertisementPriceOptional;
    /**
     * Indicates whether you can combine offers from this category into variant sets based on the color and pattern.
     *
     * @var bool
     */
    protected $variantsByColorPatternAllowed;
    /**
     * Information whether the category supports assigning offers to a product.
     *
     * @var bool
     */
    protected $offersWithProductPublicationEnabled;
    /**
     * Indicates whether the category supports creating products.
     *
     * @var bool
     */
    protected $productCreationEnabled;
    /**
     * Indicates whether custom parameters can be added to offers in this category.
     *
     * @var bool
     */
    protected $customParametersEnabled;
    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     *
     * @var bool
     */
    protected $sellerCanRequirePurchaseComments;
    /**
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     *
     * @return bool
     */
    public function getAdvertisement(): bool
    {
        return $this->advertisement;
    }
    /**
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     *
     * @param bool $advertisement
     *
     * @return self
     */
    public function setAdvertisement(bool $advertisement): self
    {
        $this->initialized['advertisement'] = true;
        $this->advertisement = $advertisement;
        return $this;
    }
    /**
     * Indicates whether advertisements listed in this category must have a price given. If the value is `true` then you don't have to provide a price when listing an advertisement in this category.
     *
     * @return bool
     */
    public function getAdvertisementPriceOptional(): bool
    {
        return $this->advertisementPriceOptional;
    }
    /**
     * Indicates whether advertisements listed in this category must have a price given. If the value is `true` then you don't have to provide a price when listing an advertisement in this category.
     *
     * @param bool $advertisementPriceOptional
     *
     * @return self
     */
    public function setAdvertisementPriceOptional(bool $advertisementPriceOptional): self
    {
        $this->initialized['advertisementPriceOptional'] = true;
        $this->advertisementPriceOptional = $advertisementPriceOptional;
        return $this;
    }
    /**
     * Indicates whether you can combine offers from this category into variant sets based on the color and pattern.
     *
     * @return bool
     */
    public function getVariantsByColorPatternAllowed(): bool
    {
        return $this->variantsByColorPatternAllowed;
    }
    /**
     * Indicates whether you can combine offers from this category into variant sets based on the color and pattern.
     *
     * @param bool $variantsByColorPatternAllowed
     *
     * @return self
     */
    public function setVariantsByColorPatternAllowed(bool $variantsByColorPatternAllowed): self
    {
        $this->initialized['variantsByColorPatternAllowed'] = true;
        $this->variantsByColorPatternAllowed = $variantsByColorPatternAllowed;
        return $this;
    }
    /**
     * Information whether the category supports assigning offers to a product.
     *
     * @return bool
     */
    public function getOffersWithProductPublicationEnabled(): bool
    {
        return $this->offersWithProductPublicationEnabled;
    }
    /**
     * Information whether the category supports assigning offers to a product.
     *
     * @param bool $offersWithProductPublicationEnabled
     *
     * @return self
     */
    public function setOffersWithProductPublicationEnabled(bool $offersWithProductPublicationEnabled): self
    {
        $this->initialized['offersWithProductPublicationEnabled'] = true;
        $this->offersWithProductPublicationEnabled = $offersWithProductPublicationEnabled;
        return $this;
    }
    /**
     * Indicates whether the category supports creating products.
     *
     * @return bool
     */
    public function getProductCreationEnabled(): bool
    {
        return $this->productCreationEnabled;
    }
    /**
     * Indicates whether the category supports creating products.
     *
     * @param bool $productCreationEnabled
     *
     * @return self
     */
    public function setProductCreationEnabled(bool $productCreationEnabled): self
    {
        $this->initialized['productCreationEnabled'] = true;
        $this->productCreationEnabled = $productCreationEnabled;
        return $this;
    }
    /**
     * Indicates whether custom parameters can be added to offers in this category.
     *
     * @return bool
     */
    public function getCustomParametersEnabled(): bool
    {
        return $this->customParametersEnabled;
    }
    /**
     * Indicates whether custom parameters can be added to offers in this category.
     *
     * @param bool $customParametersEnabled
     *
     * @return self
     */
    public function setCustomParametersEnabled(bool $customParametersEnabled): self
    {
        $this->initialized['customParametersEnabled'] = true;
        $this->customParametersEnabled = $customParametersEnabled;
        return $this;
    }
    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     *
     * @return bool
     */
    public function getSellerCanRequirePurchaseComments(): bool
    {
        return $this->sellerCanRequirePurchaseComments;
    }
    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     *
     * @param bool $sellerCanRequirePurchaseComments
     *
     * @return self
     */
    public function setSellerCanRequirePurchaseComments(bool $sellerCanRequirePurchaseComments): self
    {
        $this->initialized['sellerCanRequirePurchaseComments'] = true;
        $this->sellerCanRequirePurchaseComments = $sellerCanRequirePurchaseComments;
        return $this;
    }
}