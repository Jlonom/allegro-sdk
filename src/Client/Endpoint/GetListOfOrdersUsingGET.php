<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetListOfOrdersUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to get an order list. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#lista-zamowien" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-list" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned checkout-form from all search results.
     *     @var int $limit Maximum number of checkout-forms in response.
     *     @var string $status Specify status value that checkout-forms must have to be included in the output. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in.
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
     * `CANCELLED`: purchase cancelled by buyer.
     *     @var string $fulfillment.status Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:
     * `NEW`
     * `PROCESSING`
     * `READY_FOR_SHIPMENT`
     * `READY_FOR_PICKUP`
     * `SENT`
     * `PICKED_UP`
     * `CANCELLED`
     * `SUSPENDED`
     * `RETURNED`.
     *     @var string $fulfillment.shipmentSummary.lineItemsSent Specify filter for line items sending status. Allowed values are:
     * `NONE`: none of line items have tracking number specified
     * `SOME`: some of line items have tracking number specified
     * `ALL`: all of line items have tracking number specified.
     *     @var string $lineItems.boughtAt.lte Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
     *     @var string $lineItems.boughtAt.gte Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
     *     @var string $payment.id Find checkout-forms having specified payment id.
     *     @var string $surcharges.id Find checkout-forms having specified surcharge id.
     *     @var string $delivery.method.id Find checkout-forms having specified delivery method id.
     *     @var string $buyer.login Find checkout-forms having specified buyer login.
     *     @var string $marketplace.id Find checkout-forms of orders purchased on specified marketplace.
     *     @var string $updatedAt.lte Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
     *     @var string $updatedAt.gte Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
     *     @var string $sort The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.
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
        return '/order/checkout-forms';
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
        $optionsResolver->setDefined(['offset', 'limit', 'status', 'fulfillment.status', 'fulfillment.shipmentSummary.lineItemsSent', 'lineItems.boughtAt.lte', 'lineItems.boughtAt.gte', 'payment.id', 'surcharges.id', 'delivery.method.id', 'buyer.login', 'marketplace.id', 'updatedAt.lte', 'updatedAt.gte', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 100]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('fulfillment.status', ['string']);
        $optionsResolver->addAllowedTypes('fulfillment.shipmentSummary.lineItemsSent', ['string']);
        $optionsResolver->addAllowedTypes('lineItems.boughtAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('lineItems.boughtAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('surcharges.id', ['string']);
        $optionsResolver->addAllowedTypes('delivery.method.id', ['string']);
        $optionsResolver->addAllowedTypes('buyer.login', ['string']);
        $optionsResolver->addAllowedTypes('marketplace.id', ['string']);
        $optionsResolver->addAllowedTypes('updatedAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('updatedAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnauthorizedException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetListOfOrdersUsingGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}