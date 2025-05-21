<?php

namespace Jlonom\AllegroSDK\Model;

class SmartOfferClassificationReportConditionsItem extends \ArrayObject
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
     * Technical condition name
     *
     * @var string
     */
    protected $code;
    /**
     * Condition name
     *
     * @var string
     */
    protected $name;
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates whether this condition is met
     *
     * @var bool
     */
    protected $fulfilled;
    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @var list<DeliveryMethodId>
     */
    protected $passedDeliveryMethods;
    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @var list<DeliveryMethodId>
     */
    protected $failedDeliveryMethods;
    /**
     * Technical condition name
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Technical condition name
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
     * Condition name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Condition name
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
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Indicates whether this condition is met
     *
     * @return bool
     */
    public function getFulfilled(): bool
    {
        return $this->fulfilled;
    }
    /**
     * Indicates whether this condition is met
     *
     * @param bool $fulfilled
     *
     * @return self
     */
    public function setFulfilled(bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;
        return $this;
    }
    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @return list<DeliveryMethodId>
     */
    public function getPassedDeliveryMethods(): array
    {
        return $this->passedDeliveryMethods;
    }
    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @param list<DeliveryMethodId> $passedDeliveryMethods
     *
     * @return self
     */
    public function setPassedDeliveryMethods(array $passedDeliveryMethods): self
    {
        $this->initialized['passedDeliveryMethods'] = true;
        $this->passedDeliveryMethods = $passedDeliveryMethods;
        return $this;
    }
    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @return list<DeliveryMethodId>
     */
    public function getFailedDeliveryMethods(): array
    {
        return $this->failedDeliveryMethods;
    }
    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @param list<DeliveryMethodId> $failedDeliveryMethods
     *
     * @return self
     */
    public function setFailedDeliveryMethods(array $failedDeliveryMethods): self
    {
        $this->initialized['failedDeliveryMethods'] = true;
        $this->failedDeliveryMethods = $failedDeliveryMethods;
        return $this;
    }
}