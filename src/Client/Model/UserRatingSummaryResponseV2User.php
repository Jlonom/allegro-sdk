<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseV2User extends \ArrayObject
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
     * Number of products sold by the user within the last 30 days.
     *
     * @var int
     */
    protected $numberOfProductsSoldWithin30Days;
    /**
     * The date when the user account was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Number of products sold by the user within the last 30 days.
     *
     * @return int
     */
    public function getNumberOfProductsSoldWithin30Days(): int
    {
        return $this->numberOfProductsSoldWithin30Days;
    }
    /**
     * Number of products sold by the user within the last 30 days.
     *
     * @param int $numberOfProductsSoldWithin30Days
     *
     * @return self
     */
    public function setNumberOfProductsSoldWithin30Days(int $numberOfProductsSoldWithin30Days): self
    {
        $this->initialized['numberOfProductsSoldWithin30Days'] = true;
        $this->numberOfProductsSoldWithin30Days = $numberOfProductsSoldWithin30Days;
        return $this;
    }
    /**
     * The date when the user account was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date when the user account was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}