<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentManagementLabelPostResponse504 extends \ArrayObject
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
     * @var list<Error504>
     */
    protected $errors;
    /**
     * Array of errors.
     *
     * @return list<Error504>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Array of errors.
     *
     * @param list<Error504> $errors
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