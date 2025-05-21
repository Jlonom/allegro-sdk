<?php

namespace Jlonom\AllegroSDK\Model;

class CreatePickupCommandStatusDto extends \ArrayObject
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
     * Command UUID
     *
     * @var string
     */
    protected $commandId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @var list<Error400>
     */
    protected $errors;
    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @var string
     */
    protected $pickupId;
    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @var string
     */
    protected $carrierPickupId;
    /**
     * Command UUID
     *
     * @return string
     */
    public function getCommandId(): string
    {
        return $this->commandId;
    }
    /**
     * Command UUID
     *
     * @param string $commandId
     *
     * @return self
     */
    public function setCommandId(string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
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
    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @return list<Error400>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * List of errors. Available only, if operation finished with ERROR.
     *
     * @param list<Error400> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @return string
     */
    public function getPickupId(): string
    {
        return $this->pickupId;
    }
    /**
     * Generated internal pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @param string $pickupId
     *
     * @return self
     */
    public function setPickupId(string $pickupId): self
    {
        $this->initialized['pickupId'] = true;
        $this->pickupId = $pickupId;
        return $this;
    }
    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @return string
     */
    public function getCarrierPickupId(): string
    {
        return $this->carrierPickupId;
    }
    /**
     * Generated Carrier Pickup ID. Available only, if operation finished with SUCCESS.
     *
     * @param string $carrierPickupId
     *
     * @return self
     */
    public function setCarrierPickupId(string $carrierPickupId): self
    {
        $this->initialized['carrierPickupId'] = true;
        $this->carrierPickupId = $carrierPickupId;
        return $this;
    }
}