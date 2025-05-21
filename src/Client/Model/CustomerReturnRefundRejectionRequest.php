<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnRefundRejectionRequest extends \ArrayObject
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
     * Refund rejection
     *
     * @var CustomerReturnRefundRejectionRequestRejection
     */
    protected $rejection;
    /**
     * Refund rejection
     *
     * @return CustomerReturnRefundRejectionRequestRejection
     */
    public function getRejection(): CustomerReturnRefundRejectionRequestRejection
    {
        return $this->rejection;
    }
    /**
     * Refund rejection
     *
     * @param CustomerReturnRefundRejectionRequestRejection $rejection
     *
     * @return self
     */
    public function setRejection(CustomerReturnRefundRejectionRequestRejection $rejection): self
    {
        $this->initialized['rejection'] = true;
        $this->rejection = $rejection;
        return $this;
    }
}