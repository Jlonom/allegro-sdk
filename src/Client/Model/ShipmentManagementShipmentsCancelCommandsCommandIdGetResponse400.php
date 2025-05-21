<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400 extends \ArrayObject
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
     * Array of errors.
     *
     * @var list<Error400>
     */
    protected $errors;
    /**
     * Array of errors.
     *
     * @return list<Error400>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Array of errors.
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
}