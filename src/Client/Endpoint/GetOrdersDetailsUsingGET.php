<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOrdersDetailsUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to get an order details. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#szczegoly-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-details" target="_blank">EN</a>.
     *
     * @param string $id Checkout form identifier.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/order/checkout-forms/{id}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotFoundException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOrdersDetailsUsingGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}