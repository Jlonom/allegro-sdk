<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountWithdrawCommandRequest extends \ArrayObject
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
     * The Command UUID. If empty, system generates new one.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Command input.
     *
     * @var AlleDiscountWithdrawCommandRequestInput
     */
    protected $input;
    /**
     * The Command UUID. If empty, system generates new one.
     *
     * @return string|null
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }
    /**
     * The Command UUID. If empty, system generates new one.
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
     * @return AlleDiscountWithdrawCommandRequestInput
     */
    public function getInput(): AlleDiscountWithdrawCommandRequestInput
    {
        return $this->input;
    }
    /**
     * Command input.
     *
     * @param AlleDiscountWithdrawCommandRequestInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountWithdrawCommandRequestInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
}