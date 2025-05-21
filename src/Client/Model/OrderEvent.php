<?php

namespace Jlonom\AllegroSDK\Model;

class OrderEvent extends \ArrayObject
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
     * event id
     *
     * @var string
     */
    protected $id;
    /**
     * Order event data
     *
     * @var OrderEventData
     */
    protected $order;
    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro
     *
     * @var mixed
     */
    protected $type;
    /**
     * Date when the event occurred
     *
     * @var \DateTime
     */
    protected $occurredAt;
    /**
     * event id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * event id
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
     * Order event data
     *
     * @return OrderEventData
     */
    public function getOrder(): OrderEventData
    {
        return $this->order;
    }
    /**
     * Order event data
     *
     * @param OrderEventData $order
     *
     * @return self
     */
    public function setOrder(OrderEventData $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Type of order event. * `BOUGHT` - purchase without checkout form filled in * `FILLED_IN` - checkout form filled in but payment is not completed yet so data could still change * `READY_FOR_PROCESSING` - payment completed. Purchase is ready for processing. * `BUYER_CANCELLED` - purchase cancelled by buyer * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed. * `BUYER_MODIFIED` - purchase modified by buyer * `AUTO_CANCELLED` - purchase cancelled automatically by Allegro
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Date when the event occurred
     *
     * @return \DateTime
     */
    public function getOccurredAt(): \DateTime
    {
        return $this->occurredAt;
    }
    /**
     * Date when the event occurred
     *
     * @param \DateTime $occurredAt
     *
     * @return self
     */
    public function setOccurredAt(\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
        return $this;
    }
}