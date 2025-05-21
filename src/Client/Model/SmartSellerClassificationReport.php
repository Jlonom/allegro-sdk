<?php

namespace Jlonom\AllegroSDK\Model;

class SmartSellerClassificationReport extends \ArrayObject
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
     * Seller Smart! eligibility status
     *
     * @var SmartSellerClassificationReportClassification
     */
    protected $classification;
    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @var list<SmartSellerClassificationReportConditionsItem>
     */
    protected $conditions;
    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller
     *
     * @var list<SmartDeliveryMethod>
     */
    protected $excludedDeliveryMethods;
    /**
     * Seller Smart! eligibility status
     *
     * @return SmartSellerClassificationReportClassification
     */
    public function getClassification(): SmartSellerClassificationReportClassification
    {
        return $this->classification;
    }
    /**
     * Seller Smart! eligibility status
     *
     * @param SmartSellerClassificationReportClassification $classification
     *
     * @return self
     */
    public function setClassification(SmartSellerClassificationReportClassification $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @return list<SmartSellerClassificationReportConditionsItem>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @param list<SmartSellerClassificationReportConditionsItem> $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller
     *
     * @return list<SmartDeliveryMethod>
     */
    public function getExcludedDeliveryMethods(): array
    {
        return $this->excludedDeliveryMethods;
    }
    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller
     *
     * @param list<SmartDeliveryMethod> $excludedDeliveryMethods
     *
     * @return self
     */
    public function setExcludedDeliveryMethods(array $excludedDeliveryMethods): self
    {
        $this->initialized['excludedDeliveryMethods'] = true;
        $this->excludedDeliveryMethods = $excludedDeliveryMethods;
        return $this;
    }
}