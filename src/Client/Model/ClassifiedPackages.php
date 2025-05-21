<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedPackages extends \ArrayObject
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
     * @var ClassifiedPackage
     */
    protected $basePackage;
    /**
     * 
     *
     * @var list<ClassifiedPackage>
     */
    protected $extraPackages;
    /**
     * 
     *
     * @return ClassifiedPackage
     */
    public function getBasePackage(): ClassifiedPackage
    {
        return $this->basePackage;
    }
    /**
     * 
     *
     * @param ClassifiedPackage $basePackage
     *
     * @return self
     */
    public function setBasePackage(ClassifiedPackage $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;
        return $this;
    }
    /**
     * 
     *
     * @return list<ClassifiedPackage>
     */
    public function getExtraPackages(): array
    {
        return $this->extraPackages;
    }
    /**
     * 
     *
     * @param list<ClassifiedPackage> $extraPackages
     *
     * @return self
     */
    public function setExtraPackages(array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;
        return $this;
    }
}