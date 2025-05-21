<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingSummaryResponse extends \ArrayObject
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
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     *
     * @var AverageRates
     */
    protected $averageRates;
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @var UserRatingSummaryResponseNotRecommended
     */
    protected $notRecommended;
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @var UserRatingSummaryResponseRecommended
     */
    protected $recommended;
    /**
     * Percentage of unique buyers recommending the seller.
     *
     * @var string
     */
    protected $recommendedPercentage;
    /**
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     *
     * @return AverageRates
     */
    public function getAverageRates(): AverageRates
    {
        return $this->averageRates;
    }
    /**
     * The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
     *
     * @param AverageRates $averageRates
     *
     * @return self
     */
    public function setAverageRates(AverageRates $averageRates): self
    {
        $this->initialized['averageRates'] = true;
        $this->averageRates = $averageRates;
        return $this;
    }
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @return UserRatingSummaryResponseNotRecommended
     */
    public function getNotRecommended(): UserRatingSummaryResponseNotRecommended
    {
        return $this->notRecommended;
    }
    /**
     * Summary of data concerning users that do not recommend the seller.
     *
     * @param UserRatingSummaryResponseNotRecommended $notRecommended
     *
     * @return self
     */
    public function setNotRecommended(UserRatingSummaryResponseNotRecommended $notRecommended): self
    {
        $this->initialized['notRecommended'] = true;
        $this->notRecommended = $notRecommended;
        return $this;
    }
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @return UserRatingSummaryResponseRecommended
     */
    public function getRecommended(): UserRatingSummaryResponseRecommended
    {
        return $this->recommended;
    }
    /**
     * Summary of data concerning users that recommend the seller.
     *
     * @param UserRatingSummaryResponseRecommended $recommended
     *
     * @return self
     */
    public function setRecommended(UserRatingSummaryResponseRecommended $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;
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
}