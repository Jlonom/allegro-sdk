<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPublication extends \ArrayObject
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
     * Publication ending date and time in UTC.
     *
     * @var string
     */
    protected $endingAt;
    /**
     * Publication ending date and time in UTC.
     *
     * @return string
     */
    public function getEndingAt(): string
    {
        return $this->endingAt;
    }
    /**
     * Publication ending date and time in UTC.
     *
     * @param string $endingAt
     *
     * @return self
     */
    public function setEndingAt(string $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;
        return $this;
    }
}