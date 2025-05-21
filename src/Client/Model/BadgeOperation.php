<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeOperation extends \ArrayObject
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
     * Badge operation ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Badge operation type.
     *
     * @var string
     */
    protected $type;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var BadgeApplicationCampaign
     */
    protected $campaign;
    /**
     * 
     *
     * @var BadgeApplicationOffer
     */
    protected $offer;
    /**
     * Information about processing of the request/operation
     *
     * @var BadgeOperationProcess
     */
    protected $process;
    /**
     * Badge operation ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Badge operation ID.
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
    /**
     * Badge operation type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Badge operation type.
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
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return BadgeApplicationCampaign
     */
    public function getCampaign(): BadgeApplicationCampaign
    {
        return $this->campaign;
    }
    /**
     * 
     *
     * @param BadgeApplicationCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(BadgeApplicationCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * 
     *
     * @return BadgeApplicationOffer
     */
    public function getOffer(): BadgeApplicationOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param BadgeApplicationOffer $offer
     *
     * @return self
     */
    public function setOffer(BadgeApplicationOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * Information about processing of the request/operation
     *
     * @return BadgeOperationProcess
     */
    public function getProcess(): BadgeOperationProcess
    {
        return $this->process;
    }
    /**
     * Information about processing of the request/operation
     *
     * @param BadgeOperationProcess $process
     *
     * @return self
     */
    public function setProcess(BadgeOperationProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;
        return $this;
    }
}