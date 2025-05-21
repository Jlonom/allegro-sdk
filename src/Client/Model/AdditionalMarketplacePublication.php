<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalMarketplacePublication extends \ArrayObject
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
    * The publication status of the offer on additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     - *APPROVED* - the offer is approved to list on given marketplace
     - *REFUSED* - the offer is refused to list on given marketplace
    *
    * @var string
    */
    protected $status;
    /**
    * The publication status of the offer on additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     - *APPROVED* - the offer is approved to list on given marketplace
     - *REFUSED* - the offer is refused to list on given marketplace
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * The publication status of the offer on additional marketplace. The possible values:
    
     - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     - *APPROVED* - the offer is approved to list on given marketplace
     - *REFUSED* - the offer is refused to list on given marketplace
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}