<?php

namespace Jlonom\AllegroSDK\Model;

class BadgePatchProcess extends \ArrayObject
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
     * @var BadgePatchProcessProcess
     */
    protected $process;
    /**
     * 
     *
     * @return BadgePatchProcessProcess
     */
    public function getProcess(): BadgePatchProcessProcess
    {
        return $this->process;
    }
    /**
     * 
     *
     * @param BadgePatchProcessProcess $process
     *
     * @return self
     */
    public function setProcess(BadgePatchProcessProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;
        return $this;
    }
}