<?php

namespace Jlonom\AllegroSDK\Model;

class Cells extends \ArrayObject
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
     * 
     *
     * @var list<string>
     */
    protected $cells;
    /**
     * 
     *
     * @return list<string>
     */
    public function getCells(): array
    {
        return $this->cells;
    }
    /**
     * 
     *
     * @param list<string> $cells
     *
     * @return self
     */
    public function setCells(array $cells): self
    {
        $this->initialized['cells'] = true;
        $this->cells = $cells;
        return $this;
    }
}