<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRating extends \ArrayObject
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
     * Average score of offer rating.
     *
     * @var string
     */
    protected $averageScore;
    /**
     * List score distribution with count.
     *
     * @var list<OfferRatingScoreDistributionItem>
     */
    protected $scoreDistribution;
    /**
     * Number of total responses.
     *
     * @var int
     */
    protected $totalResponses;
    /**
     * List of size feedback.
     *
     * @var list<OfferRatingSizeFeedbackItem>
     */
    protected $sizeFeedback;
    /**
     * Average score of offer rating.
     *
     * @return string
     */
    public function getAverageScore(): string
    {
        return $this->averageScore;
    }
    /**
     * Average score of offer rating.
     *
     * @param string $averageScore
     *
     * @return self
     */
    public function setAverageScore(string $averageScore): self
    {
        $this->initialized['averageScore'] = true;
        $this->averageScore = $averageScore;
        return $this;
    }
    /**
     * List score distribution with count.
     *
     * @return list<OfferRatingScoreDistributionItem>
     */
    public function getScoreDistribution(): array
    {
        return $this->scoreDistribution;
    }
    /**
     * List score distribution with count.
     *
     * @param list<OfferRatingScoreDistributionItem> $scoreDistribution
     *
     * @return self
     */
    public function setScoreDistribution(array $scoreDistribution): self
    {
        $this->initialized['scoreDistribution'] = true;
        $this->scoreDistribution = $scoreDistribution;
        return $this;
    }
    /**
     * Number of total responses.
     *
     * @return int
     */
    public function getTotalResponses(): int
    {
        return $this->totalResponses;
    }
    /**
     * Number of total responses.
     *
     * @param int $totalResponses
     *
     * @return self
     */
    public function setTotalResponses(int $totalResponses): self
    {
        $this->initialized['totalResponses'] = true;
        $this->totalResponses = $totalResponses;
        return $this;
    }
    /**
     * List of size feedback.
     *
     * @return list<OfferRatingSizeFeedbackItem>
     */
    public function getSizeFeedback(): array
    {
        return $this->sizeFeedback;
    }
    /**
     * List of size feedback.
     *
     * @param list<OfferRatingSizeFeedbackItem> $sizeFeedback
     *
     * @return self
     */
    public function setSizeFeedback(array $sizeFeedback): self
    {
        $this->initialized['sizeFeedback'] = true;
        $this->sizeFeedback = $sizeFeedback;
        return $this;
    }
}