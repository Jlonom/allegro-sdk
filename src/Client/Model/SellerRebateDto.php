<?php

namespace Jlonom\AllegroSDK\Model;

class SellerRebateDto extends \ArrayObject
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
     * What kind of rebate will be given
     *
     * @var list<Benefit>
     */
    protected $benefits;
    /**
     * when was this rebate created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Rebate identifier
     *
     * @var string
     */
    protected $id;
    /**
     * What offers will be included
     *
     * @var list<SellerRebateOfferCriterion>
     */
    protected $offerCriteria;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * What kind of rebate will be given
     *
     * @return list<Benefit>
     */
    public function getBenefits(): array
    {
        return $this->benefits;
    }
    /**
     * What kind of rebate will be given
     *
     * @param list<Benefit> $benefits
     *
     * @return self
     */
    public function setBenefits(array $benefits): self
    {
        $this->initialized['benefits'] = true;
        $this->benefits = $benefits;
        return $this;
    }
    /**
     * when was this rebate created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * when was this rebate created
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
     * Rebate identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Rebate identifier
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
     * What offers will be included
     *
     * @return list<SellerRebateOfferCriterion>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * What offers will be included
     *
     * @param list<SellerRebateOfferCriterion> $offerCriteria
     *
     * @return self
     */
    public function setOfferCriteria(array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}