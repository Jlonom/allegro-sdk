<?php

namespace Jlonom\AllegroSDK\Model;

class OfferAutomaticPricingCommand extends \ArrayObject
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
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var mixed
     */
    protected $modification;
    /**
     * List of offer criteria.
     *
     * @var list<OfferCriterium>
     */
    protected $offerCriteria;
    /**
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getModification()
    {
        return $this->modification;
    }
    /**
     * 
     *
     * @param mixed $modification
     *
     * @return self
     */
    public function setModification($modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;
        return $this;
    }
    /**
     * List of offer criteria.
     *
     * @return list<OfferCriterium>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * List of offer criteria.
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
}