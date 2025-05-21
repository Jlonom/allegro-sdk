<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentCancelCommandDto extends \ArrayObject
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
     * Command UUID. If empty, then system generate new one.
     *
     * @var string
     */
    protected $commandId;
    /**
     * 
     *
     * @var ShipmentCancelRequestDto
     */
    protected $input;
    /**
     * Command UUID. If empty, then system generate new one.
     *
     * @return string
     */
    public function getCommandId(): string
    {
        return $this->commandId;
    }
    /**
     * Command UUID. If empty, then system generate new one.
     *
     * @param string $commandId
     *
     * @return self
     */
    public function setCommandId(string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;
        return $this;
    }
    /**
     * 
     *
     * @return ShipmentCancelRequestDto
     */
    public function getInput(): ShipmentCancelRequestDto
    {
        return $this->input;
    }
    /**
     * 
     *
     * @param ShipmentCancelRequestDto $input
     *
     * @return self
     */
    public function setInput(ShipmentCancelRequestDto $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
}