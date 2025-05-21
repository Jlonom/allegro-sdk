<?php

namespace Jlonom\AllegroSDK\Model;

class SmartOfferClassificationReport extends \ArrayObject
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
     * Offer Smart! eligibility status
     *
     * @var SmartOfferClassificationReportClassification
     */
    protected $classification;
    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours
     *
     * @var bool
     */
    protected $scheduledForReclassification;
    /**
     * Delivery methods marked with Smart! label
     *
     * @var list<SmartDeliveryMethod>
     */
    protected $smartDeliveryMethods;
    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @var list<SmartOfferClassificationReportConditionsItem>
     */
    protected $conditions;
    /**
     * Offer Smart! eligibility status
     *
     * @return SmartOfferClassificationReportClassification
     */
    public function getClassification(): SmartOfferClassificationReportClassification
    {
        return $this->classification;
    }
    /**
     * Offer Smart! eligibility status
     *
     * @param SmartOfferClassificationReportClassification $classification
     *
     * @return self
     */
    public function setClassification(SmartOfferClassificationReportClassification $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours
     *
     * @return bool
     */
    public function getScheduledForReclassification(): bool
    {
        return $this->scheduledForReclassification;
    }
    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours
     *
     * @param bool $scheduledForReclassification
     *
     * @return self
     */
    public function setScheduledForReclassification(bool $scheduledForReclassification): self
    {
        $this->initialized['scheduledForReclassification'] = true;
        $this->scheduledForReclassification = $scheduledForReclassification;
        return $this;
    }
    /**
     * Delivery methods marked with Smart! label
     *
     * @return list<SmartDeliveryMethod>
     */
    public function getSmartDeliveryMethods(): array
    {
        return $this->smartDeliveryMethods;
    }
    /**
     * Delivery methods marked with Smart! label
     *
     * @param list<SmartDeliveryMethod> $smartDeliveryMethods
     *
     * @return self
     */
    public function setSmartDeliveryMethods(array $smartDeliveryMethods): self
    {
        $this->initialized['smartDeliveryMethods'] = true;
        $this->smartDeliveryMethods = $smartDeliveryMethods;
        return $this;
    }
    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @return list<SmartOfferClassificationReportConditionsItem>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @param list<SmartOfferClassificationReportConditionsItem> $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
}