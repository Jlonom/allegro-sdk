<?php

namespace Jlonom\AllegroSDK\Model;

class ChangePrice extends \ArrayObject
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
     * The unique command id provided in the input.
     *
     * @var string
     */
    protected $id;
    /**
     * The input of the command, i.e. the new Buy Now price for the offer.
     *
     * @var ChangePriceInput
     */
    protected $input;
    /**
     * The output of the command.
     *
     * @var CommandOutput
     */
    protected $output;
    /**
     * The unique command id provided in the input.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique command id provided in the input.
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
     * The input of the command, i.e. the new Buy Now price for the offer.
     *
     * @return ChangePriceInput
     */
    public function getInput(): ChangePriceInput
    {
        return $this->input;
    }
    /**
     * The input of the command, i.e. the new Buy Now price for the offer.
     *
     * @param ChangePriceInput $input
     *
     * @return self
     */
    public function setInput(ChangePriceInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * The output of the command.
     *
     * @return CommandOutput
     */
    public function getOutput(): CommandOutput
    {
        return $this->output;
    }
    /**
     * The output of the command.
     *
     * @param CommandOutput $output
     *
     * @return self
     */
    public function setOutput(CommandOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}