<?php

namespace Jlonom\AllegroSDK\Model;

class OfferPromoOption extends \ArrayObject
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
     * Promotion package identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime
     */
    protected $validFrom;
    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime
     */
    protected $validTo;
    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime
     */
    protected $nextCycleDate;
    /**
     * Promotion package identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Promotion package identifier.
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
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @return \DateTime
     */
    public function getValidFrom(): \DateTime
    {
        return $this->validFrom;
    }
    /**
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @param \DateTime $validFrom
     *
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @return \DateTime
     */
    public function getValidTo(): \DateTime
    {
        return $this->validTo;
    }
    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @param \DateTime $validTo
     *
     * @return self
     */
    public function setValidTo(\DateTime $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @return \DateTime
     */
    public function getNextCycleDate(): \DateTime
    {
        return $this->nextCycleDate;
    }
    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @param \DateTime $nextCycleDate
     *
     * @return self
     */
    public function setNextCycleDate(\DateTime $nextCycleDate): self
    {
        $this->initialized['nextCycleDate'] = true;
        $this->nextCycleDate = $nextCycleDate;
        return $this;
    }
}