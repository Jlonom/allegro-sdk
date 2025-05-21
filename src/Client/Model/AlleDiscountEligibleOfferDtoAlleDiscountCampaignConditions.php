<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions extends \ArrayObject
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
     * If true, offer matches campaign requirements and `violations` array will be empty.
     *
     * @var bool
     */
    protected $meetsConditions;
    /**
    * Example violations:
     - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
    *
    * @var list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem>
    */
    protected $violations;
    /**
     * If true, offer matches campaign requirements and `violations` array will be empty.
     *
     * @return bool
     */
    public function getMeetsConditions(): bool
    {
        return $this->meetsConditions;
    }
    /**
     * If true, offer matches campaign requirements and `violations` array will be empty.
     *
     * @param bool $meetsConditions
     *
     * @return self
     */
    public function setMeetsConditions(bool $meetsConditions): self
    {
        $this->initialized['meetsConditions'] = true;
        $this->meetsConditions = $meetsConditions;
        return $this;
    }
    /**
    * Example violations:
     - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
    *
    * @return list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem>
    */
    public function getViolations(): array
    {
        return $this->violations;
    }
    /**
    * Example violations:
     - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.
     - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.
     - NOT_NEW_OFFER - offer’s condition is not new (e.g used).
     - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null.
    *
    * @param list<AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem> $violations
    *
    * @return self
    */
    public function setViolations(array $violations): self
    {
        $this->initialized['violations'] = true;
        $this->violations = $violations;
        return $this;
    }
}