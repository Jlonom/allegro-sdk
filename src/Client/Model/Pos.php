<?php

namespace Jlonom\AllegroSDK\Model;

class Pos extends \ArrayObject
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
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
     *
     * @var string
     */
    protected $id;
    /**
     * ID from external client system.
     *
     * @var string
     */
    protected $externalId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var Seller
     */
    protected $seller;
    /**
     * Indicates point type. The only valid value so far is PICKUP_POINT.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var Address
     */
    protected $address;
    /**
     * 
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var list<PosLocation>
     */
    protected $locations;
    /**
     * Possible empty list of opening hours.
     *
     * @var list<OpenHour>
     */
    protected $openHours;
    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'
     *
     * @var string
     */
    protected $serviceTime;
    /**
     * An empty list of payment types is available.
     *
     * @var list<Payment>
     */
    protected $payments;
    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     *
     * @var string
     */
    protected $confirmationType;
    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
     *
     * @var string
     */
    protected $status;
    /**
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
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
     * ID from external client system.
     *
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }
    /**
     * ID from external client system.
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return Seller
     */
    public function getSeller(): Seller
    {
        return $this->seller;
    }
    /**
     * 
     *
     * @param Seller $seller
     *
     * @return self
     */
    public function setSeller(Seller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * Indicates point type. The only valid value so far is PICKUP_POINT.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Indicates point type. The only valid value so far is PICKUP_POINT.
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
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return list<PosLocation>
     */
    public function getLocations(): array
    {
        return $this->locations;
    }
    /**
     * IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @param list<PosLocation> $locations
     *
     * @return self
     */
    public function setLocations(array $locations): self
    {
        $this->initialized['locations'] = true;
        $this->locations = $locations;
        return $this;
    }
    /**
     * Possible empty list of opening hours.
     *
     * @return list<OpenHour>
     */
    public function getOpenHours(): array
    {
        return $this->openHours;
    }
    /**
     * Possible empty list of opening hours.
     *
     * @param list<OpenHour> $openHours
     *
     * @return self
     */
    public function setOpenHours(array $openHours): self
    {
        $this->initialized['openHours'] = true;
        $this->openHours = $openHours;
        return $this;
    }
    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'
     *
     * @return string
     */
    public function getServiceTime(): string
    {
        return $this->serviceTime;
    }
    /**
     * Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'
     *
     * @param string $serviceTime
     *
     * @return self
     */
    public function setServiceTime(string $serviceTime): self
    {
        $this->initialized['serviceTime'] = true;
        $this->serviceTime = $serviceTime;
        return $this;
    }
    /**
     * An empty list of payment types is available.
     *
     * @return list<Payment>
     */
    public function getPayments(): array
    {
        return $this->payments;
    }
    /**
     * An empty list of payment types is available.
     *
     * @param list<Payment> $payments
     *
     * @return self
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     *
     * @return string
     */
    public function getConfirmationType(): string
    {
        return $this->confirmationType;
    }
    /**
     * Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     *
     * @param string $confirmationType
     *
     * @return self
     */
    public function setConfirmationType(string $confirmationType): self
    {
        $this->initialized['confirmationType'] = true;
        $this->confirmationType = $confirmationType;
        return $this;
    }
    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
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
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
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
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}