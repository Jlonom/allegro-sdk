<?php

namespace Jlonom\AllegroSDK\Model;

class Dispute extends \ArrayObject
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
     * Identifier of the dispute
     *
     * @var string
     */
    protected $id;
    /**
     * Subject of the dispute
     *
     * @var Subject
     */
    protected $subject;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $messagesStatus;
    /**
     * 
     *
     * @var DisputeUser
     */
    protected $buyer;
    /**
     * 
     *
     * @var DisputeCheckoutForm
     */
    protected $checkoutForm;
    /**
     * Initial dispute message with text OR attachment OR both
     *
     * @var DisputeFirstMessage
     */
    protected $message;
    /**
     * 
     *
     * @var int
     */
    protected $messagesCount;
    /**
     * Recent date when the dispute has been opened or reopened
     *
     * @var \DateTime
     */
    protected $openedDate;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastMessageCreationDate;
    /**
     * Buyer's claim data for the dispute.
     *
     * @var DisputeClaim
     */
    protected $claim;
    /**
     * Identifier of the dispute
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the dispute
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
     * Subject of the dispute
     *
     * @return Subject
     */
    public function getSubject(): Subject
    {
        return $this->subject;
    }
    /**
     * Subject of the dispute
     *
     * @param Subject $subject
     *
     * @return self
     */
    public function setSubject(Subject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
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
     * 
     *
     * @return string
     */
    public function getMessagesStatus(): string
    {
        return $this->messagesStatus;
    }
    /**
     * 
     *
     * @param string $messagesStatus
     *
     * @return self
     */
    public function setMessagesStatus(string $messagesStatus): self
    {
        $this->initialized['messagesStatus'] = true;
        $this->messagesStatus = $messagesStatus;
        return $this;
    }
    /**
     * 
     *
     * @return DisputeUser
     */
    public function getBuyer(): DisputeUser
    {
        return $this->buyer;
    }
    /**
     * 
     *
     * @param DisputeUser $buyer
     *
     * @return self
     */
    public function setBuyer(DisputeUser $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * 
     *
     * @return DisputeCheckoutForm
     */
    public function getCheckoutForm(): DisputeCheckoutForm
    {
        return $this->checkoutForm;
    }
    /**
     * 
     *
     * @param DisputeCheckoutForm $checkoutForm
     *
     * @return self
     */
    public function setCheckoutForm(DisputeCheckoutForm $checkoutForm): self
    {
        $this->initialized['checkoutForm'] = true;
        $this->checkoutForm = $checkoutForm;
        return $this;
    }
    /**
     * Initial dispute message with text OR attachment OR both
     *
     * @return DisputeFirstMessage
     */
    public function getMessage(): DisputeFirstMessage
    {
        return $this->message;
    }
    /**
     * Initial dispute message with text OR attachment OR both
     *
     * @param DisputeFirstMessage $message
     *
     * @return self
     */
    public function setMessage(DisputeFirstMessage $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMessagesCount(): int
    {
        return $this->messagesCount;
    }
    /**
     * 
     *
     * @param int $messagesCount
     *
     * @return self
     */
    public function setMessagesCount(int $messagesCount): self
    {
        $this->initialized['messagesCount'] = true;
        $this->messagesCount = $messagesCount;
        return $this;
    }
    /**
     * Recent date when the dispute has been opened or reopened
     *
     * @return \DateTime
     */
    public function getOpenedDate(): \DateTime
    {
        return $this->openedDate;
    }
    /**
     * Recent date when the dispute has been opened or reopened
     *
     * @param \DateTime $openedDate
     *
     * @return self
     */
    public function setOpenedDate(\DateTime $openedDate): self
    {
        $this->initialized['openedDate'] = true;
        $this->openedDate = $openedDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastMessageCreationDate(): \DateTime
    {
        return $this->lastMessageCreationDate;
    }
    /**
     * 
     *
     * @param \DateTime $lastMessageCreationDate
     *
     * @return self
     */
    public function setLastMessageCreationDate(\DateTime $lastMessageCreationDate): self
    {
        $this->initialized['lastMessageCreationDate'] = true;
        $this->lastMessageCreationDate = $lastMessageCreationDate;
        return $this;
    }
    /**
     * Buyer's claim data for the dispute.
     *
     * @return DisputeClaim
     */
    public function getClaim(): DisputeClaim
    {
        return $this->claim;
    }
    /**
     * Buyer's claim data for the dispute.
     *
     * @param DisputeClaim $claim
     *
     * @return self
     */
    public function setClaim(DisputeClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
}