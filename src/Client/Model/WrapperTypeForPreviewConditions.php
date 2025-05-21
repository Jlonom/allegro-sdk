<?php

namespace Jlonom\AllegroSDK\Model;

class WrapperTypeForPreviewConditions extends \ArrayObject
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
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     *
     * @var bool
     */
    protected $includeQuotingBundles;
    /**
     * 
     *
     * @var ParametersForPreviewPrice
     */
    protected $offer;
    /**
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     *
     * @return bool
     */
    public function getIncludeQuotingBundles(): bool
    {
        return $this->includeQuotingBundles;
    }
    /**
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     *
     * @param bool $includeQuotingBundles
     *
     * @return self
     */
    public function setIncludeQuotingBundles(bool $includeQuotingBundles): self
    {
        $this->initialized['includeQuotingBundles'] = true;
        $this->includeQuotingBundles = $includeQuotingBundles;
        return $this;
    }
    /**
     * 
     *
     * @return ParametersForPreviewPrice
     */
    public function getOffer(): ParametersForPreviewPrice
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param ParametersForPreviewPrice $offer
     *
     * @return self
     */
    public function setOffer(ParametersForPreviewPrice $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
}