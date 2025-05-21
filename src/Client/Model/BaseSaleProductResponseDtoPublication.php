<?php

namespace Jlonom\AllegroSDK\Model;

class BaseSaleProductResponseDtoPublication extends \ArrayObject
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
    * The publication status of the product:
    - `PROPOSED` - product is proposed and can be during the review process
    - `LISTED` - product is created and reviewed
    *
    * @var string
    */
    protected $status;
    /**
    * The publication status of the product:
    - `PROPOSED` - product is proposed and can be during the review process
    - `LISTED` - product is created and reviewed
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * The publication status of the product:
    - `PROPOSED` - product is proposed and can be during the review process
    - `LISTED` - product is created and reviewed
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