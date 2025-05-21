<?php

namespace Jlonom\AllegroSDK\Model;

class FundraisingCampaign extends \ArrayObject
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
     * unique campaign identifier
     *
     * @var string
     */
    protected $id;
    /**
     * campaign name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var CharityOrganization
     */
    protected $organization;
    /**
     * unique campaign identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * unique campaign identifier
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
     * campaign name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * campaign name
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
     * @return CharityOrganization
     */
    public function getOrganization(): CharityOrganization
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param CharityOrganization $organization
     *
     * @return self
     */
    public function setOrganization(CharityOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
}