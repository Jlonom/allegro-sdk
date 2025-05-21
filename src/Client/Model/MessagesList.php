<?php

namespace Jlonom\AllegroSDK\Model;

class MessagesList extends \ArrayObject
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
     * @var list<Message>
     */
    protected $messages;
    /**
     * 
     *
     * @var int
     */
    protected $offset;
    /**
     * 
     *
     * @var int
     */
    protected $limit;
    /**
     * 
     *
     * @return list<Message>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param list<Message> $messages
     *
     * @return self
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
    /**
     * 
     *
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}