<?php

namespace Jlonom\AllegroSDK\Model;

class MeResponse extends \ArrayObject
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
     * User Id.
     *
     * @var string
     */
    protected $id;
    /**
     * User login.
     *
     * @var string
     */
    protected $login;
    /**
     * User's first name.
     *
     * @var string
     */
    protected $firstName;
    /**
     * User's last name.
     *
     * @var string
     */
    protected $lastName;
    /**
     * User's email.
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var MeResponseBaseMarketplace
     */
    protected $baseMarketplace;
    /**
     * 
     *
     * @var Company
     */
    protected $company;
    /**
    * User's features list:
    - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
    - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
    *
    * @var list<string>
    */
    protected $features;
    /**
     * User Id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User Id.
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
     * User login.
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * User login.
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * User's first name.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * User's first name.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * User's last name.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * User's last name.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * User's email.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * User's email.
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
     * 
     *
     * @return MeResponseBaseMarketplace
     */
    public function getBaseMarketplace(): MeResponseBaseMarketplace
    {
        return $this->baseMarketplace;
    }
    /**
     * 
     *
     * @param MeResponseBaseMarketplace $baseMarketplace
     *
     * @return self
     */
    public function setBaseMarketplace(MeResponseBaseMarketplace $baseMarketplace): self
    {
        $this->initialized['baseMarketplace'] = true;
        $this->baseMarketplace = $baseMarketplace;
        return $this;
    }
    /**
     * 
     *
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param Company $company
     *
     * @return self
     */
    public function setCompany(Company $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
    * User's features list:
    - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
    - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
    *
    * @return list<string>
    */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
    * User's features list:
    - `SUPER_SELLER` - Super Seller ("Super Sprzedawca") information.
    - `ONE_FULFILLMENT` - Seller uses the fulfillment service provided by Allegro.
    *
    * @param list<string> $features
    *
    * @return self
    */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}