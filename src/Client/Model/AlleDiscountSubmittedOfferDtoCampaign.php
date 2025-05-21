<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmittedOfferDtoCampaign extends \ArrayObject
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
     * The id of the campaign.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of the campaign.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the campaign.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}