<?php

namespace Jlonom\AllegroSDK\Model;

class SubmitCommand extends \ArrayObject
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
     * The identifier of command.
     *
     * @var string
     */
    protected $id;
    /**
     * Represents input of the Advance Ship Notice submit command.
     *
     * @var SubmitCommandInput
     */
    protected $input;
    /**
     * Represents output of the Advance Ship Notice submit command.
     *
     * @var SubmitCommandOutput
     */
    protected $output;
    /**
     * The identifier of command.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The identifier of command.
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
     * Represents input of the Advance Ship Notice submit command.
     *
     * @return SubmitCommandInput
     */
    public function getInput(): SubmitCommandInput
    {
        return $this->input;
    }
    /**
     * Represents input of the Advance Ship Notice submit command.
     *
     * @param SubmitCommandInput $input
     *
     * @return self
     */
    public function setInput(SubmitCommandInput $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Represents output of the Advance Ship Notice submit command.
     *
     * @return SubmitCommandOutput
     */
    public function getOutput(): SubmitCommandOutput
    {
        return $this->output;
    }
    /**
     * Represents output of the Advance Ship Notice submit command.
     *
     * @param SubmitCommandOutput $output
     *
     * @return self
     */
    public function setOutput(SubmitCommandOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}