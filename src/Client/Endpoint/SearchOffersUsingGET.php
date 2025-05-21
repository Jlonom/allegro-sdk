<?php

namespace Jlonom\AllegroSDK\Endpoint;

class SearchOffersUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-moje-oferty-w-rest-api" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#list-of-offers" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var array $offer.id Offer ID.
    *     @var string $name The text to search in the offer title.
    *     @var float $sellingMode.price.amount.gte The lower threshold of price.
    
    If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
    *     @var float $sellingMode.price.amount.lte The upper threshold of price.
    
    If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
    *     @var string $sellingMode.priceAutomation.rule.id The ID of price automation rule. Returns offers with given price automation rule ID.
    
    If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
    *     @var bool $sellingMode.priceAutomation.rule.id.empty Allows to filter offers by existence of price automation rule ID. Passing 'false' will return offers with any price automation rule, passing 'true' will return offers without any price automation rules.
    
    If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
    *     @var array $publication.status The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
    *     @var string $publication.marketplace Either the base marketplace or an additional marketplace of the offer.
    
    When passing the parameter `publication.marketplace`, searches for offers with the given marketplace as either its base marketplace or one of its additional marketplaces. When the parameter is omitted, searches for offers with all marketplaces.
    
    In addition to searching, passing the parameter also influences the functionality of other query parameter by searching and sorting by data (e.g. price) on the given marketplace.
    *     @var array $sellingMode.format The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
    *     @var array $external.id The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
    *     @var string $delivery.shippingRates.id The ID of shipping rates. Returns offers with given shipping rates ID.
    *     @var bool $delivery.shippingRates.id.empty Allows to filter offers by existence of shipping rates ID.
    *     @var string $sort The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.
    
    If additionally a `publication.marketplace` is provided, sorts by price and `stock.sold` using the data on the given marketplace.
    *     @var int $limit The maximum number of offers returned in the response.
    *     @var int $offset Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000.
    *     @var string $category.id The identifier of the category, where you want to search for offers.
    *     @var bool $product.id.empty Allows to filter offers by existence of product ID.
    *     @var bool $productizationRequired Allows to search for offers from categories where productization is required.
    *     @var bool $b2b.buyableOnlyByBusiness Allows to search for offers buyable only by businesses.
    *     @var string $fundraisingCampaign.id ID of the charity fundraising campaign that benefits from this offer.
    *     @var bool $fundraisingCampaign.id.empty Allows to search for charity or commercial offers.
    *     @var string $afterSalesServices.returnPolicy.id The ID of return policy. Returns offers with given return policy ID.
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/sale/offers';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offer.id', 'name', 'sellingMode.price.amount.gte', 'sellingMode.price.amount.lte', 'sellingMode.priceAutomation.rule.id', 'sellingMode.priceAutomation.rule.id.empty', 'publication.status', 'publication.marketplace', 'sellingMode.format', 'external.id', 'delivery.shippingRates.id', 'delivery.shippingRates.id.empty', 'sort', 'limit', 'offset', 'category.id', 'product.id.empty', 'productizationRequired', 'b2b.buyableOnlyByBusiness', 'fundraisingCampaign.id', 'fundraisingCampaign.id.empty', 'afterSalesServices.returnPolicy.id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 20]);
        $optionsResolver->addAllowedTypes('offer.id', ['array']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('sellingMode.price.amount.gte', ['float']);
        $optionsResolver->addAllowedTypes('sellingMode.price.amount.lte', ['float']);
        $optionsResolver->addAllowedTypes('sellingMode.priceAutomation.rule.id', ['string']);
        $optionsResolver->addAllowedTypes('sellingMode.priceAutomation.rule.id.empty', ['bool']);
        $optionsResolver->addAllowedTypes('publication.status', ['array']);
        $optionsResolver->addAllowedTypes('publication.marketplace', ['string']);
        $optionsResolver->addAllowedTypes('sellingMode.format', ['array']);
        $optionsResolver->addAllowedTypes('external.id', ['array']);
        $optionsResolver->addAllowedTypes('delivery.shippingRates.id', ['string']);
        $optionsResolver->addAllowedTypes('delivery.shippingRates.id.empty', ['bool']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('category.id', ['string']);
        $optionsResolver->addAllowedTypes('product.id.empty', ['bool']);
        $optionsResolver->addAllowedTypes('productizationRequired', ['bool']);
        $optionsResolver->addAllowedTypes('b2b.buyableOnlyByBusiness', ['bool']);
        $optionsResolver->addAllowedTypes('fundraisingCampaign.id', ['string']);
        $optionsResolver->addAllowedTypes('fundraisingCampaign.id.empty', ['bool']);
        $optionsResolver->addAllowedTypes('afterSalesServices.returnPolicy.id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
        }
        if (403 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}