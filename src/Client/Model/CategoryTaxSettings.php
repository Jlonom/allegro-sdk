<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryTaxSettings extends \ArrayObject
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
     * A list of tax subjects.
     *
     * @var list<TaxSubject>
     */
    protected $subjects;
    /**
     * A list of tax rates.
     *
     * @var list<TaxRate>
     */
    protected $rates;
    /**
     * A list of tax exemptions.
     *
     * @var list<TaxExemption>
     */
    protected $exemptions;
    /**
     * A list of tax subjects.
     *
     * @return list<TaxSubject>
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }
    /**
     * A list of tax subjects.
     *
     * @param list<TaxSubject> $subjects
     *
     * @return self
     */
    public function setSubjects(array $subjects): self
    {
        $this->initialized['subjects'] = true;
        $this->subjects = $subjects;
        return $this;
    }
    /**
     * A list of tax rates.
     *
     * @return list<TaxRate>
     */
    public function getRates(): array
    {
        return $this->rates;
    }
    /**
     * A list of tax rates.
     *
     * @param list<TaxRate> $rates
     *
     * @return self
     */
    public function setRates(array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
    /**
     * A list of tax exemptions.
     *
     * @return list<TaxExemption>
     */
    public function getExemptions(): array
    {
        return $this->exemptions;
    }
    /**
     * A list of tax exemptions.
     *
     * @param list<TaxExemption> $exemptions
     *
     * @return self
     */
    public function setExemptions(array $exemptions): self
    {
        $this->initialized['exemptions'] = true;
        $this->exemptions = $exemptions;
        return $this;
    }
}