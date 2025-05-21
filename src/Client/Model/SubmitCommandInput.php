<?php

namespace Jlonom\AllegroSDK\Model;

class SubmitCommandInput extends \ArrayObject
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
     * The Advance Ship Notice identifier.
     *
     * @var string
     */
    protected $advanceShipNoticeId;
    /**
     * The Advance Ship Notice identifier.
     *
     * @return string
     */
    public function getAdvanceShipNoticeId(): string
    {
        return $this->advanceShipNoticeId;
    }
    /**
     * The Advance Ship Notice identifier.
     *
     * @param string $advanceShipNoticeId
     *
     * @return self
     */
    public function setAdvanceShipNoticeId(string $advanceShipNoticeId): self
    {
        $this->initialized['advanceShipNoticeId'] = true;
        $this->advanceShipNoticeId = $advanceShipNoticeId;
        return $this;
    }
}