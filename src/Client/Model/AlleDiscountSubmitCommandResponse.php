<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmitCommandResponse extends \ArrayObject
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
     * Provided UUID of the submit offer command or generated UUID.
     *
     * @var string
     */
    protected $id;
    /**
     * Provided submit offer command input data.
     *
     * @var AlleDiscountSubmitCommandResponseInput
     */
    protected $input;
    /**
     * Submit offer command output data.
     *
     * @var AlleDiscountSubmitCommandResponseOutput
     */
    protected $output;
    /**
     * Provided UUID of the submit offer command or generated UUID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Provided UUID of the submit offer command or generated UUID.
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
     * @return AlleDiscountSubmitCommandResponseInput
     */
    public function getInput(): AlleDiscountSubmitCommandResponseInput
    {
        return $this->input;
    }
    /**
     * Provided submit offer command input data.
     *
     * @param AlleDiscountSubmitCommandResponseInput $input
     *
     * @return self
     */
    public function setInput(AlleDiscountSubmitCommandResponseInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Submit offer command output data.
     *
     * @return AlleDiscountSubmitCommandResponseOutput
     */
    public function getOutput(): AlleDiscountSubmitCommandResponseOutput
    {
        return $this->output;
    }
    /**
     * Submit offer command output data.
     *
     * @param AlleDiscountSubmitCommandResponseOutput $output
     *
     * @return self
     */
    public function setOutput(AlleDiscountSubmitCommandResponseOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}