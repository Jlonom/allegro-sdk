<?php

namespace Jlonom\AllegroSDK\Model;

class SalesQualityMetric extends \ArrayObject
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
     * The code name of the metric.
     *
     * @var string
     */
    protected $code;
    /**
     * Translated name of the metric.
     *
     * @var string
     */
    protected $name;
    /**
     * The score for the given metric.
     *
     * @var float
     */
    protected $score;
    /**
     * The maximum possible score for the given metric.
     *
     * @var float
     */
    protected $maxScore;
    /**
     * The code name of the metric.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * The code name of the metric.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Translated name of the metric.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Translated name of the metric.
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
     * The score for the given metric.
     *
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * The score for the given metric.
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
     * The maximum possible score for the given metric.
     *
     * @return float
     */
    public function getMaxScore(): float
    {
        return $this->maxScore;
    }
    /**
     * The maximum possible score for the given metric.
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
}