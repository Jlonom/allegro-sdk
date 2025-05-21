<?php

namespace Jlonom\AllegroSDK\Model;

class SalesQualityForDay extends \ArrayObject
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
     * Date for which the result is calculated.
     *
     * @var \DateTime
     */
    protected $resultFor;
    /**
     * The total score for the given day.
     *
     * @var float
     */
    protected $score;
    /**
     * The main sales quality level for the given day.
     *
     * @var string
     */
    protected $grade;
    /**
     * The maximum possible total score for the given day.
     *
     * @var float
     */
    protected $maxScore;
    /**
     * 
     *
     * @var list<SalesQualityMetric>
     */
    protected $metrics;
    /**
     * Date for which the result is calculated.
     *
     * @return \DateTime
     */
    public function getResultFor(): \DateTime
    {
        return $this->resultFor;
    }
    /**
     * Date for which the result is calculated.
     *
     * @param \DateTime $resultFor
     *
     * @return self
     */
    public function setResultFor(\DateTime $resultFor): self
    {
        $this->initialized['resultFor'] = true;
        $this->resultFor = $resultFor;
        return $this;
    }
    /**
     * The total score for the given day.
     *
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * The total score for the given day.
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * The main sales quality level for the given day.
     *
     * @return string
     */
    public function getGrade(): string
    {
        return $this->grade;
    }
    /**
     * The main sales quality level for the given day.
     *
     * @param string $grade
     *
     * @return self
     */
    public function setGrade(string $grade): self
    {
        $this->initialized['grade'] = true;
        $this->grade = $grade;
        return $this;
    }
    /**
     * The maximum possible total score for the given day.
     *
     * @return float
     */
    public function getMaxScore(): float
    {
        return $this->maxScore;
    }
    /**
     * The maximum possible total score for the given day.
     *
     * @param float $maxScore
     *
     * @return self
     */
    public function setMaxScore(float $maxScore): self
    {
        $this->initialized['maxScore'] = true;
        $this->maxScore = $maxScore;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesQualityMetric>
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
    /**
     * 
     *
     * @param list<SalesQualityMetric> $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
}