<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication extends \ArrayObject
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
     * Type of campaign visibility. One possible value: - WITHIN
     *
     * @var string
     */
    protected $type;
    /**
     * Provided in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * Provided in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $to;
    /**
     * Type of campaign visibility. One possible value: - WITHIN
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of campaign visibility. One possible value: - WITHIN
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Provided in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }
    /**
     * Provided in ISO 8601 format.
     *
     * @param \DateTime $from
     *
     * @return self
     */
    public function setFrom(\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * Provided in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }
    /**
     * Provided in ISO 8601 format.
     *
     * @param \DateTime $to
     *
     * @return self
     */
    public function setTo(\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}