<?php

namespace Jlonom\AllegroSDK\Model;

class ProductParameterValueProposal extends \ArrayObject
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
     * Current product parameter value.
     *
     * @var string
     */
    protected $current;
    /**
     * Proposed product parameter value.
     *
     * @var string
     */
    protected $proposal;
    /**
     * Verification message.
     *
     * @var string
     */
    protected $reason;
    /**
     * Verification resolution type.
     *
     * @var mixed
     */
    protected $resolutionType;
    /**
     * Current product parameter value.
     *
     * @return string
     */
    public function getCurrent(): string
    {
        return $this->current;
    }
    /**
     * Current product parameter value.
     *
     * @param string $current
     *
     * @return self
     */
    public function setCurrent(string $current): self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * Proposed product parameter value.
     *
     * @return string
     */
    public function getProposal(): string
    {
        return $this->proposal;
    }
    /**
     * Proposed product parameter value.
     *
     * @param string $proposal
     *
     * @return self
     */
    public function setProposal(string $proposal): self
    {
        $this->initialized['proposal'] = true;
        $this->proposal = $proposal;
        return $this;
    }
    /**
     * Verification message.
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Verification message.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * Verification resolution type.
     *
     * @return mixed
     */
    public function getResolutionType()
    {
        return $this->resolutionType;
    }
    /**
     * Verification resolution type.
     *
     * @param mixed $resolutionType
     *
     * @return self
     */
    public function setResolutionType($resolutionType): self
    {
        $this->initialized['resolutionType'] = true;
        $this->resolutionType = $resolutionType;
        return $this;
    }
}