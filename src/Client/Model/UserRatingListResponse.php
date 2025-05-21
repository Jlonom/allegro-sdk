<?php

namespace Jlonom\AllegroSDK\Model;

class UserRatingListResponse extends \ArrayObject
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
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @var list<UserRating>
     */
    protected $ratings;
    /**
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @return list<UserRating>
     */
    public function getRatings(): array
    {
        return $this->ratings;
    }
    /**
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @param list<UserRating> $ratings
     *
     * @return self
     */
    public function setRatings(array $ratings): self
    {
        $this->initialized['ratings'] = true;
        $this->ratings = $ratings;
        return $this;
    }
}