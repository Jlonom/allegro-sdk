<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceDto extends \ArrayObject
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
     * ID of additional service.
     *
     * @var string
     */
    protected $id;
    /**
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
     *
     * @var string
     */
    protected $name;
    /**
     * Optional description of service.
     *
     * @var string
     */
    protected $description;
    /**
     * ID of additional service.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of additional service.
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
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
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
     * Optional description of service.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Optional description of service.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}