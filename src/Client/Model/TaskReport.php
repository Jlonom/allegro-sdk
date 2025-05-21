<?php

namespace Jlonom\AllegroSDK\Model;

class TaskReport extends \ArrayObject
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
     * List of task results
     *
     * @var list<CommandTask>
     */
    protected $tasks;
    /**
     * List of task results
     *
     * @return list<CommandTask>
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }
    /**
     * List of task results
     *
     * @param list<CommandTask> $tasks
     *
     * @return self
     */
    public function setTasks(array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks = $tasks;
        return $this;
    }
}