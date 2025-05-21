<?php

namespace Jlonom\AllegroSDK\Model;

class ReceivingState extends \ArrayObject
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
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Stage of Advance Ship Notice receiving
     *
     * @var string
     */
    protected $stage;
    /**
     * A human friendly identifier of Advance Ship Notice.
     *
     * @var string
     */
    protected $displayNumber;
    /**
     * The list of products with receiving status.
     *
     * @var list<ReceivingEntry>
     */
    protected $content;
    /**
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date and time when report was updated last time. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Stage of Advance Ship Notice receiving
     *
     * @return string
     */
    public function getStage(): string
    {
        return $this->stage;
    }
    /**
     * Stage of Advance Ship Notice receiving
     *
     * @param string $stage
     *
     * @return self
     */
    public function setStage(string $stage): self
    {
        $this->initialized['stage'] = true;
        $this->stage = $stage;
        return $this;
    }
    /**
     * A human friendly identifier of Advance Ship Notice.
     *
     * @return string
     */
    public function getDisplayNumber(): string
    {
        return $this->displayNumber;
    }
    /**
     * A human friendly identifier of Advance Ship Notice.
     *
     * @param string $displayNumber
     *
     * @return self
     */
    public function setDisplayNumber(string $displayNumber): self
    {
        $this->initialized['displayNumber'] = true;
        $this->displayNumber = $displayNumber;
        return $this;
    }
    /**
     * The list of products with receiving status.
     *
     * @return list<ReceivingEntry>
     */
    public function getContent(): array
    {
        return $this->content;
    }
    /**
     * The list of products with receiving status.
     *
     * @param list<ReceivingEntry> $content
     *
     * @return self
     */
    public function setContent(array $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}