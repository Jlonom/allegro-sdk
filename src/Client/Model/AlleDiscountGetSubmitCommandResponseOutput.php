<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountGetSubmitCommandResponseOutput extends \ArrayObject
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
    * Status field possible values:
     - NEW - command processing has not started.
     - IN_PROGRESS - command is being processed.
     - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
       To make sure that the offer is participating in AlleDiscount, check the participation status in
       'GET /sale/alle-discount/{campaignId}/submitted-offers`.
    *
    * @var string
    */
    protected $status;
    /**
     * Command creation date. ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Command update date. ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     *
     * @var AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation|null
     */
    protected $newOfferParticipation;
    /**
     * 
     *
     * @var list<ErrorsHolder>
     */
    protected $errors;
    /**
    * Status field possible values:
     - NEW - command processing has not started.
     - IN_PROGRESS - command is being processed.
     - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
       To make sure that the offer is participating in AlleDiscount, check the participation status in
       'GET /sale/alle-discount/{campaignId}/submitted-offers`.
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Status field possible values:
     - NEW - command processing has not started.
     - IN_PROGRESS - command is being processed.
     - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
       To make sure that the offer is participating in AlleDiscount, check the participation status in
       'GET /sale/alle-discount/{campaignId}/submitted-offers`.
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
     * Command creation date. ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Command creation date. ISO 8601 format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Command update date. ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Command update date. ISO 8601 format.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     *
     * @return AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation|null
     */
    public function getNewOfferParticipation(): ?AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation
    {
        return $this->newOfferParticipation;
    }
    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     *
     * @param AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation|null $newOfferParticipation
     *
     * @return self
     */
    public function setNewOfferParticipation(?AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation $newOfferParticipation): self
    {
        $this->initialized['newOfferParticipation'] = true;
        $this->newOfferParticipation = $newOfferParticipation;
        return $this;
    }
    /**
     * 
     *
     * @return list<ErrorsHolder>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<ErrorsHolder> $errors
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