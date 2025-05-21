<?php

namespace Jlonom\AllegroSDK\Model;

class CommandTask extends \ArrayObject
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
     * Modified field as JSON path.
     *
     * @var string
     */
    protected $field;
    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var OfferId
     */
    protected $offer;
    /**
     * Available statuses: NEW, SUCCESS, FAIL
     *
     * @var string
     */
    protected $status;
    /**
     * The list of error objects explaining the problems with command processing for the given offer.
     *
     * @var list<Error>
     */
    protected $errors;
    /**
     * Modified field as JSON path.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * Modified field as JSON path.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
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
     * Available statuses: NEW, SUCCESS, FAIL
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Available statuses: NEW, SUCCESS, FAIL
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
     * The list of error objects explaining the problems with command processing for the given offer.
     *
     * @return list<Error>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * The list of error objects explaining the problems with command processing for the given offer.
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