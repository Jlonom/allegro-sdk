<?php

namespace Jlonom\AllegroSDK\Model;

class PublicationModification extends \ArrayObject
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
     * Action to perform
     *
     * @var string
     */
    protected $action;
    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions
     *
     * @var \DateTime
     */
    protected $scheduledFor;
    /**
     * Action to perform
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * Action to perform
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions
     *
     * @return \DateTime
     */
    public function getScheduledFor(): \DateTime
    {
        return $this->scheduledFor;
    }
    /**
     * Date and time for scheduling ACTIVATE action, will be ignored for another actions
     *
     * @param \DateTime $scheduledFor
     *
     * @return self
     */
    public function setScheduledFor(\DateTime $scheduledFor): self
    {
        $this->initialized['scheduledFor'] = true;
        $this->scheduledFor = $scheduledFor;
        return $this;
    }
}