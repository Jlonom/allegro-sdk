<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRatingSizeFeedbackItem extends \ArrayObject
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
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
     *
     * @var string
     */
    protected $name;
    /**
     * Count of sizeFeedback responses.
     *
     * @var int
     */
    protected $count;
    /**
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
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
     * Count of sizeFeedback responses.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Count of sizeFeedback responses.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}