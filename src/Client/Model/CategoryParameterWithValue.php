<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameterWithValue extends \ArrayObject
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
     * Id of another parameter with a value dictionary.
     *
     * @var string
     */
    protected $id;
    /**
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @var list<string>
     */
    protected $oneOfValueIds;
    /**
     * Id of another parameter with a value dictionary.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of another parameter with a value dictionary.
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
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @return list<string>
     */
    public function getOneOfValueIds(): array
    {
        return $this->oneOfValueIds;
    }
    /**
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @param list<string> $oneOfValueIds
     *
     * @return self
     */
    public function setOneOfValueIds(array $oneOfValueIds): self
    {
        $this->initialized['oneOfValueIds'] = true;
        $this->oneOfValueIds = $oneOfValueIds;
        return $this;
    }
}