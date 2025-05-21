<?php

namespace Jlonom\AllegroSDK\Model;

class PublicationChangeCommandDto extends \ArrayObject
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
     * List of offer criteria
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * Contains publication's fields to change
     *
     * @var PublicationModification
     */
    protected $publication;
    /**
     * List of offer criteria
     *
     * @return list<OfferCriterium>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * List of offer criteria
     *
     * @param list<OfferCriterium> $offerCriteria
     *
     * @return self
     */
    public function setOfferCriteria(array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;
        return $this;
    }
    /**
     * Contains publication's fields to change
     *
     * @return PublicationModification
     */
    public function getPublication(): PublicationModification
    {
        return $this->publication;
    }
    /**
     * Contains publication's fields to change
     *
     * @param PublicationModification $publication
     *
     * @return self
     */
    public function setPublication(PublicationModification $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}