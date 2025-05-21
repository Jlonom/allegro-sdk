<?php

namespace Jlonom\AllegroSDK\Model;

class SearchResult extends \ArrayObject
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
     * @var list<Pos>
     */
    protected $posList;
    /**
     * 
     *
     * @return list<Pos>
     */
    public function getPosList(): array
    {
        return $this->posList;
    }
    /**
     * 
     *
     * @param list<Pos> $posList
     *
     * @return self
     */
    public function setPosList(array $posList): self
    {
        $this->initialized['posList'] = true;
        $this->posList = $posList;
        return $this;
    }
}