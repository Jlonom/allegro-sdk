<?php

namespace Jlonom\AllegroSDK\Model;

class PromoOptionsModification extends \ArrayObject
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
     * Type of modification to be applied.
     *
     * @var string
     */
    protected $modificationType;
    /**
     * Type of promotion package to be changed/removed.
     *
     * @var string
     */
    protected $packageType;
    /**
     * Promotion package identifier.
     *
     * @var string
     */
    protected $packageId;
    /**
     * Type of modification to be applied.
     *
     * @return string
     */
    public function getModificationType(): string
    {
        return $this->modificationType;
    }
    /**
     * Type of modification to be applied.
     *
     * @param string $modificationType
     *
     * @return self
     */
    public function setModificationType(string $modificationType): self
    {
        $this->initialized['modificationType'] = true;
        $this->modificationType = $modificationType;
        return $this;
    }
    /**
     * Type of promotion package to be changed/removed.
     *
     * @return string
     */
    public function getPackageType(): string
    {
        return $this->packageType;
    }
    /**
     * Type of promotion package to be changed/removed.
     *
     * @param string $packageType
     *
     * @return self
     */
    public function setPackageType(string $packageType): self
    {
        $this->initialized['packageType'] = true;
        $this->packageType = $packageType;
        return $this;
    }
    /**
     * Promotion package identifier.
     *
     * @return string
     */
    public function getPackageId(): string
    {
        return $this->packageId;
    }
    /**
     * Promotion package identifier.
     *
     * @param string $packageId
     *
     * @return self
     */
    public function setPackageId(string $packageId): self
    {
        $this->initialized['packageId'] = true;
        $this->packageId = $packageId;
        return $this;
    }
}