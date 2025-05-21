<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPromotion extends \ArrayObject
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
     * Indicates whether the offer is promoted.
     *
     * @var bool
     */
    protected $emphasized;
    /**
     * Indicates whether the offer has bold title option.
     *
     * @var bool
     */
    protected $bold;
    /**
     * Indicates whether the offer has highlight option.
     *
     * @var bool
     */
    protected $highlight;
    /**
     * Indicates whether the offer is promoted.
     *
     * @return bool
     */
    public function getEmphasized(): bool
    {
        return $this->emphasized;
    }
    /**
     * Indicates whether the offer is promoted.
     *
     * @param bool $emphasized
     *
     * @return self
     */
    public function setEmphasized(bool $emphasized): self
    {
        $this->initialized['emphasized'] = true;
        $this->emphasized = $emphasized;
        return $this;
    }
    /**
     * Indicates whether the offer has bold title option.
     *
     * @return bool
     */
    public function getBold(): bool
    {
        return $this->bold;
    }
    /**
     * Indicates whether the offer has bold title option.
     *
     * @param bool $bold
     *
     * @return self
     */
    public function setBold(bool $bold): self
    {
        $this->initialized['bold'] = true;
        $this->bold = $bold;
        return $this;
    }
    /**
     * Indicates whether the offer has highlight option.
     *
     * @return bool
     */
    public function getHighlight(): bool
    {
        return $this->highlight;
    }
    /**
     * Indicates whether the offer has highlight option.
     *
     * @param bool $highlight
     *
     * @return self
     */
    public function setHighlight(bool $highlight): self
    {
        $this->initialized['highlight'] = true;
        $this->highlight = $highlight;
        return $this;
    }
}