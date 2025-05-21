<?php

namespace Jlonom\AllegroSDK\Model;

class AuthError extends \ArrayObject
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
     * Authorization error code
     *
     * @var string
     */
    protected $error;
    /**
     * Authorization error message
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * Authorization error code
     *
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * Authorization error code
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * Authorization error message
     *
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }
    /**
     * Authorization error message
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription): self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;
        return $this;
    }
}