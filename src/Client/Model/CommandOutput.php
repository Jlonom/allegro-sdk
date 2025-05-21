<?php

namespace Jlonom\AllegroSDK\Model;

class CommandOutput extends \ArrayObject
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
     * The processing status of the command.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<Error>
     */
    protected $errors;
    /**
     * The processing status of the command.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The processing status of the command.
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
     * 
     *
     * @return list<Error>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * 
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