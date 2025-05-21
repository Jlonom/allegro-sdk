<?php

namespace Jlonom\AllegroSDK\Model;

class LabelRequestDto extends \ArrayObject
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
     * @var list<string>
     */
    protected $shipmentIds;
    /**
     * Label page format. Only for PDF file.
     *
     * @var string
     */
    protected $pageSize;
    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     *
     * @var bool
     */
    protected $cutLine;
    /**
     * 
     *
     * @return list<string>
     */
    public function getShipmentIds(): array
    {
        return $this->shipmentIds;
    }
    /**
     * 
     *
     * @param list<string> $shipmentIds
     *
     * @return self
     */
    public function setShipmentIds(array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;
        return $this;
    }
    /**
     * Label page format. Only for PDF file.
     *
     * @return string
     */
    public function getPageSize(): string
    {
        return $this->pageSize;
    }
    /**
     * Label page format. Only for PDF file.
     *
     * @param string $pageSize
     *
     * @return self
     */
    public function setPageSize(string $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     *
     * @return bool
     */
    public function getCutLine(): bool
    {
        return $this->cutLine;
    }
    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     *
     * @param bool $cutLine
     *
     * @return self
     */
    public function setCutLine(bool $cutLine): self
    {
        $this->initialized['cutLine'] = true;
        $this->cutLine = $cutLine;
        return $this;
    }
}