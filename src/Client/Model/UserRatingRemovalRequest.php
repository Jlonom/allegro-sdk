<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingRemovalRequest extends \ArrayObject
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
     * @var UserRatingRemovalRequestRequest
     */
    protected $request;
    /**
     * 
     *
     * @return UserRatingRemovalRequestRequest
     */
    public function getRequest(): UserRatingRemovalRequestRequest
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param UserRatingRemovalRequestRequest $request
     *
     * @return self
     */
    public function setRequest(UserRatingRemovalRequestRequest $request): self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
}