<?php

namespace Jlonom\AllegroSDK\Model;

class UserRating extends \ArrayObject
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
     * Seller's answer, if null seller did not publish answer
     *
     * @var Answer
     */
    protected $answer;
    /**
     * 
     *
     * @var User
     */
    protected $buyer;
    /**
     * Buyer's text comment
     *
     * @var string
     */
    protected $comment;
    /**
     * Creation datetime in ISO 8601 format
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Edition datetime in ISO 8601 format
     *
     * @var string
     */
    protected $editedAt;
    /**
     * If true this rating was not included in calculating average user rates
     *
     * @var bool
     */
    protected $excludedFromAverageRates;
    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     *
     * @var string
     */
    protected $excludedFromAverageRatesReason;
    /**
     * Rating id
     *
     * @var string
     */
    protected $id;
    /**
     * Last change (creation or latest edition) datetime in ISO 8601 format
     *
     * @var string
     */
    protected $lastChangedAt;
    /**
     * 
     *
     * @var Order
     */
    protected $order;
    /**
     * 
     *
     * @var Rates
     */
    protected $rates;
    /**
     * Whether buyer recommends the order
     *
     * @var bool
     */
    protected $recommended;
    /**
     * 
     *
     * @var Removal
     */
    protected $removal;
    /**
     * Seller's answer, if null seller did not publish answer
     *
     * @return Answer
     */
    public function getAnswer(): Answer
    {
        return $this->answer;
    }
    /**
     * Seller's answer, if null seller did not publish answer
     *
     * @param Answer $answer
     *
     * @return self
     */
    public function setAnswer(Answer $answer): self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;
        return $this;
    }
    /**
     * 
     *
     * @return User
     */
    public function getBuyer(): User
    {
        return $this->buyer;
    }
    /**
     * 
     *
     * @param User $buyer
     *
     * @return self
     */
    public function setBuyer(User $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;
        return $this;
    }
    /**
     * Buyer's text comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Buyer's text comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Creation datetime in ISO 8601 format
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Creation datetime in ISO 8601 format
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Edition datetime in ISO 8601 format
     *
     * @return string
     */
    public function getEditedAt(): string
    {
        return $this->editedAt;
    }
    /**
     * Edition datetime in ISO 8601 format
     *
     * @param string $editedAt
     *
     * @return self
     */
    public function setEditedAt(string $editedAt): self
    {
        $this->initialized['editedAt'] = true;
        $this->editedAt = $editedAt;
        return $this;
    }
    /**
     * If true this rating was not included in calculating average user rates
     *
     * @return bool
     */
    public function getExcludedFromAverageRates(): bool
    {
        return $this->excludedFromAverageRates;
    }
    /**
     * If true this rating was not included in calculating average user rates
     *
     * @param bool $excludedFromAverageRates
     *
     * @return self
     */
    public function setExcludedFromAverageRates(bool $excludedFromAverageRates): self
    {
        $this->initialized['excludedFromAverageRates'] = true;
        $this->excludedFromAverageRates = $excludedFromAverageRates;
        return $this;
    }
    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     *
     * @return string
     */
    public function getExcludedFromAverageRatesReason(): string
    {
        return $this->excludedFromAverageRatesReason;
    }
    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     *
     * @param string $excludedFromAverageRatesReason
     *
     * @return self
     */
    public function setExcludedFromAverageRatesReason(string $excludedFromAverageRatesReason): self
    {
        $this->initialized['excludedFromAverageRatesReason'] = true;
        $this->excludedFromAverageRatesReason = $excludedFromAverageRatesReason;
        return $this;
    }
    /**
     * Rating id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Rating id
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
     * Last change (creation or latest edition) datetime in ISO 8601 format
     *
     * @return string
     */
    public function getLastChangedAt(): string
    {
        return $this->lastChangedAt;
    }
    /**
     * Last change (creation or latest edition) datetime in ISO 8601 format
     *
     * @param string $lastChangedAt
     *
     * @return self
     */
    public function setLastChangedAt(string $lastChangedAt): self
    {
        $this->initialized['lastChangedAt'] = true;
        $this->lastChangedAt = $lastChangedAt;
        return $this;
    }
    /**
     * 
     *
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param Order $order
     *
     * @return self
     */
    public function setOrder(Order $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return Rates
     */
    public function getRates(): Rates
    {
        return $this->rates;
    }
    /**
     * 
     *
     * @param Rates $rates
     *
     * @return self
     */
    public function setRates(Rates $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
    /**
     * Whether buyer recommends the order
     *
     * @return bool
     */
    public function getRecommended(): bool
    {
        return $this->recommended;
    }
    /**
     * Whether buyer recommends the order
     *
     * @param bool $recommended
     *
     * @return self
     */
    public function setRecommended(bool $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;
        return $this;
    }
    /**
     * 
     *
     * @return Removal
     */
    public function getRemoval(): Removal
    {
        return $this->removal;
    }
    /**
     * 
     *
     * @param Removal $removal
     *
     * @return self
     */
    public function setRemoval(Removal $removal): self
    {
        $this->initialized['removal'] = true;
        $this->removal = $removal;
        return $this;
    }
}