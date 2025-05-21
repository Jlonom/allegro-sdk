<?php

namespace Jlonom\AllegroSDK\Model;

class SubmitFailedCommandOutput extends SubmitCommandOutput
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
     * The list of all the error objects explaining the error.
     *
     * @var list<Error>
     */
    protected $errors;
    /**
     * The list of all the error objects explaining the error.
     *
     * @return list<Error>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * The list of all the error objects explaining the error.
     *
     * @param list<Error> $errors
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