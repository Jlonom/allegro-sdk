<?php

namespace Jlonom\AllegroSDK\Model;

class OrderOffersItem extends \ArrayObject
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
     * Offer ID
     *
     * @var string
     */
    protected $id;
    /**
     * Offer title
     *
     * @var string
     */
    protected $title;
    /**
     * Offer snapshot URL parameter pointing to historical offer view
     *
     * @var string
     */
    protected $snapshot;
    /**
     * Offer ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Offer ID
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
     * Offer title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Offer title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Offer snapshot URL parameter pointing to historical offer view
     *
     * @return string
     */
    public function getSnapshot(): string
    {
        return $this->snapshot;
    }
    /**
     * Offer snapshot URL parameter pointing to historical offer view
     *
     * @param string $snapshot
     *
     * @return self
     */
    public function setSnapshot(string $snapshot): self
    {
        $this->initialized['snapshot'] = true;
        $this->snapshot = $snapshot;
        return $this;
    }
}