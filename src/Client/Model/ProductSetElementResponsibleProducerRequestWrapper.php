<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementResponsibleProducerRequestWrapper extends \ArrayObject
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
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @var ProductSetElementResponsibleProducerRequest
     */
    protected $responsibleProducer;
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
}