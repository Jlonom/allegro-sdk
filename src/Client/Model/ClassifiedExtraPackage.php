<?php

namespace Jlonom\AllegroSDK\Model;

class ClassifiedExtraPackage extends \ArrayObject
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
     * The classifieds extra package ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Extra package with this flag set to true will be recreated when offer is being republished
     *
     * @var bool
     */
    protected $republish;
    /**
     * The classifieds extra package ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The classifieds extra package ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Extra package with this flag set to true will be recreated when offer is being republished
     *
     * @return bool
     */
    public function getRepublish(): bool
    {
        return $this->republish;
    }
    /**
     * Extra package with this flag set to true will be recreated when offer is being republished
     *
     * @param bool $republish
     *
     * @return self
     */
    public function setRepublish(bool $republish): self
    {
        $this->initialized['republish'] = true;
        $this->republish = $republish;
        return $this;
    }
}