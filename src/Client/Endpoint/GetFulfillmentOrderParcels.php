<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetFulfillmentOrderParcels extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $orderId;
    /**
     * Use this resource to get list of parcels and included items for a given order. Items include detailed information such as expiration dates and serial numbers. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-obslugiwac-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-handle-orders" target="_blank">EN</a>.
     *
     * @param string $orderId The Allegro's platform order identifier.
     */
    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{orderId}'], [$this->orderId], '/fulfillment/orders/{orderId}/parcels');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsNotFoundException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetFulfillmentOrderParcelsUnauthorizedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}