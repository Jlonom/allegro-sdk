<?php

namespace Jlonom\AllegroSDK\Model;

class SizeTablePutRequest extends \ArrayObject
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
     * size table name
     *
     * @var string
     */
    protected $name;
    /**
     * size table headers
     *
     * @var list<Header>
     */
    protected $headers;
    /**
     * size table cells
     *
     * @var list<Cells>
     */
    protected $values;
    /**
     * size table name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * size table name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * size table headers
     *
     * @return list<Header>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
    /**
     * size table headers
     *
     * @param list<Header> $headers
     *
     * @return self
     */
    public function setHeaders(array $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
    /**
     * size table cells
     *
     * @return list<Cells>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * size table cells
     *
     * @param list<Cells> $values
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