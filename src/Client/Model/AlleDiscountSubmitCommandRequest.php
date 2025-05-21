<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmitCommandRequest extends \ArrayObject
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
     * The command UUID. If empty, system generates new one.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Command input.
     *
     * @var AlleDiscountSubmitCommandRequestInput
     */
    protected $input;
    /**
     * The command UUID. If empty, system generates new one.
     *
     * @return string|null
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }
    /**
     * The command UUID. If empty, system generates new one.
     *
     * @param string|null $commandId
     *
     * @return self
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;
        return $this;
    }
    /**
     * Command input.
     *
     * @return AlleDiscountSubmitCommandRequestInput
     */
    public function getInput(): AlleDiscountSubmitCommandRequestInput
    {
        return $this->input;
    }
    /**
     * Command input.
     *
     * @param AlleDiscountSubmitCommandRequestInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountSubmitCommandRequestInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
}