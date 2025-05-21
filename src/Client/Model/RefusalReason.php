<?php

namespace Jlonom\AllegroSDK\Model;

class RefusalReason extends \ArrayObject
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
     * Refusal reason code.
     *
     * @var string
     */
    protected $code;
    /**
     * Refusal reason parameters.
     *
     * @var array<string, list<string>>
     */
    protected $parameters;
    /**
     * Related refusal reasons.
     *
     * @var list<RelatedReason>
     */
    protected $relatedReasons;
    /**
     * Refusal reason code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Refusal reason code.
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
     * Refusal reason parameters.
     *
     * @return array<string, list<string>>
     */
    public function getParameters(): iterable
    {
        return $this->parameters;
    }
    /**
     * Refusal reason parameters.
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
    /**
     * Related refusal reasons.
     *
     * @return list<RelatedReason>
     */
    public function getRelatedReasons(): array
    {
        return $this->relatedReasons;
    }
    /**
     * Related refusal reasons.
     *
     * @param list<RelatedReason> $relatedReasons
     *
     * @return self
     */
    public function setRelatedReasons(array $relatedReasons): self
    {
        $this->initialized['relatedReasons'] = true;
        $this->relatedReasons = $relatedReasons;
        return $this;
    }
}