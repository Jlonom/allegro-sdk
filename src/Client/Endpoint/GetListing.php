<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetListing extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * <a href="../../listing/" target="_blank">Access for verified applications only</a>. Use this resource to get a list of offers based on the provided query parameters. At least one of: phrase, seller.id or category.id is required. Additional available parameters vary depending on category.id. The parameters are defined in the filters entity.
    Changing the marketplace, country of delivery, currency or language may impact the availability of offers and filters. Note that requests for closed offers may be limited.
    
    Read more: <a href="../../tutorials/jak-wyszukiwac-przegladac-oferty-ZM9YAKAwgfk" target="_blank">PL</a> / <a href="../../tutorials/how-to-search-and-browse-offers-XxWm2ykMYHl" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $category.id The identifier of the category, where you want to search for offers.
    *     @var string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the `searchMode` parameter.
    *     @var string $seller.id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.login is given.
    *     @var string $seller.login The login of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.id is given.
    *     @var string $marketplaceId Id of a marketplace where offers are visible.
    *Acceptable values* : `allegro-pl`, `allegro-cz`, `allegro-sk`, `allegro-hu`.
    *     @var string $shipping.country Expected language of messages.
    *     @var string $currency Currency of the offer prices.
    *Default value* : depends on marketplace, for allegro-pl: `PLN`, for allegro-cz: `CZK`, for allegro-sk: `EUR`.
    Check endpoint GET /marketplaces for acceptable currency values.
    *     @var string $searchMode Defines where the given phrase should be searched in. Allowed values:
    
     - *REGULAR* - searching for a phrase in the title,
     - *CLOSED* - searching for a phrase in the title of closed offers. Available only for `allegro-pl` marketplace.
    *     @var int $offset Index of the first returned offer from all search results. Max offset is `600 - <limit>`.
    *     @var int $limit The maximum number of offers in a response.
    *     @var string $sort Search results sorting order. `+` or no prefix in the value means ascending order. `-` prefix means descending order.
    *     @var string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use `-` prefix to exclude an entity.
    Example:
    `include=-all&include=filters&include=sort` - returns only filters and sort entities.
    *     @var bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:
    
     - *true* - related (not exact) results are returned,
     - *false* - empty results are returned.
    *     @var string $Dynamic filters You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     ````
       {
         "id": "parameter.11323",
         "type": "MULTI",
         "name": "Stan",
         "values": [{
             "value": "11323_1",
             "name": "nowe",
             "count": 21,
             "selected": false
           },
           {
             "value": "11323_2",
             "name": "używane",
             "count": 157,
             "selected": false
           },
           {
             "value": "11323_238066",
             "name": "po zwrocie",
             "count": 1,
             "selected": false
           }
         ]
       }
     ````
    You can use 'Stan' filter to query results, i.e.:
     * `parameter.11323=11323_1` for "nowe"
     * `parameter.11323=11323_2` for "używane"
     * `parameter.11323=11323_238066` for "po zwrocie".
    * }
    * @param array $headerParameters {
    *     @var string $Accept-Language Limits offers to the only translated to specified language. Also expected language of messages.
    *Default value* : depends on marketplace, for allegro-pl: `pl-PL`, for allegro-cz: `cs-CZ`, for allegro-sk: `sk-SK`.
    Check endpoint GET /marketplaces for acceptable language values.
    * }
    */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/offers/listing';
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
        $optionsResolver->setDefined(['category.id', 'phrase', 'seller.id', 'seller.login', 'marketplaceId', 'shipping.country', 'currency', 'searchMode', 'offset', 'limit', 'sort', 'include', 'fallback', 'Dynamic filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['marketplaceId' => 'allegro-pl', 'searchMode' => 'REGULAR', 'offset' => 0, 'limit' => 60, 'sort' => 'relevance', 'fallback' => true]);
        $optionsResolver->addAllowedTypes('category.id', ['string']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('seller.id', ['string']);
        $optionsResolver->addAllowedTypes('seller.login', ['string']);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('shipping.country', ['string']);
        $optionsResolver->addAllowedTypes('currency', ['string']);
        $optionsResolver->addAllowedTypes('searchMode', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('fallback', ['bool']);
        $optionsResolver->addAllowedTypes('Dynamic filters', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
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
        if (404 === $status) {
        }
        if (406 === $status) {
        }
        if (422 === $status) {
        }
        if (429 === $status) {
        }
        if (500 === $status) {
        }
        if (502 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user', 'bearer-token-for-application'];
    }
}