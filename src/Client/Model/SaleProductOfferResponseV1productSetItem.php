<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferResponseV1productSetItem extends \ArrayObject
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
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>
     *
     * @var ProductSetElementQuantityQuantity
     */
    protected $quantity;
    /**
     * 
     *
     * @var SaleProductOfferResponseV1productSetItemproduct
     */
    protected $product;
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     *
     * @var SaleProductOfferResponseV1productSetItemresponsiblePerson
     */
    protected $responsiblePerson;
    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     *
     * @var SaleProductOfferResponseV1productSetItemresponsibleProducer
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
     * 
     *
     * @return SaleProductOfferResponseV1productSetItemproduct
     */
    public function getProduct(): SaleProductOfferResponseV1productSetItemproduct
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param SaleProductOfferResponseV1productSetItemproduct $product
     *
     * @return self
     */
    public function setProduct(SaleProductOfferResponseV1productSetItemproduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     *
     * @return SaleProductOfferResponseV1productSetItemresponsiblePerson
     */
    public function getResponsiblePerson(): SaleProductOfferResponseV1productSetItemresponsiblePerson
    {
        return $this->responsiblePerson;
    }
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     *
     * @param SaleProductOfferResponseV1productSetItemresponsiblePerson $responsiblePerson
     *
     * @return self
     */
    public function setResponsiblePerson(SaleProductOfferResponseV1productSetItemresponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }
    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     *
     * @return SaleProductOfferResponseV1productSetItemresponsibleProducer
     */
    public function getResponsibleProducer(): SaleProductOfferResponseV1productSetItemresponsibleProducer
    {
        return $this->responsibleProducer;
    }
    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     *
     * @param SaleProductOfferResponseV1productSetItemresponsibleProducer $responsibleProducer
     *
     * @return self
     */
    public function setResponsibleProducer(SaleProductOfferResponseV1productSetItemresponsibleProducer $responsibleProducer): self
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