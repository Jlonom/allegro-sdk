<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServicesGroupResponse extends \ArrayObject
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
     * 
     *
     * @var list<AdditionalServiceResponse>
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var Reference
     */
    protected $seller;
    /**
     * IETF language tag.
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @return list<AdditionalServiceResponse>
     */
    public function getAdditionalServices(): array
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param list<AdditionalServiceResponse> $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
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
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the group provided by merchant, invisible for buyers.
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
     * 
     *
     * @return Reference
     */
    public function getSeller(): Reference
    {
        return $this->seller;
    }
    /**
     * 
     *
     * @param Reference $seller
     *
     * @return self
     */
    public function setSeller(Reference $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * IETF language tag.
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * IETF language tag.
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}