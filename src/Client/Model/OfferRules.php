<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRules extends \ArrayObject
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
     * List of assigned rules.
     *
     * @var list<OfferRulesRulesItem>
     */
    protected $rules;
    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * List of assigned rules.
     *
     * @return list<OfferRulesRulesItem>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * List of assigned rules.
     *
     * @param list<OfferRulesRulesItem> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
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
}