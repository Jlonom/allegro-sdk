<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementNoSafetyInformation extends ProductSetElementSafetyInformation
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