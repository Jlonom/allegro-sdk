<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseSort extends \ArrayObject
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
     * The query parameter value which should be used for this sorting option.
     *
     * @var string
     */
    protected $value;
    /**
     * The sorting option name in Polish.
     *
     * @var string
     */
    protected $name;
    /**
     * The order label in Polish specifying ascending or descending mode.
     *
     * @var string
     */
    protected $order;
    /**
     * Indicates whether this sorting option was used in the current request.
     *
     * @var bool
     */
    protected $selected;
    /**
     * The query parameter value which should be used for this sorting option.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The query parameter value which should be used for this sorting option.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The sorting option name in Polish.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The sorting option name in Polish.
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
     * The order label in Polish specifying ascending or descending mode.
     *
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
    /**
     * The order label in Polish specifying ascending or descending mode.
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * Indicates whether this sorting option was used in the current request.
     *
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }
    /**
     * Indicates whether this sorting option was used in the current request.
     *
     * @param bool $selected
     *
     * @return self
     */
    public function setSelected(bool $selected): self
    {
        $this->initialized['selected'] = true;
        $this->selected = $selected;
        return $this;
    }
}