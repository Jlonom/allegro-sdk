<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountGetWithdrawCommandResponse extends \ArrayObject
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
     * @var AlleDiscountGetWithdrawCommandResponseInput
     */
    protected $input;
    /**
     * Withdraw offer command output data.
     *
     * @var AlleDiscountGetWithdrawCommandResponseOutput
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
     * @return AlleDiscountGetWithdrawCommandResponseInput
     */
    public function getInput(): AlleDiscountGetWithdrawCommandResponseInput
    {
        return $this->input;
    }
    /**
     * Provided withdraw offer command input data.
     *
     * @param AlleDiscountGetWithdrawCommandResponseInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountGetWithdrawCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Withdraw offer command output data.
     *
     * @return AlleDiscountGetWithdrawCommandResponseOutput
     */
    public function getOutput(): AlleDiscountGetWithdrawCommandResponseOutput
    {
        return $this->output;
    }
    /**
     * Withdraw offer command output data.
     *
     * @param AlleDiscountGetWithdrawCommandResponseOutput $output
     *
     * @return self
     */
    public function setOutput(AlleDiscountGetWithdrawCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}