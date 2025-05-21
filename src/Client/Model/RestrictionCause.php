<?php

namespace Jlonom\AllegroSDK\Model;

class RestrictionCause extends \ArrayObject
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
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
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
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}