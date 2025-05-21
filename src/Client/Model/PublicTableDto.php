<?php

namespace Jlonom\AllegroSDK\Model;

class PublicTableDto extends \ArrayObject
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
     * size table headers
     *
     * @var list<Header>
     */
    protected $headers;
    /**
     * size table id
     *
     * @var string
     */
    protected $id;
    /**
     * size table name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var JustId
     */
    protected $template;
    /**
     * size table cells
     *
     * @var list<Cells>
     */
    protected $values;
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
     * size table id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * size table id
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
     * 
     *
     * @return JustId
     */
    public function getTemplate(): JustId
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param JustId $template
     *
     * @return self
     */
    public function setTemplate(JustId $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
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