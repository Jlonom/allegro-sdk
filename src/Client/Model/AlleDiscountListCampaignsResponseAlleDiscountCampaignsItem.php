<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem extends \ArrayObject
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
     * The id of the campaign.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the campaign.
     *
     * @var string
     */
    protected $name;
    /**
    * Field providing info about the type of the campaign. Two possible values:
     - SOURCING - no additional requirements.
     - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
    *
    * @var string
    */
    protected $type;
    /**
     * Time period when the campaign is visible in My Allegro.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility
     */
    protected $visibility;
    /**
     * Time period when the campaign is open for offer submission.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication
     */
    protected $application;
    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication
     */
    protected $publication;
    /**
     * Campaign marketplace data.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace
     */
    protected $marketplace;
    /**
     * The id of the campaign.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the campaign.
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
     * Name of the campaign.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the campaign.
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
    * Field providing info about the type of the campaign. Two possible values:
     - SOURCING - no additional requirements.
     - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Field providing info about the type of the campaign. Two possible values:
     - SOURCING - no additional requirements.
     - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
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
     * Time period when the campaign is visible in My Allegro.
     *
     * @return AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility
     */
    public function getVisibility(): AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility
    {
        return $this->visibility;
    }
    /**
     * Time period when the campaign is visible in My Allegro.
     *
     * @param AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility $visibility
     *
     * @return self
     */
    public function setVisibility(AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Time period when the campaign is open for offer submission.
     *
     * @return AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication
     */
    public function getApplication(): AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication
    {
        return $this->application;
    }
    /**
     * Time period when the campaign is open for offer submission.
     *
     * @param AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication $application
     *
     * @return self
     */
    public function setApplication(AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     *
     * @return AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication
     */
    public function getPublication(): AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication
    {
        return $this->publication;
    }
    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     *
     * @param AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication $publication
     *
     * @return self
     */
    public function setPublication(AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Campaign marketplace data.
     *
     * @return AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace
     */
    public function getMarketplace(): AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace
    {
        return $this->marketplace;
    }
    /**
     * Campaign marketplace data.
     *
     * @param AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace $marketplace
     *
     * @return self
     */
    public function setMarketplace(AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
}