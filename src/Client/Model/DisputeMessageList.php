<?php

namespace Jlonom\AllegroSDK\Model;

class DisputeMessageList extends \ArrayObject
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
     * 
     *
     * @var list<DisputeMessage>
     */
    protected $messages;
    /**
     * 
     *
     * @return list<DisputeMessage>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param list<DisputeMessage> $messages
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