<?php

namespace Jlonom\AllegroSDK\Model;

class OfferBundlesDTO extends \ArrayObject
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
     * Seller's bundles.
     *
     * @var list<OfferBundleDTO>
     */
    protected $bundles;
    /**
     * Next page information.
     *
     * @var OfferBundlesDTONextPage
     */
    protected $nextPage;
    /**
     * Seller's bundles.
     *
     * @return list<OfferBundleDTO>
     */
    public function getBundles(): array
    {
        return $this->bundles;
    }
    /**
     * Seller's bundles.
     *
     * @param list<OfferBundleDTO> $bundles
     *
     * @return self
     */
    public function setBundles(array $bundles): self
    {
        $this->initialized['bundles'] = true;
        $this->bundles = $bundles;
        return $this;
    }
    /**
     * Next page information.
     *
     * @return OfferBundlesDTONextPage
     */
    public function getNextPage(): OfferBundlesDTONextPage
    {
        return $this->nextPage;
    }
    /**
     * Next page information.
     *
     * @param OfferBundlesDTONextPage $nextPage
     *
     * @return self
     */
    public function setNextPage(OfferBundlesDTONextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;
        return $this;
    }
}