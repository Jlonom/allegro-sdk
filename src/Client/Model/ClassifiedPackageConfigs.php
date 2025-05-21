<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedPackageConfigs extends \ArrayObject
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
     * @var list<ClassifiedPackageConfig>
     */
    protected $packages;
    /**
     * 
     *
     * @return list<ClassifiedPackageConfig>
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     * 
     *
     * @param list<ClassifiedPackageConfig> $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
}