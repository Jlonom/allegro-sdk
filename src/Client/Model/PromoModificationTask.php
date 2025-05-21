<?php

namespace Jlonom\AllegroSDK\Model;

class PromoModificationTask extends \ArrayObject
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
     * @var OfferId
     */
    protected $offer;
    /**
     * 
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime
     */
    protected $scheduledAt;
    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * The list of all the error objects explaining the error.
     *
     * @var list<Error>
     */
    protected $errors;
    /**
     * 
     *
     * @return OfferId
     */
    public function getOffer(): OfferId
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferId $offer
     *
     * @return self
     */
    public function setOffer(OfferId $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }
    /**
     * 
     *
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
        return $this;
    }
    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @return \DateTime
     */
    public function getScheduledAt(): \DateTime
    {
        return $this->scheduledAt;
    }
    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @param \DateTime $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(\DateTime $scheduledAt): self
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The list of all the error objects explaining the error.
     *
     * @return list<Error>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * The list of all the error objects explaining the error.
     *
     * @param list<Error> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}