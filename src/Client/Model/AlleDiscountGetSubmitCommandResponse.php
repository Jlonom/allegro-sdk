<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountGetSubmitCommandResponse extends \ArrayObject
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
     * Provided submit offer command input data.
     *
     * @var AlleDiscountGetSubmitCommandResponseInput
     */
    protected $input;
    /**
     * Submit offer command output data.
     *
     * @var AlleDiscountGetSubmitCommandResponseOutput
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
     * Provided submit offer command input data.
     *
     * @return AlleDiscountGetSubmitCommandResponseInput
     */
    public function getInput(): AlleDiscountGetSubmitCommandResponseInput
    {
        return $this->input;
    }
    /**
     * Provided submit offer command input data.
     *
     * @param AlleDiscountGetSubmitCommandResponseInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountGetSubmitCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Submit offer command output data.
     *
     * @return AlleDiscountGetSubmitCommandResponseOutput
     */
    public function getOutput(): AlleDiscountGetSubmitCommandResponseOutput
    {
        return $this->output;
    }
    /**
     * Submit offer command output data.
     *
     * @param AlleDiscountGetSubmitCommandResponseOutput $output
     *
     * @return self
     */
    public function setOutput(AlleDiscountGetSubmitCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}