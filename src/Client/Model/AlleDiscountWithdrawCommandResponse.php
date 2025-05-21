<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountWithdrawCommandResponse extends \ArrayObject
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
     * The id of the command.
     *
     * @var string
     */
    protected $id;
    /**
     * Provided withdraw offer command input data.
     *
     * @var AlleDiscountWithdrawCommandResponseInput
     */
    protected $input;
    /**
     * Withdraw offer command output data.
     *
     * @var AlleDiscountWithdrawCommandResponseOutput
     */
    protected $output;
    /**
     * The id of the command.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the command.
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
     * Provided withdraw offer command input data.
     *
     * @return AlleDiscountWithdrawCommandResponseInput
     */
    public function getInput(): AlleDiscountWithdrawCommandResponseInput
    {
        return $this->input;
    }
    /**
     * Provided withdraw offer command input data.
     *
     * @param AlleDiscountWithdrawCommandResponseInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountWithdrawCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Withdraw offer command output data.
     *
     * @return AlleDiscountWithdrawCommandResponseOutput
     */
    public function getOutput(): AlleDiscountWithdrawCommandResponseOutput
    {
        return $this->output;
    }
    /**
     * Withdraw offer command output data.
     *
     * @param AlleDiscountWithdrawCommandResponseOutput $output
     *
     * @return self
     */
    public function setOutput(AlleDiscountWithdrawCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}