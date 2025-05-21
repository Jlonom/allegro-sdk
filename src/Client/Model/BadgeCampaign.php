<?php

namespace Jlonom\AllegroSDK\Model;

class BadgeCampaign extends \ArrayObject
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
     * Badge campaign ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Badge campaign name.
     *
     * @var string
     */
    protected $name;
    /**
     * Identifies a marketplace.
     *
     * @var MarketplaceReference
     */
    protected $marketplace;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Summary of user eligibility for participation in the campaign.
     *
     * @var UserCampaignEligibility
     */
    protected $eligibility;
    /**
     * Time period when the campaign is open for applying for badge.
     *
     * @var ApplicationTimePolicy
     */
    protected $application;
    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     *
     * @var VisibilityTimePolicy
     */
    protected $visibility;
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @var PublicationTimePolicy
     */
    protected $publication;
    /**
     * Link to campaign Terms & Conditions
     *
     * @var string
     */
    protected $regulationsLink;
    /**
     * Badge campaign ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Badge campaign ID.
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
     * Badge campaign name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Badge campaign name.
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
     * Identifies a marketplace.
     *
     * @return MarketplaceReference
     */
    public function getMarketplace(): MarketplaceReference
    {
        return $this->marketplace;
    }
    /**
     * Identifies a marketplace.
     *
     * @param MarketplaceReference $marketplace
     *
     * @return self
     */
    public function setMarketplace(MarketplaceReference $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
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
     * Summary of user eligibility for participation in the campaign.
     *
     * @return UserCampaignEligibility
     */
    public function getEligibility(): UserCampaignEligibility
    {
        return $this->eligibility;
    }
    /**
     * Summary of user eligibility for participation in the campaign.
     *
     * @param UserCampaignEligibility $eligibility
     *
     * @return self
     */
    public function setEligibility(UserCampaignEligibility $eligibility): self
    {
        $this->initialized['eligibility'] = true;
        $this->eligibility = $eligibility;
        return $this;
    }
    /**
     * Time period when the campaign is open for applying for badge.
     *
     * @return ApplicationTimePolicy
     */
    public function getApplication(): ApplicationTimePolicy
    {
        return $this->application;
    }
    /**
     * Time period when the campaign is open for applying for badge.
     *
     * @param ApplicationTimePolicy $application
     *
     * @return self
     */
    public function setApplication(ApplicationTimePolicy $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     *
     * @return VisibilityTimePolicy
     */
    public function getVisibility(): VisibilityTimePolicy
    {
        return $this->visibility;
    }
    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     *
     * @param VisibilityTimePolicy $visibility
     *
     * @return self
     */
    public function setVisibility(VisibilityTimePolicy $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @return PublicationTimePolicy
     */
    public function getPublication(): PublicationTimePolicy
    {
        return $this->publication;
    }
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @param PublicationTimePolicy $publication
     *
     * @return self
     */
    public function setPublication(PublicationTimePolicy $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Link to campaign Terms & Conditions
     *
     * @return string
     */
    public function getRegulationsLink(): string
    {
        return $this->regulationsLink;
    }
    /**
     * Link to campaign Terms & Conditions
     *
     * @param string $regulationsLink
     *
     * @return self
     */
    public function setRegulationsLink(string $regulationsLink): self
    {
        $this->initialized['regulationsLink'] = true;
        $this->regulationsLink = $regulationsLink;
        return $this;
    }
}