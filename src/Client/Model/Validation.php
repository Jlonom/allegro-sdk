<?php

namespace Jlonom\AllegroSDK\Model;

class Validation extends \ArrayObject
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
     * 
     *
     * @var list<ValidationError>
     */
    protected $errors;
    /**
     * 
     *
     * @var list<ValidationWarning>
     */
    protected $warnings;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $validatedAt;
    /**
     * 
     *
     * @return list<ValidationError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<ValidationError> $errors
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
     * 
     *
     * @return list<ValidationWarning>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<ValidationWarning> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getValidatedAt(): \DateTime
    {
        return $this->validatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $validatedAt
     *
     * @return self
     */
    public function setValidatedAt(\DateTime $validatedAt): self
    {
        $this->initialized['validatedAt'] = true;
        $this->validatedAt = $validatedAt;
        return $this;
    }
}