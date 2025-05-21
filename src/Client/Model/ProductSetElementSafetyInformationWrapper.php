<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementSafetyInformationWrapper extends \ArrayObject
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
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @var ProductSetElementSafetyInformation
     */
    protected $safetyInformation;
    /**
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @return ProductSetElementSafetyInformation
     */
    public function getSafetyInformation(): ProductSetElementSafetyInformation
    {
        return $this->safetyInformation;
    }
    /**
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @param ProductSetElementSafetyInformation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(ProductSetElementSafetyInformation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
}