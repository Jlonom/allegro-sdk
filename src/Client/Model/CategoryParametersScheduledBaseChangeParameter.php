<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParametersScheduledBaseChangeParameter extends \ArrayObject
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
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
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
}