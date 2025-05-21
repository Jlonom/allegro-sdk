<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeApplicationRejectionReason extends \ArrayObject
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
     * List of messages with rejection reasons.
     *
     * @var list<BadgeApplicationRejectionReasonMessage>
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
     * List of messages with rejection reasons.
     *
     * @return list<BadgeApplicationRejectionReasonMessage>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * List of messages with rejection reasons.
     *
     * @param list<BadgeApplicationRejectionReasonMessage> $messages
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