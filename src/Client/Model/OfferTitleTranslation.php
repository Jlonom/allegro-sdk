<?php

namespace Jlonom\AllegroSDK\Model;

class OfferTitleTranslation extends \ArrayObject
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
     * Offer title translation content
     *
     * @var string
     */
    protected $translation;
    /**
     * Type of content: BASE - initial content for offer in declared offer language. AUTO - automatic translation from BASE content. MANUAL - manual translation provided by the user.
     *
     * @var string
     */
    protected $type;
    /**
     * Offer title translation content
     *
     * @return string
     */
    public function getTranslation(): string
    {
        return $this->translation;
    }
    /**
     * Offer title translation content
     *
     * @param string $translation
     *
     * @return self
     */
    public function setTranslation(string $translation): self
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