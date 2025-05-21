<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementTextSafetyInformation extends ProductSetElementSafetyInformation
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
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
     *
     * @var string
     */
    protected $description;
    /**
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
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