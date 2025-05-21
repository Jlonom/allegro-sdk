<?php

namespace Jlonom\AllegroSDK\Model;

class ProductParameterDtoOptions extends \ArrayObject
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
     * @var bool
     */
    protected $identifiesProduct;
    /**
     * 
     *
     * @var bool
     */
    protected $isGTIN;
    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     *
     * @var bool
     */
    protected $isTrusted;
    /**
     * 
     *
     * @return bool
     */
    public function getIdentifiesProduct(): bool
    {
        return $this->identifiesProduct;
    }
    /**
     * 
     *
     * @param bool $identifiesProduct
     *
     * @return self
     */
    public function setIdentifiesProduct(bool $identifiesProduct): self
    {
        $this->initialized['identifiesProduct'] = true;
        $this->identifiesProduct = $identifiesProduct;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsGTIN(): bool
    {
        return $this->isGTIN;
    }
    /**
     * 
     *
     * @param bool $isGTIN
     *
     * @return self
     */
    public function setIsGTIN(bool $isGTIN): self
    {
        $this->initialized['isGTIN'] = true;
        $this->isGTIN = $isGTIN;
        return $this;
    }
    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     *
     * @return bool
     */
    public function getIsTrusted(): bool
    {
        return $this->isTrusted;
    }
    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     *
     * @param bool $isTrusted
     *
     * @return self
     */
    public function setIsTrusted(bool $isTrusted): self
    {
        $this->initialized['isTrusted'] = true;
        $this->isTrusted = $isTrusted;
        return $this;
    }
}