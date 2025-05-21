<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountDefinitionDto extends \ArrayObject
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
     * First day of cumulating turnover against definition.
     *
     * @var \DateTime
     */
    protected $cumulatingFromDate;
    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     *
     * @var \DateTime|null
     */
    protected $cumulatingToDate;
    /**
     * First day of applying discount from this definition based on cumulated turnover.
     *
     * @var \DateTime
     */
    protected $spendingFromDate;
    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     *
     * @var \DateTime|null
     */
    protected $spendingToDate;
    /**
     * Creation date of the definition.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Last update date of the definition.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Turnover discount thresholds.
     *
     * @var list<TurnoverDiscountThresholdDto>
     */
    protected $thresholds;
    /**
     * First day of cumulating turnover against definition.
     *
     * @return \DateTime
     */
    public function getCumulatingFromDate(): \DateTime
    {
        return $this->cumulatingFromDate;
    }
    /**
     * First day of cumulating turnover against definition.
     *
     * @param \DateTime $cumulatingFromDate
     *
     * @return self
     */
    public function setCumulatingFromDate(\DateTime $cumulatingFromDate): self
    {
        $this->initialized['cumulatingFromDate'] = true;
        $this->cumulatingFromDate = $cumulatingFromDate;
        return $this;
    }
    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     *
     * @return \DateTime|null
     */
    public function getCumulatingToDate(): ?\DateTime
    {
        return $this->cumulatingToDate;
    }
    /**
     * First day when cumulating turnover against definition is no longer happening. If empty - cumulating turnover will be continued indefinitely.
     *
     * @param \DateTime|null $cumulatingToDate
     *
     * @return self
     */
    public function setCumulatingToDate(?\DateTime $cumulatingToDate): self
    {
        $this->initialized['cumulatingToDate'] = true;
        $this->cumulatingToDate = $cumulatingToDate;
        return $this;
    }
    /**
     * First day of applying discount from this definition based on cumulated turnover.
     *
     * @return \DateTime
     */
    public function getSpendingFromDate(): \DateTime
    {
        return $this->spendingFromDate;
    }
    /**
     * First day of applying discount from this definition based on cumulated turnover.
     *
     * @param \DateTime $spendingFromDate
     *
     * @return self
     */
    public function setSpendingFromDate(\DateTime $spendingFromDate): self
    {
        $this->initialized['spendingFromDate'] = true;
        $this->spendingFromDate = $spendingFromDate;
        return $this;
    }
    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     *
     * @return \DateTime|null
     */
    public function getSpendingToDate(): ?\DateTime
    {
        return $this->spendingToDate;
    }
    /**
     * First day when applying discount from definition is no longer happening. If empty - applying discount will be continued indefinitely.
     *
     * @param \DateTime|null $spendingToDate
     *
     * @return self
     */
    public function setSpendingToDate(?\DateTime $spendingToDate): self
    {
        $this->initialized['spendingToDate'] = true;
        $this->spendingToDate = $spendingToDate;
        return $this;
    }
    /**
     * Creation date of the definition.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date of the definition.
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
    /**
     * Last update date of the definition.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last update date of the definition.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Turnover discount thresholds.
     *
     * @return list<TurnoverDiscountThresholdDto>
     */
    public function getThresholds(): array
    {
        return $this->thresholds;
    }
    /**
     * Turnover discount thresholds.
     *
     * @param list<TurnoverDiscountThresholdDto> $thresholds
     *
     * @return self
     */
    public function setThresholds(array $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;
        return $this;
    }
}