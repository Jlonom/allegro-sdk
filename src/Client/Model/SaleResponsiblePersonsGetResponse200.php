<?php

namespace Jlonom\AllegroSDK\Model;

class SaleResponsiblePersonsGetResponse200 extends \ArrayObject
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
     * @var list<ResponsiblePersonResponse>
     */
    protected $responsiblePersons;
    /**
     * Number of responsible persons data returned in search result for the given parameters.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of available responsible persons data.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<ResponsiblePersonResponse>
     */
    public function getResponsiblePersons(): array
    {
        return $this->responsiblePersons;
    }
    /**
     * 
     *
     * @param list<ResponsiblePersonResponse> $responsiblePersons
     *
     * @return self
     */
    public function setResponsiblePersons(array $responsiblePersons): self
    {
        $this->initialized['responsiblePersons'] = true;
        $this->responsiblePersons = $responsiblePersons;
        return $this;
    }
    /**
     * Number of responsible persons data returned in search result for the given parameters.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of responsible persons data returned in search result for the given parameters.
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
     * Total number of available responsible persons data.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of available responsible persons data.
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