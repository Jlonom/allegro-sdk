<?php

namespace Jlonom\AllegroSDK\Model;

class ProductImageProposal extends \ArrayObject
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
     * Current product image url.
     *
     * @var string
     */
    protected $current;
    /**
     * Proposed product image url.
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
     * @var string
     */
    protected $resolutionType;
    /**
     * Current product image url.
     *
     * @return string
     */
    public function getCurrent(): string
    {
        return $this->current;
    }
    /**
     * Current product image url.
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
     * Proposed product image url.
     *
     * @return string
     */
    public function getProposal(): string
    {
        return $this->proposal;
    }
    /**
     * Proposed product image url.
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
     * @return string
     */
    public function getResolutionType(): string
    {
        return $this->resolutionType;
    }
    /**
     * Verification resolution type.
     *
     * @param string $resolutionType
     *
     * @return self
     */
    public function setResolutionType(string $resolutionType): self
    {
        $this->initialized['resolutionType'] = true;
        $this->resolutionType = $resolutionType;
        return $this;
    }
}