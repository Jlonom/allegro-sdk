<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroupRequest extends \ArrayObject
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
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @var string
     */
    protected $name;
    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var list<AdditionalServiceRequest>
     */
    protected $additionalServices;
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
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
     * 
     *
     * @return list<AdditionalServiceRequest>
     */
    public function getAdditionalServices(): array
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param list<AdditionalServiceRequest> $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
}