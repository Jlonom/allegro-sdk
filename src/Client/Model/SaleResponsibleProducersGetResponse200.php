<?php

namespace Jlonom\AllegroSDK\Model;

class SaleResponsibleProducersGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var list<ResponsibleProducerResponse>
     */
    protected $responsibleProducers;
    /**
     * Number of responsible producers data returned in search result for the given parameters.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of available responsible producers data.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<ResponsibleProducerResponse>
     */
    public function getResponsibleProducers(): array
    {
        return $this->responsibleProducers;
    }
    /**
     * 
     *
     * @param list<ResponsibleProducerResponse> $responsibleProducers
     *
     * @return self
     */
    public function setResponsibleProducers(array $responsibleProducers): self
    {
        $this->initialized['responsibleProducers'] = true;
        $this->responsibleProducers = $responsibleProducers;
        return $this;
    }
    /**
     * Number of responsible producers data returned in search result for the given parameters.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of responsible producers data returned in search result for the given parameters.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of available responsible producers data.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of available responsible producers data.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}