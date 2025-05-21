<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountWithdrawCommandResponseInput extends \ArrayObject
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
     * The id of the participation which will be withdrawn.
     *
     * @var string
     */
    protected $participationId;
    /**
     * The id of the participation which will be withdrawn.
     *
     * @return string
     */
    public function getParticipationId(): string
    {
        return $this->participationId;
    }
    /**
     * The id of the participation which will be withdrawn.
     *
     * @param string $participationId
     *
     * @return self
     */
    public function setParticipationId(string $participationId): self
    {
        $this->initialized['participationId'] = true;
        $this->participationId = $participationId;
        return $this;
    }
}