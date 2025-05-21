<?php

namespace Jlonom\AllegroSDK\Model;

class DisputeClaim extends \ArrayObject
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
     * Type of the buyer's expectations for the dispute outcome.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Details of the buyer's expectations for the dispute.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Type of the buyer's expectations for the dispute outcome.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Type of the buyer's expectations for the dispute outcome.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Details of the buyer's expectations for the dispute.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Details of the buyer's expectations for the dispute.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}