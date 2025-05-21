<?php

namespace Jlonom\AllegroSDK\Model;

class ThreadsList extends \ArrayObject
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
     * @var list<Thread>
     */
    protected $threads;
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
     * @return list<Thread>
     */
    public function getThreads(): array
    {
        return $this->threads;
    }
    /**
     * 
     *
     * @param list<Thread> $threads
     *
     * @return self
     */
    public function setThreads(array $threads): self
    {
        $this->initialized['threads'] = true;
        $this->threads = $threads;
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