<?php

namespace Jlonom\AllegroSDK\Model;

class TurnoverDiscountDto extends \ArrayObject
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
     * Marketplace ID.
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * Turnover discount status.
     *
     * @var string
     */
    protected $status;
    /**
     * Definitions currently active or active in the future.
     *
     * @var list<TurnoverDiscountDefinitionDto>
     */
    protected $definitions;
    /**
     * Marketplace ID.
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * Marketplace ID.
     *
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
    /**
     * Turnover discount status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Turnover discount status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Definitions currently active or active in the future.
     *
     * @return list<TurnoverDiscountDefinitionDto>
     */
    public function getDefinitions(): array
    {
        return $this->definitions;
    }
    /**
     * Definitions currently active or active in the future.
     *
     * @param list<TurnoverDiscountDefinitionDto> $definitions
     *
     * @return self
     */
    public function setDefinitions(array $definitions): self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;
        return $this;
    }
}