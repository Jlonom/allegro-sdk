<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalPropertyDto extends \ArrayObject
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
     * ID of the additional property.
     *
     * @var string
     */
    protected $id;
    /**
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
     *
     * @var string
     */
    protected $name;
    /**
     * Translated description of the additional property.
     *
     * @var string
     */
    protected $description;
    /**
     * Defines if the additional property is mandatory or optional.
     *
     * @var bool
     */
    protected $required;
    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * ID of the additional property.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the additional property.
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
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
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
     * Translated description of the additional property.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Translated description of the additional property.
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
    /**
     * Defines if the additional property is mandatory or optional.
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Defines if the additional property is mandatory or optional.
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     *
     * @return bool
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }
    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
}