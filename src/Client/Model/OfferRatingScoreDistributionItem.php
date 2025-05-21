<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRatingScoreDistributionItem extends \ArrayObject
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
     * Identifier of score: 5, 4, 3, 2, 1.
     *
     * @var string
     */
    protected $name;
    /**
     * Count of score.
     *
     * @var int
     */
    protected $count;
    /**
     * Identifier of score: 5, 4, 3, 2, 1.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Identifier of score: 5, 4, 3, 2, 1.
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
     * Count of score.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Count of score.
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