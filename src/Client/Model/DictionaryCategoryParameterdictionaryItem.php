<?php

namespace Jlonom\AllegroSDK\Model;

class DictionaryCategoryParameterdictionaryItem extends \ArrayObject
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
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     *
     * @var string
     */
    protected $id;
    /**
     * The label of the dictionary value in Polish.
     *
     * @var string
     */
    protected $value;
    /**
     * The IDs of dictionary values from another parameter that this parameter value can be combined with. The other parameter has the id from `options.dependsOnParameterId`. Empty if this parameter value can be combined with any value from other parameters. Otherwise, this value might be set in the offer only when one of the given values of `dependsOnValueIds` is set as well.
     *
     * @var list<string>
     */
    protected $dependsOnValueIds;
    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
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
     * The label of the dictionary value in Polish.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The label of the dictionary value in Polish.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The IDs of dictionary values from another parameter that this parameter value can be combined with. The other parameter has the id from `options.dependsOnParameterId`. Empty if this parameter value can be combined with any value from other parameters. Otherwise, this value might be set in the offer only when one of the given values of `dependsOnValueIds` is set as well.
     *
     * @return list<string>
     */
    public function getDependsOnValueIds(): array
    {
        return $this->dependsOnValueIds;
    }
    /**
     * The IDs of dictionary values from another parameter that this parameter value can be combined with. The other parameter has the id from `options.dependsOnParameterId`. Empty if this parameter value can be combined with any value from other parameters. Otherwise, this value might be set in the offer only when one of the given values of `dependsOnValueIds` is set as well.
     *
     * @param list<string> $dependsOnValueIds
     *
     * @return self
     */
    public function setDependsOnValueIds(array $dependsOnValueIds): self
    {
        $this->initialized['dependsOnValueIds'] = true;
        $this->dependsOnValueIds = $dependsOnValueIds;
        return $this;
    }
}