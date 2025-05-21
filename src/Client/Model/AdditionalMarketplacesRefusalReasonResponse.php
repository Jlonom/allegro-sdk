<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesRefusalReasonResponse extends \ArrayObject
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
     * Technical code of the refusal reason
     *
     * @var string
     */
    protected $code;
    /**
     * Short description of the refusal reason in natural language
     *
     * @var string
     */
    protected $userMessage;
    /**
     * Additional technical parameters of the refusal reason
     *
     * @var array<string, list<string>>
     */
    protected $parameters;
    /**
     * Technical code of the refusal reason
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Technical code of the refusal reason
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Short description of the refusal reason in natural language
     *
     * @return string
     */
    public function getUserMessage(): string
    {
        return $this->userMessage;
    }
    /**
     * Short description of the refusal reason in natural language
     *
     * @param string $userMessage
     *
     * @return self
     */
    public function setUserMessage(string $userMessage): self
    {
        $this->initialized['userMessage'] = true;
        $this->userMessage = $userMessage;
        return $this;
    }
    /**
     * Additional technical parameters of the refusal reason
     *
     * @return array<string, list<string>>
     */
    public function getParameters(): iterable
    {
        return $this->parameters;
    }
    /**
     * Additional technical parameters of the refusal reason
     *
     * @param array<string, list<string>> $parameters
     *
     * @return self
     */
    public function setParameters(iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}