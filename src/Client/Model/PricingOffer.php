<?php

namespace Jlonom\AllegroSDK\Model;

class PricingOffer extends \ArrayObject
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
     * @var JustId
     */
    protected $fundraisingCampaign;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var Category
     */
    protected $category;
    /**
     * 
     *
     * @var list<Parameter>
     */
    protected $parameters;
    /**
     * Promo options on base marketplace.
     *
     * @var Promotion
     */
    protected $promotion;
    /**
     * 
     *
     * @var PricingPublication
     */
    protected $publication;
    /**
     * Information on the offer's selling mode.
     *
     * @var SellingModeWithNetPrice
     */
    protected $sellingMode;
    /**
     * 
     *
     * @return JustId
     */
    public function getFundraisingCampaign(): JustId
    {
        return $this->fundraisingCampaign;
    }
    /**
     * 
     *
     * @param JustId $fundraisingCampaign
     *
     * @return self
     */
    public function setFundraisingCampaign(JustId $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;
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
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param Category $category
     *
     * @return self
     */
    public function setCategory(Category $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return list<Parameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<Parameter> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Promo options on base marketplace.
     *
     * @return Promotion
     */
    public function getPromotion(): Promotion
    {
        return $this->promotion;
    }
    /**
     * Promo options on base marketplace.
     *
     * @param Promotion $promotion
     *
     * @return self
     */
    public function setPromotion(Promotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * 
     *
     * @return PricingPublication
     */
    public function getPublication(): PricingPublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param PricingPublication $publication
     *
     * @return self
     */
    public function setPublication(PricingPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @return SellingModeWithNetPrice
     */
    public function getSellingMode(): SellingModeWithNetPrice
    {
        return $this->sellingMode;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @param SellingModeWithNetPrice $sellingMode
     *
     * @return self
     */
    public function setSellingMode(SellingModeWithNetPrice $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
}