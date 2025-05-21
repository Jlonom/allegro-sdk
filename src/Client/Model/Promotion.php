<?php

namespace Jlonom\AllegroSDK\Model;

class Promotion extends \ArrayObject
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
    protected $emphasized1d;
    /**
     * 
     *
     * @var bool
     */
    protected $emphasized10d;
    /**
     * 
     *
     * @var bool
     */
    protected $promoPackage;
    /**
     * 
     *
     * @var bool
     */
    protected $departmentPage;
    /**
     * 
     *
     * @return bool
     */
    public function getEmphasized1d(): bool
    {
        return $this->emphasized1d;
    }
    /**
     * 
     *
     * @param bool $emphasized1d
     *
     * @return self
     */
    public function setEmphasized1d(bool $emphasized1d): self
    {
        $this->initialized['emphasized1d'] = true;
        $this->emphasized1d = $emphasized1d;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEmphasized10d(): bool
    {
        return $this->emphasized10d;
    }
    /**
     * 
     *
     * @param bool $emphasized10d
     *
     * @return self
     */
    public function setEmphasized10d(bool $emphasized10d): self
    {
        $this->initialized['emphasized10d'] = true;
        $this->emphasized10d = $emphasized10d;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPromoPackage(): bool
    {
        return $this->promoPackage;
    }
    /**
     * 
     *
     * @param bool $promoPackage
     *
     * @return self
     */
    public function setPromoPackage(bool $promoPackage): self
    {
        $this->initialized['promoPackage'] = true;
        $this->promoPackage = $promoPackage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDepartmentPage(): bool
    {
        return $this->departmentPage;
    }
    /**
     * 
     *
     * @param bool $departmentPage
     *
     * @return self
     */
    public function setDepartmentPage(bool $departmentPage): self
    {
        $this->initialized['departmentPage'] = true;
        $this->departmentPage = $departmentPage;
        return $this;
    }
}