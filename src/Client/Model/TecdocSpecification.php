<?php

namespace Jlonom\AllegroSDK\Model;

class TecdocSpecification extends \ArrayObject
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
     * Identifier of technical specification.
     *
     * @var string
     */
    protected $id;
    /**
     * Text representation of the technical specification. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
     *
     * @var list<TecdocSpecificationItem>
     */
    protected $items;
    /**
     * Identifier of technical specification.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of technical specification.
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
     * Text representation of the technical specification. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
     *
     * @return list<TecdocSpecificationItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Text representation of the technical specification. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
     *
     * @param list<TecdocSpecificationItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}