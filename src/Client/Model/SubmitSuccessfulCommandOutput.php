<?php

namespace Jlonom\AllegroSDK\Model;

class SubmitSuccessfulCommandOutput extends SubmitCommandOutput
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