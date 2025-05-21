<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPolicyAvailability extends \ArrayObject
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
     * Indicates if return policy is full, restricted or disabled.
     *
     * @var string
     */
    protected $range;
    /**
     * 
     *
     * @var RestrictionCause|null
     */
    protected $restrictionCause;
    /**
     * Indicates if return policy is full, restricted or disabled.
     *
     * @return string
     */
    public function getRange(): string
    {
        return $this->range;
    }
    /**
     * Indicates if return policy is full, restricted or disabled.
     *
     * @param string $range
     *
     * @return self
     */
    public function setRange(string $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
    /**
     * 
     *
     * @return RestrictionCause|null
     */
    public function getRestrictionCause(): ?RestrictionCause
    {
        return $this->restrictionCause;
    }
    /**
     * 
     *
     * @param RestrictionCause|null $restrictionCause
     *
     * @return self
     */
    public function setRestrictionCause(?RestrictionCause $restrictionCause): self
    {
        $this->initialized['restrictionCause'] = true;
        $this->restrictionCause = $restrictionCause;
        return $this;
    }
}