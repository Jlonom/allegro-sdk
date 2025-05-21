<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnItemReason extends \ArrayObject
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
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT".
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $userComment;
    /**
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT".
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT".
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserComment(): string
    {
        return $this->userComment;
    }
    /**
     * 
     *
     * @param string $userComment
     *
     * @return self
     */
    public function setUserComment(string $userComment): self
    {
        $this->initialized['userComment'] = true;
        $this->userComment = $userComment;
        return $this;
    }
}