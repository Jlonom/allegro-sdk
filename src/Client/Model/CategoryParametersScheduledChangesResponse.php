<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParametersScheduledChangesResponse extends \ArrayObject
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
     * The list of scheduled changes.
     *
     * @var list<CategoryParametersScheduledBaseChange>
     */
    protected $scheduledChanges;
    /**
     * The list of scheduled changes.
     *
     * @return list<CategoryParametersScheduledBaseChange>
     */
    public function getScheduledChanges(): array
    {
        return $this->scheduledChanges;
    }
    /**
     * The list of scheduled changes.
     *
     * @param list<CategoryParametersScheduledBaseChange> $scheduledChanges
     *
     * @return self
     */
    public function setScheduledChanges(array $scheduledChanges): self
    {
        $this->initialized['scheduledChanges'] = true;
        $this->scheduledChanges = $scheduledChanges;
        return $this;
    }
}