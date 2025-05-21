<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementResponsiblePersonRequest extends \ArrayObject
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
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @var ProductSetElementResponsiblePersonRequestResponsiblePerson
     */
    protected $responsiblePerson;
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @return ProductSetElementResponsiblePersonRequestResponsiblePerson
     */
    public function getResponsiblePerson(): ProductSetElementResponsiblePersonRequestResponsiblePerson
    {
        return $this->responsiblePerson;
    }
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @param ProductSetElementResponsiblePersonRequestResponsiblePerson $responsiblePerson
     *
     * @return self
     */
    public function setResponsiblePerson(ProductSetElementResponsiblePersonRequestResponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }
}