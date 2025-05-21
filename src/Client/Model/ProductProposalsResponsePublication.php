<?php

namespace Jlonom\AllegroSDK\Model;

class ProductProposalsResponsePublication extends \ArrayObject
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
    * The publication status of the submitted product:
    - `PROPOSED` - a new product proposal was created and can be reviewed
    *
    * @var string
    */
    protected $status;
    /**
    * The publication status of the submitted product:
    - `PROPOSED` - a new product proposal was created and can be reviewed
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * The publication status of the submitted product:
    - `PROPOSED` - a new product proposal was created and can be reviewed
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}