<?php

namespace Jlonom\AllegroSDK\Model;

class ProductParameterProposal extends \ArrayObject
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
     * Parameter identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * List of proposed product parameter change statuses.
     *
     * @var list<ProductParameterValueProposal>
     */
    protected $values;
    /**
     * Parameter identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Parameter identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * List of proposed product parameter change statuses.
     *
     * @return list<ProductParameterValueProposal>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * List of proposed product parameter change statuses.
     *
     * @param list<ProductParameterValueProposal> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}