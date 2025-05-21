<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferRequestV1productSetItem extends \ArrayObject
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
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @var mixed
     */
    protected $product;
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @var ProductSetElementQuantityQuantity
     */
    protected $quantity;
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @var ProductSetElementResponsiblePersonRequestResponsiblePerson
     */
    protected $responsiblePerson;
    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @var ProductSetElementResponsibleProducerRequest
     */
    protected $responsibleProducer;
    /**
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @var ProductSetElementSafetyInformation
     */
    protected $safetyInformation;
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @param mixed $product
     *
     * @return self
     */
    public function setProduct($product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @return ProductSetElementQuantityQuantity
     */
    public function getQuantity(): ProductSetElementQuantityQuantity
    {
        return $this->quantity;
    }
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @param ProductSetElementQuantityQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(ProductSetElementQuantityQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
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
    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @return ProductSetElementResponsibleProducerRequest
     */
    public function getResponsibleProducer(): ProductSetElementResponsibleProducerRequest
    {
        return $this->responsibleProducer;
    }
    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @param ProductSetElementResponsibleProducerRequest $responsibleProducer
     *
     * @return self
     */
    public function setResponsibleProducer(ProductSetElementResponsibleProducerRequest $responsibleProducer): self
    {
        $this->initialized['responsibleProducer'] = true;
        $this->responsibleProducer = $responsibleProducer;
        return $this;
    }
    /**
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @return ProductSetElementSafetyInformation
     */
    public function getSafetyInformation(): ProductSetElementSafetyInformation
    {
        return $this->safetyInformation;
    }
    /**
     * Contains information about product's safety. Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *
     * @param ProductSetElementSafetyInformation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(ProductSetElementSafetyInformation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @return bool|null
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @param bool|null $marketedBeforeGPSRObligation
     *
     * @return self
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;
        return $this;
    }
}