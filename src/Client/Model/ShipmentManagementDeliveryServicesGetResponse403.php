<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentManagementDeliveryServicesGetResponse403 extends \ArrayObject
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
     * @var list<Error403>
     */
    protected $errors;
    /**
     * Array of errors.
     *
     * @return list<Error403>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Array of errors.
     *
     * @param list<Error403> $errors
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