<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetSaleProducts extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-znalezc-produkt" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-find-a-product" target="_blank">EN</a>. This resource is limited with Leaky Bucket mechanism, read more <a href="../../tutorials/informacje-podstawowe-b21569boAI1#ograniczenie-liczby-zapytan-limity" target="_blank">PL</a> / <a href="../../tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var string $ean The EAN values can include EAN, ISBN, and UPC identifier types. Parameter is depracated and will be removed in the future. Please use combination of phrase and mode (`GTIN`) parameters instead.
    *     @var string $phrase Search phrase.
    *     @var string $mode Search mode. If not specified, we are searching by GTIN, MPN, product's name, parameters, etc.
    - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
    - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
    *     @var string $language Language indicates the language for searching products. Allows to specify the language of the given phrase.
    *     @var string $category.id The category identifier to filter results. This can only be used when searching by phrase.
    *     @var string $Dynamic filters You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     ````
     {
       "id": "127448",
       "name": "Kolor",
       "type": "SINGLE",
       "values": [
         {
           "name": "biały",
           "value": "127448_2"
         },
         {
           "name": "czarny",
           "value": "127448_1"
         }
       ]
     }
     ````
    You can use 'Kolor' filter to query results, i.e.:
     * `127448=127448_2` for "biały"
     * `127448=127448_1` for "czarny".
    *     @var string $page.id A "cursor" to the next set of results.
    *     @var string $searchFeatures Enables additional search options: - *SIMILAR_CATEGORIES* - searching in the indicated category (category.id) and in 'similar categories' (works only if category.id is a leaf category).
    *     @var bool $includeDrafts Include products in draft state.
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
        return '/sale/products';
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
        $optionsResolver->setDefined(['ean', 'phrase', 'mode', 'language', 'category.id', 'Dynamic filters', 'page.id', 'searchFeatures', 'includeDrafts']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ean', ['string']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('mode', ['string']);
        $optionsResolver->addAllowedTypes('language', ['string']);
        $optionsResolver->addAllowedTypes('category.id', ['string']);
        $optionsResolver->addAllowedTypes('Dynamic filters', ['string']);
        $optionsResolver->addAllowedTypes('page.id', ['string']);
        $optionsResolver->addAllowedTypes('searchFeatures', ['string']);
        $optionsResolver->addAllowedTypes('includeDrafts', ['bool']);
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
        if (401 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}