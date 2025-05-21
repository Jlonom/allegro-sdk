<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormInvoiceInfo extends \ArrayObject
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
     * Is invoice required by buyer?
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @var CheckoutFormInvoiceAddress
     */
    protected $address;
    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     *
     * @var string
     */
    protected $dueDate;
    /**
    * Invoice features list:
    - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    *
    * @var list<string>
    */
    protected $features;
    /**
     * Is invoice required by buyer?
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Is invoice required by buyer?
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormInvoiceAddress
     */
    public function getAddress(): CheckoutFormInvoiceAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CheckoutFormInvoiceAddress $address
     *
     * @return self
     */
    public function setAddress(CheckoutFormInvoiceAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     *
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     *
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate(string $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
    * Invoice features list:
    - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    *
    * @return list<string>
    */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
    * Invoice features list:
    - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
    *
    * @param list<string> $features
    *
    * @return self
    */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}