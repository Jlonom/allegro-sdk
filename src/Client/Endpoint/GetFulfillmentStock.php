<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetFulfillmentStock extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Use this resource to get a list of the products belonging to the seller, which are in Allegro Warehouse. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-aktualne-stany-magazynowe" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#get-available-stock" target="_blank">EN</a>.
    *
    * @param array $queryParameters {
    *     @var int $offset The offset of elements in the response. Ignored for text/csv content type.
    *     @var int $limit Maximum number of elements in response. Ignored for text/csv content type.
    *     @var string $phrase Filtering search results by product name.
    *     @var string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type.
    Possible values for the "sort" parameter:
     * -available - sorting by quantity of available products (descending)
     * available - sorting by quantity of available products (ascending)
     * -unfulfillable - sorting by quantity of unfulfillable products (descending)
     * unfulfillable - sorting by quantity of unfulfillable products (ascending)
     * -name - sorting by product’s name (descending)
     * name - sorting by product’s name (ascending)
     * lastWeekSalesAverage - sorting by product last week average sales (ascending)
     * -lastWeekSalesAverage - sorting by product last week average sales (descending)
     * reserve - sorting by reserve.outOfStockIn field (ascending)
     * -reserve - sorting by reserve.outOfStockIn field (descending)
     * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)
     * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)
     * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then PREDICTION, then CHARGED ordered by amountGross ascending.
     * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then PREDICTION, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE.
    *     @var string $productId Filtering search results by fulfillment product identifier. Ignored for text/csv content type.
    *     @var array $productAvailability Filtering search results by availability.
    *     @var string $productStatus Filtering search results by status.
    *     @var string $asnStatus Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don't have related ASN with products on it are returned.
    *     @var int $outOfStockInFrom Filter by products with outOfStockIn greater than or equal.
    *     @var int $outOfStockInTo Filter by products with outOfStockIn less than or equal.
    * }
    * @param array $headerParameters {
    *     @var string $Accept-Language Expected language of product name translation.
    * }
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|text/csv|application/json
    */
    public function __construct(array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/fulfillment/stock';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit', 'phrase', 'sort', 'productId', 'productAvailability', 'productStatus', 'asnStatus', 'outOfStockInFrom', 'outOfStockInTo']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 50, 'sort' => 'name']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('productId', ['string']);
        $optionsResolver->addAllowedTypes('productAvailability', ['array']);
        $optionsResolver->addAllowedTypes('productStatus', ['string']);
        $optionsResolver->addAllowedTypes('asnStatus', ['string']);
        $optionsResolver->addAllowedTypes('outOfStockInFrom', ['int']);
        $optionsResolver->addAllowedTypes('outOfStockInTo', ['int']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Accept-Language' => 'en-US']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetFulfillmentStockForbiddenException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetFulfillmentStockUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}