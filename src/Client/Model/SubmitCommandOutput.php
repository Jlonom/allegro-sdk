<?php

namespace Jlonom\AllegroSDK\Model;

class SubmitCommandOutput extends \ArrayObject
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
     * The command status.
     *
     * @var string
     */
    protected $status;
    /**
     * The command status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The command status.
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->initialized['status'] = true;
        $this->status = $status;
    }
}