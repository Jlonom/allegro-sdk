<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOrderEventsUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#dziennik-zdarzen" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#event-log" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $from You can use the event ID to retrieve subsequent chunks of events.
     *     @var array $type Specify array of event types for filtering. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing
     * `BUYER_CANCELLED`: purchase was cancelled by buyer
     * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed
     * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
     *     @var int $limit The maximum number of events returned in the response.
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
        return '/order/events';
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
        $optionsResolver->setDefined(['from', 'type', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100]);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOrderEventsUsingGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}