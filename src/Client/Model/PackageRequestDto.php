<?php

namespace Jlonom\AllegroSDK\Model;

class PackageRequestDto extends \ArrayObject
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
     * Available values: PACKAGE|DOX|PALLET|OTHER
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var DimensionValue
     */
    protected $length;
    /**
     * 
     *
     * @var DimensionValue
     */
    protected $width;
    /**
     * 
     *
     * @var DimensionValue
     */
    protected $height;
    /**
     * 
     *
     * @var WeightValue
     */
    protected $weight;
    /**
     * Additional information on the package label.
     *
     * @var string
     */
    protected $textOnLabel;
    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Available values: PACKAGE|DOX|PALLET|OTHER
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
     * @return DimensionValue
     */
    public function getLength(): DimensionValue
    {
        return $this->length;
    }
    /**
     * 
     *
     * @param DimensionValue $length
     *
     * @return self
     */
    public function setLength(DimensionValue $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * 
     *
     * @return DimensionValue
     */
    public function getWidth(): DimensionValue
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param DimensionValue $width
     *
     * @return self
     */
    public function setWidth(DimensionValue $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return DimensionValue
     */
    public function getHeight(): DimensionValue
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param DimensionValue $height
     *
     * @return self
     */
    public function setHeight(DimensionValue $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return WeightValue
     */
    public function getWeight(): WeightValue
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param WeightValue $weight
     *
     * @return self
     */
    public function setWeight(WeightValue $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Additional information on the package label.
     *
     * @return string
     */
    public function getTextOnLabel(): string
    {
        return $this->textOnLabel;
    }
    /**
     * Additional information on the package label.
     *
     * @param string $textOnLabel
     *
     * @return self
     */
    public function setTextOnLabel(string $textOnLabel): self
    {
        $this->initialized['textOnLabel'] = true;
        $this->textOnLabel = $textOnLabel;
        return $this;
    }
}