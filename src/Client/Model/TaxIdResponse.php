<?php

namespace Jlonom\AllegroSDK\Model;

class TaxIdResponse extends \ArrayObject
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
     * User's tax identification number.
     *
     * @var string
     */
    protected $taxId;
    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     *
     * @var string
     */
    protected $verificationStatus;
    /**
     * User's tax identification number.
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * User's tax identification number.
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     *
     * @return string
     */
    public function getVerificationStatus(): string
    {
        return $this->verificationStatus;
    }
    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     *
     * @param string $verificationStatus
     *
     * @return self
     */
    public function setVerificationStatus(string $verificationStatus): self
    {
        $this->initialized['verificationStatus'] = true;
        $this->verificationStatus = $verificationStatus;
        return $this;
    }
}