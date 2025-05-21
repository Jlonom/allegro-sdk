<?php

namespace Jlonom\AllegroSDK\Model;

class OfferBundleDTO extends \ArrayObject
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
     * Bundle ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Offers included in bundle.
     *
     * @var list<BundledOfferDTO>
     */
    protected $offers;
    /**
     * Bundle status on each marketplace.
     *
     * @var OfferBundleDTOPublication
     */
    protected $publication;
    /**
     * Discounts on marketplaces.
     *
     * @var list<BundleDiscountDTO>|null
     */
    protected $discounts;
    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Bundle ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Bundle ID.
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
     * Offers included in bundle.
     *
     * @return list<BundledOfferDTO>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * Offers included in bundle.
     *
     * @param list<BundledOfferDTO> $offers
     *
     * @return self
     */
    public function setOffers(array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;
        return $this;
    }
    /**
     * Bundle status on each marketplace.
     *
     * @return OfferBundleDTOPublication
     */
    public function getPublication(): OfferBundleDTOPublication
    {
        return $this->publication;
    }
    /**
     * Bundle status on each marketplace.
     *
     * @param OfferBundleDTOPublication $publication
     *
     * @return self
     */
    public function setPublication(OfferBundleDTOPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Discounts on marketplaces.
     *
     * @return list<BundleDiscountDTO>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }
    /**
     * Discounts on marketplaces.
     *
     * @param list<BundleDiscountDTO>|null $discounts
     *
     * @return self
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
}