<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTranslation extends \ArrayObject
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
     * Offer description translation
     *
     * @var OfferDescriptionTranslation
     */
    protected $description;
    /**
     * Language of the translation.
     *
     * @var string
     */
    protected $language;
    /**
     * Offer title translation
     *
     * @var OfferTitleTranslation
     */
    protected $title;
    /**
     * Offer safety information translations
     *
     * @var OfferSafetyInformationTranslation
     */
    protected $safetyInformation;
    /**
     * Offer description translation
     *
     * @return OfferDescriptionTranslation
     */
    public function getDescription(): OfferDescriptionTranslation
    {
        return $this->description;
    }
    /**
     * Offer description translation
     *
     * @param OfferDescriptionTranslation $description
     *
     * @return self
     */
    public function setDescription(OfferDescriptionTranslation $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Language of the translation.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language of the translation.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Offer title translation
     *
     * @return OfferTitleTranslation
     */
    public function getTitle(): OfferTitleTranslation
    {
        return $this->title;
    }
    /**
     * Offer title translation
     *
     * @param OfferTitleTranslation $title
     *
     * @return self
     */
    public function setTitle(OfferTitleTranslation $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Offer safety information translations
     *
     * @return OfferSafetyInformationTranslation
     */
    public function getSafetyInformation(): OfferSafetyInformationTranslation
    {
        return $this->safetyInformation;
    }
    /**
     * Offer safety information translations
     *
     * @param OfferSafetyInformationTranslation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(OfferSafetyInformationTranslation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
}