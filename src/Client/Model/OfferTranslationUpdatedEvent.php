<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTranslationUpdatedEvent extends SellerOfferBaseEvent
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
     * 
     *
     * @var OfferEventExternalOffer
     */
    protected $offer;
    /**
     * 
     *
     * @var list<ChangedTranslation>
     */
    protected $translations;
    /**
     * 
     *
     * @return OfferEventExternalOffer
     */
    public function getOffer(): OfferEventExternalOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferEventExternalOffer $offer
     *
     * @return self
     */
    public function setOffer(OfferEventExternalOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return list<ChangedTranslation>
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }
    /**
     * 
     *
     * @param list<ChangedTranslation> $translations
     *
     * @return self
     */
    public function setTranslations(array $translations): self
    {
        $this->initialized['translations'] = true;
        $this->translations = $translations;
        return $this;
    }
}