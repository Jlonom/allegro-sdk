<?php

namespace Jlonom\AllegroSDK\Model;

class SmartSellerClassificationReportClassification extends \ArrayObject
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
     * Indicates whether that user is currently Smart!
     *
     * @var bool
     */
    protected $fulfilled;
    /**
     * Date of the most recent status change
     *
     * @var \DateTime
     */
    protected $lastChanged;
    /**
     * Indicates whether that user is currently Smart!
     *
     * @return bool
     */
    public function getFulfilled(): bool
    {
        return $this->fulfilled;
    }
    /**
     * Indicates whether that user is currently Smart!
     *
     * @param bool $fulfilled
     *
     * @return self
     */
    public function setFulfilled(bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;
        return $this;
    }
    /**
     * Date of the most recent status change
     *
     * @return \DateTime
     */
    public function getLastChanged(): \DateTime
    {
        return $this->lastChanged;
    }
    /**
     * Date of the most recent status change
     *
     * @param \DateTime $lastChanged
     *
     * @return self
     */
    public function setLastChanged(\DateTime $lastChanged): self
    {
        $this->initialized['lastChanged'] = true;
        $this->lastChanged = $lastChanged;
        return $this;
    }
}