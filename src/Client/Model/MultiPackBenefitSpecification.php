<?php

namespace Jlonom\AllegroSDK\Model;

class MultiPackBenefitSpecification extends BenefitSpecification
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
     * What rebate will be given.
     *
     * @var MultiPackBenefitSpecificationconfiguration
     */
    protected $configuration;
    /**
     * Describes what will cause the rebate.
     *
     * @var MultiPackBenefitSpecificationtrigger
     */
    protected $trigger;
    /**
     * What rebate will be given.
     *
     * @return MultiPackBenefitSpecificationconfiguration
     */
    public function getConfiguration(): MultiPackBenefitSpecificationconfiguration
    {
        return $this->configuration;
    }
    /**
     * What rebate will be given.
     *
     * @param MultiPackBenefitSpecificationconfiguration $configuration
     *
     * @return self
     */
    public function setConfiguration(MultiPackBenefitSpecificationconfiguration $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * Describes what will cause the rebate.
     *
     * @return MultiPackBenefitSpecificationtrigger
     */
    public function getTrigger(): MultiPackBenefitSpecificationtrigger
    {
        return $this->trigger;
    }
    /**
     * Describes what will cause the rebate.
     *
     * @param MultiPackBenefitSpecificationtrigger $trigger
     *
     * @return self
     */
    public function setTrigger(MultiPackBenefitSpecificationtrigger $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;
        return $this;
    }
}