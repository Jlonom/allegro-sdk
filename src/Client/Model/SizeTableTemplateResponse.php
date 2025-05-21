<?php

namespace Jlonom\AllegroSDK\Model;

class SizeTableTemplateResponse extends \ArrayObject
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
     * size table template id
     *
     * @var string
     */
    protected $id;
    /**
     * size table template name
     *
     * @var string
     */
    protected $name;
    /**
     * size table template image
     *
     * @var SizeTableTemplateImageResponse
     */
    protected $image;
    /**
     * size table template headers
     *
     * @var list<Header>
     */
    protected $headers;
    /**
     * size table template cells
     *
     * @var list<Cells>
     */
    protected $values;
    /**
     * size table template id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * size table template id
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
     * size table template name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * size table template name
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
     * size table template image
     *
     * @return SizeTableTemplateImageResponse
     */
    public function getImage(): SizeTableTemplateImageResponse
    {
        return $this->image;
    }
    /**
     * size table template image
     *
     * @param SizeTableTemplateImageResponse $image
     *
     * @return self
     */
    public function setImage(SizeTableTemplateImageResponse $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * size table template headers
     *
     * @return list<Header>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
    /**
     * size table template headers
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
     * size table template cells
     *
     * @return list<Cells>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * size table template cells
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