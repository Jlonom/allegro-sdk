<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmittedOfferDto extends \ArrayObject
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
     * The id of the participation.
     *
     * @var string
     */
    protected $participationId;
    /**
     * Submitted offer data.
     *
     * @var AlleDiscountSubmittedOfferDtoOffer
     */
    protected $offer;
    /**
     * AlleDiscount campaign data.
     *
     * @var AlleDiscountSubmittedOfferDtoCampaign
     */
    protected $campaign;
    /**
     * AlleDiscount prices data.
     *
     * @var AlleDiscountSubmittedOfferDtoPrices
     */
    protected $prices;
    /**
     * Participation processing data.
     *
     * @var AlleDiscountSubmittedOfferDtoProcess
     */
    protected $process;
    /**
     * Limit of purchases on the offer.
     *
     * @var int
     */
    protected $purchaseLimit;
    /**
     * The id of the participation.
     *
     * @return string
     */
    public function getParticipationId(): string
    {
        return $this->participationId;
    }
    /**
     * The id of the participation.
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
    /**
     * Submitted offer data.
     *
     * @return AlleDiscountSubmittedOfferDtoOffer
     */
    public function getOffer(): AlleDiscountSubmittedOfferDtoOffer
    {
        return $this->offer;
    }
    /**
     * Submitted offer data.
     *
     * @param AlleDiscountSubmittedOfferDtoOffer $offer
     *
     * @return self
     */
    public function setOffer(AlleDiscountSubmittedOfferDtoOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * AlleDiscount campaign data.
     *
     * @return AlleDiscountSubmittedOfferDtoCampaign
     */
    public function getCampaign(): AlleDiscountSubmittedOfferDtoCampaign
    {
        return $this->campaign;
    }
    /**
     * AlleDiscount campaign data.
     *
     * @param AlleDiscountSubmittedOfferDtoCampaign $campaign
     *
     * @return self
     */
    public function setCampaign(AlleDiscountSubmittedOfferDtoCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * AlleDiscount prices data.
     *
     * @return AlleDiscountSubmittedOfferDtoPrices
     */
    public function getPrices(): AlleDiscountSubmittedOfferDtoPrices
    {
        return $this->prices;
    }
    /**
     * AlleDiscount prices data.
     *
     * @param AlleDiscountSubmittedOfferDtoPrices $prices
     *
     * @return self
     */
    public function setPrices(AlleDiscountSubmittedOfferDtoPrices $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * Participation processing data.
     *
     * @return AlleDiscountSubmittedOfferDtoProcess
     */
    public function getProcess(): AlleDiscountSubmittedOfferDtoProcess
    {
        return $this->process;
    }
    /**
     * Participation processing data.
     *
     * @param AlleDiscountSubmittedOfferDtoProcess $process
     *
     * @return self
     */
    public function setProcess(AlleDiscountSubmittedOfferDtoProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;
        return $this;
    }
    /**
     * Limit of purchases on the offer.
     *
     * @return int
     */
    public function getPurchaseLimit(): int
    {
        return $this->purchaseLimit;
    }
    /**
     * Limit of purchases on the offer.
     *
     * @param int $purchaseLimit
     *
     * @return self
     */
    public function setPurchaseLimit(int $purchaseLimit): self
    {
        $this->initialized['purchaseLimit'] = true;
        $this->purchaseLimit = $purchaseLimit;
        return $this;
    }
}