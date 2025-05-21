<?php

namespace Jlonom\AllegroSDK\Model;

class UserCampaignEligibility extends \ArrayObject
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
     * Information whether user is eligible to participate in this campaign.
     *
     * @var bool
     */
    protected $eligible;
    /**
     * Information why user is not able to participate in the campaign.
     *
     * @var list<CampaignRefusalReason>
     */
    protected $refusalReasons;
    /**
     * Information whether user is eligible to participate in this campaign.
     *
     * @return bool
     */
    public function getEligible(): bool
    {
        return $this->eligible;
    }
    /**
     * Information whether user is eligible to participate in this campaign.
     *
     * @param bool $eligible
     *
     * @return self
     */
    public function setEligible(bool $eligible): self
    {
        $this->initialized['eligible'] = true;
        $this->eligible = $eligible;
        return $this;
    }
    /**
     * Information why user is not able to participate in the campaign.
     *
     * @return list<CampaignRefusalReason>
     */
    public function getRefusalReasons(): array
    {
        return $this->refusalReasons;
    }
    /**
     * Information why user is not able to participate in the campaign.
     *
     * @param list<CampaignRefusalReason> $refusalReasons
     *
     * @return self
     */
    public function setRefusalReasons(array $refusalReasons): self
    {
        $this->initialized['refusalReasons'] = true;
        $this->refusalReasons = $refusalReasons;
        return $this;
    }
}