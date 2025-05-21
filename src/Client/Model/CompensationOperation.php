<?php

namespace Jlonom\AllegroSDK\Model;

class CompensationOperation extends BaseOperation
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}