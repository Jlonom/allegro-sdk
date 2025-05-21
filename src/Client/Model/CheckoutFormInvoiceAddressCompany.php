<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormInvoiceAddressCompany extends \ArrayObject
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
     * Name of a company for which invoice should be issued.
     *
     * @var string
     */
    protected $name;
    /**
     * Tax ids of a company for which invoice should be issued.
     *
     * @var list<CheckoutFormInvoiceAddressCompanyId>
     */
    protected $ids;
    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     *
     * @var string
     */
    protected $vatPayerStatus;
    /**
     * Tax id.
     *
     * @deprecated
     *
     * @var string
     */
    protected $taxId;
    /**
     * Name of a company for which invoice should be issued.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of a company for which invoice should be issued.
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
     * Tax ids of a company for which invoice should be issued.
     *
     * @return list<CheckoutFormInvoiceAddressCompanyId>
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * Tax ids of a company for which invoice should be issued.
     *
     * @param list<CheckoutFormInvoiceAddressCompanyId> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     *
     * @return string
     */
    public function getVatPayerStatus(): string
    {
        return $this->vatPayerStatus;
    }
    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     *
     * @param string $vatPayerStatus
     *
     * @return self
     */
    public function setVatPayerStatus(string $vatPayerStatus): self
    {
        $this->initialized['vatPayerStatus'] = true;
        $this->vatPayerStatus = $vatPayerStatus;
        return $this;
    }
    /**
     * Tax id.
     *
     * @deprecated
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * Tax id.
     *
     * @param string $taxId
     *
     * @deprecated
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
}