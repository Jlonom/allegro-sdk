<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponseV2 extends \ArrayObject
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
     * Summary of data concerning users that recommend the seller.
     *
     * @var UserRatingSummaryResponseV2Recommended
     */
    protected $recommended;
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @var UserRatingSummaryResponseV2NotRecommended
     */
    protected $notRecommended;
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @var string
     */
    protected $recommendedPercentage;
    /**
     * Summary of ratings statistics.
     *
     * @var UserRatingSummaryResponseV2Statistics
     */
    protected $statistics;
    /**
     * Information about the user.
     *
     * @var UserRatingSummaryResponseV2User
     */
    protected $user;
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @return UserRatingSummaryResponseV2Recommended
     */
    public function getRecommended(): UserRatingSummaryResponseV2Recommended
    {
        return $this->recommended;
    }
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @param UserRatingSummaryResponseV2Recommended $recommended
     *
     * @return self
     */
    public function setRecommended(UserRatingSummaryResponseV2Recommended $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;
        return $this;
    }
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @return UserRatingSummaryResponseV2NotRecommended
     */
    public function getNotRecommended(): UserRatingSummaryResponseV2NotRecommended
    {
        return $this->notRecommended;
    }
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @param UserRatingSummaryResponseV2NotRecommended $notRecommended
     *
     * @return self
     */
    public function setNotRecommended(UserRatingSummaryResponseV2NotRecommended $notRecommended): self
    {
        $this->initialized['notRecommended'] = true;
        $this->notRecommended = $notRecommended;
        return $this;
    }
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @return string
     */
    public function getRecommendedPercentage(): string
    {
        return $this->recommendedPercentage;
    }
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @param string $recommendedPercentage
     *
     * @return self
     */
    public function setRecommendedPercentage(string $recommendedPercentage): self
    {
        $this->initialized['recommendedPercentage'] = true;
        $this->recommendedPercentage = $recommendedPercentage;
        return $this;
    }
    /**
     * Summary of ratings statistics.
     *
     * @return UserRatingSummaryResponseV2Statistics
     */
    public function getStatistics(): UserRatingSummaryResponseV2Statistics
    {
        return $this->statistics;
    }
    /**
     * Summary of ratings statistics.
     *
     * @param UserRatingSummaryResponseV2Statistics $statistics
     *
     * @return self
     */
    public function setStatistics(UserRatingSummaryResponseV2Statistics $statistics): self
    {
        $this->initialized['statistics'] = true;
        $this->statistics = $statistics;
        return $this;
    }
    /**
     * Information about the user.
     *
     * @return UserRatingSummaryResponseV2User
     */
    public function getUser(): UserRatingSummaryResponseV2User
    {
        return $this->user;
    }
    /**
     * Information about the user.
     *
     * @param UserRatingSummaryResponseV2User $user
     *
     * @return self
     */
    public function setUser(UserRatingSummaryResponseV2User $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}