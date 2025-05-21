<?php

namespace Jlonom\AllegroSDK\Model;

class PublicTablesDto extends \ArrayObject
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
     * @var list<PublicTableDto>
     */
    protected $tables;
    /**
     * 
     *
     * @return list<PublicTableDto>
     */
    public function getTables(): array
    {
        return $this->tables;
    }
    /**
     * 
     *
     * @param list<PublicTableDto> $tables
     *
     * @return self
     */
    public function setTables(array $tables): self
    {
        $this->initialized['tables'] = true;
        $this->tables = $tables;
        return $this;
    }
}