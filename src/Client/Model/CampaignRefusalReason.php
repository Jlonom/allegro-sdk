<?php

namespace Jlonom\AllegroSDK\Model;

class CampaignRefusalReason extends \ArrayObject
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
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     *
     * @var string
     */
    protected $code;
    /**
     * List of refusal messages.
     *
     * @var list<RefusalMessage>
     */
    protected $messages;
    /**
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * List of refusal messages.
     *
     * @return list<RefusalMessage>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * List of refusal messages.
     *
     * @param list<RefusalMessage> $messages
     *
     * @return self
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
}