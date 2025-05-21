<?php

namespace Jlonom\AllegroSDK\Endpoint;

class SetOrderFulfillmentUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use to set seller order status. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#zmiana-statusu-realizacji-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-fulfillment-status-change" target="_blank">EN</a>.
     *
     * @param string $id Order identifier.
     * @param \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment $requestBody 
     * @param array $queryParameters {
     *     @var string $checkoutForm.revision Checkout form revision.
     * }
     */
    public function __construct(string $id, \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment $requestBody, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/order/checkout-forms/{id}/fulfillment');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['checkoutForm.revision']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('checkoutForm.revision', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\SetOrderFulfillmentUsingPUTNotFoundException($response);
        }
        if (409 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}