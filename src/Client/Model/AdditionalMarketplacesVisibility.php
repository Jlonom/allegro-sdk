<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacesVisibility extends \ArrayObject
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
     * Additional marketplace ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Marketplace visibility qualification status.
     *
     * @var string
     */
    protected $status;
    /**
     * Reasons of visibility refusal.
     *
     * @var list<RefusalReason>
     */
    protected $refusalReasons;
    /**
     * Additional marketplace ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Additional marketplace ID.
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
     * Marketplace visibility qualification status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Marketplace visibility qualification status.
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
     * Reasons of visibility refusal.
     *
     * @return list<RefusalReason>
     */
    public function getRefusalReasons(): array
    {
        return $this->refusalReasons;
    }
    /**
     * Reasons of visibility refusal.
     *
     * @param list<RefusalReason> $refusalReasons
     *
     * @return self
     */
    public function setRefusalReasons(array $refusalReasons): self
    {
        $this->initialized['refusalReasons'] = true;
        $this->refusalReasons = $refusalReasons;
        return $this;
    }
}