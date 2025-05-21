<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormPaymentReference extends \ArrayObject
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
     * Payment id
     *
     * @var string
     */
    protected $id;
    /**
     * Payment type
     *
     * @var string
     */
    protected $type;
    /**
     * Payment provider:
     * `PAYU` - processed by PAYU operator.
     * `P24` - processed by PRZELEWY24 operator.
     * `AF` - processed by Allegro Finance operator.
     * `OFFLINE` - offline payment.
     * `EPT` - extended payment term with Allegro Pay Business.
     *
     * @var string
     */
    protected $provider;
    /**
     * Date when the event occurred
     *
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $paidAmount;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $reconciliation;
    /**
    * Payment additional features:
    - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
    *
    * @var list<string>
    */
    protected $features;
    /**
     * Payment id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Payment id
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
     * Payment type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Payment type
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
     * Payment provider:
     * `PAYU` - processed by PAYU operator.
     * `P24` - processed by PRZELEWY24 operator.
     * `AF` - processed by Allegro Finance operator.
     * `OFFLINE` - offline payment.
     * `EPT` - extended payment term with Allegro Pay Business.
     *
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }
    /**
     * Payment provider:
     * `PAYU` - processed by PAYU operator.
     * `P24` - processed by PRZELEWY24 operator.
     * `AF` - processed by Allegro Finance operator.
     * `OFFLINE` - offline payment.
     * `EPT` - extended payment term with Allegro Pay Business.
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * Date when the event occurred
     *
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * Date when the event occurred
     *
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getPaidAmount(): Price
    {
        return $this->paidAmount;
    }
    /**
     * The price data.
     *
     * @param Price $paidAmount
     *
     * @return self
     */
    public function setPaidAmount(Price $paidAmount): self
    {
        $this->initialized['paidAmount'] = true;
        $this->paidAmount = $paidAmount;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getReconciliation(): Price
    {
        return $this->reconciliation;
    }
    /**
     * The price data.
     *
     * @param Price $reconciliation
     *
     * @return self
     */
    public function setReconciliation(Price $reconciliation): self
    {
        $this->initialized['reconciliation'] = true;
        $this->reconciliation = $reconciliation;
        return $this;
    }
    /**
    * Payment additional features:
    - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
    *
    * @return list<string>
    */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
    * Payment additional features:
    - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
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