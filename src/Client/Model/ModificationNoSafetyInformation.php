<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationNoSafetyInformation extends ModificationSafetyInformation
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