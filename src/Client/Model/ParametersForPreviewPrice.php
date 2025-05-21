<?php

namespace Jlonom\AllegroSDK\Model;

class ParametersForPreviewPrice extends \ArrayObject
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
     * @var Category
     */
    protected $category;
    /**
     * Offer condition, if is new, used or other.
     *
     * @var string
     */
    protected $condition;
    /**
     * 
     *
     * @var string
     */
    protected $duration;
    /**
     * 
     *
     * @var bool
     */
    protected $hasAnyQuantity;
    /**
     * If set, minimum value 0
     *
     * @var int
     */
    protected $numberOfBigPhotos;
    /**
     * If set, minimum value 0
     *
     * @var int
     */
    protected $numberOfPhotos;
    /**
     * Quantity of items to be sold. If set, minimum value 1
     *
     * @var int
     */
    protected $quantity;
    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     *
     * @var bool
     */
    protected $shop;
    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1
     *
     * @var int
     */
    protected $soldQuantity;
    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * 
     *
     * @var bool
     */
    protected $bold;
    /**
     * 
     *
     * @var bool
     */
    protected $highlight;
    /**
     * 
     *
     * @var bool
     */
    protected $departmentPage;
    /**
     * 
     *
     * @var bool
     */
    protected $emphasized;
    /**
     * 
     *
     * @var bool
     */
    protected $emphasizedHighlightBoldPackage;
    /**
     * 
     *
     * @var bool
     */
    protected $multiVariant;
    /**
     * 
     *
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param Category $category
     *
     * @return self
     */
    public function setCategory(Category $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Offer condition, if is new, used or other.
     *
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }
    /**
     * Offer condition, if is new, used or other.
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasAnyQuantity(): bool
    {
        return $this->hasAnyQuantity;
    }
    /**
     * 
     *
     * @param bool $hasAnyQuantity
     *
     * @return self
     */
    public function setHasAnyQuantity(bool $hasAnyQuantity): self
    {
        $this->initialized['hasAnyQuantity'] = true;
        $this->hasAnyQuantity = $hasAnyQuantity;
        return $this;
    }
    /**
     * If set, minimum value 0
     *
     * @return int
     */
    public function getNumberOfBigPhotos(): int
    {
        return $this->numberOfBigPhotos;
    }
    /**
     * If set, minimum value 0
     *
     * @param int $numberOfBigPhotos
     *
     * @return self
     */
    public function setNumberOfBigPhotos(int $numberOfBigPhotos): self
    {
        $this->initialized['numberOfBigPhotos'] = true;
        $this->numberOfBigPhotos = $numberOfBigPhotos;
        return $this;
    }
    /**
     * If set, minimum value 0
     *
     * @return int
     */
    public function getNumberOfPhotos(): int
    {
        return $this->numberOfPhotos;
    }
    /**
     * If set, minimum value 0
     *
     * @param int $numberOfPhotos
     *
     * @return self
     */
    public function setNumberOfPhotos(int $numberOfPhotos): self
    {
        $this->initialized['numberOfPhotos'] = true;
        $this->numberOfPhotos = $numberOfPhotos;
        return $this;
    }
    /**
     * Quantity of items to be sold. If set, minimum value 1
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Quantity of items to be sold. If set, minimum value 1
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     *
     * @return bool
     */
    public function getShop(): bool
    {
        return $this->shop;
    }
    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     *
     * @param bool $shop
     *
     * @return self
     */
    public function setShop(bool $shop): self
    {
        $this->initialized['shop'] = true;
        $this->shop = $shop;
        return $this;
    }
    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1
     *
     * @return int
     */
    public function getSoldQuantity(): int
    {
        return $this->soldQuantity;
    }
    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1
     *
     * @param int $soldQuantity
     *
     * @return self
     */
    public function setSoldQuantity(int $soldQuantity): self
    {
        $this->initialized['soldQuantity'] = true;
        $this->soldQuantity = $soldQuantity;
        return $this;
    }
    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
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
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }
    /**
     * 
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBold(): bool
    {
        return $this->bold;
    }
    /**
     * 
     *
     * @param bool $bold
     *
     * @return self
     */
    public function setBold(bool $bold): self
    {
        $this->initialized['bold'] = true;
        $this->bold = $bold;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHighlight(): bool
    {
        return $this->highlight;
    }
    /**
     * 
     *
     * @param bool $highlight
     *
     * @return self
     */
    public function setHighlight(bool $highlight): self
    {
        $this->initialized['highlight'] = true;
        $this->highlight = $highlight;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDepartmentPage(): bool
    {
        return $this->departmentPage;
    }
    /**
     * 
     *
     * @param bool $departmentPage
     *
     * @return self
     */
    public function setDepartmentPage(bool $departmentPage): self
    {
        $this->initialized['departmentPage'] = true;
        $this->departmentPage = $departmentPage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEmphasized(): bool
    {
        return $this->emphasized;
    }
    /**
     * 
     *
     * @param bool $emphasized
     *
     * @return self
     */
    public function setEmphasized(bool $emphasized): self
    {
        $this->initialized['emphasized'] = true;
        $this->emphasized = $emphasized;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEmphasizedHighlightBoldPackage(): bool
    {
        return $this->emphasizedHighlightBoldPackage;
    }
    /**
     * 
     *
     * @param bool $emphasizedHighlightBoldPackage
     *
     * @return self
     */
    public function setEmphasizedHighlightBoldPackage(bool $emphasizedHighlightBoldPackage): self
    {
        $this->initialized['emphasizedHighlightBoldPackage'] = true;
        $this->emphasizedHighlightBoldPackage = $emphasizedHighlightBoldPackage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMultiVariant(): bool
    {
        return $this->multiVariant;
    }
    /**
     * 
     *
     * @param bool $multiVariant
     *
     * @return self
     */
    public function setMultiVariant(bool $multiVariant): self
    {
        $this->initialized['multiVariant'] = true;
        $this->multiVariant = $multiVariant;
        return $this;
    }
}