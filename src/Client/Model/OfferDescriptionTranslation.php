<?php

namespace Jlonom\AllegroSDK\Model;

class OfferDescriptionTranslation extends \ArrayObject
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
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $translation;
    /**
     * Type of content: BASE - initial content for offer in declared offer language. AUTO - automatic translation from BASE content. MANUAL - manual translation provided by the user.
     *
     * @var string
     */
    protected $type;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @return StandardizedDescription
     */
    public function getTranslation(): StandardizedDescription
    {
        return $this->translation;
    }
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @param StandardizedDescription $translation
     *
     * @return self
     */
    public function setTranslation(StandardizedDescription $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;
        return $this;
    }
    /**
     * Type of content: BASE - initial content for offer in declared offer language. AUTO - automatic translation from BASE content. MANUAL - manual translation provided by the user.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of content: BASE - initial content for offer in declared offer language. AUTO - automatic translation from BASE content. MANUAL - manual translation provided by the user.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}