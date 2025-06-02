<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetRefundedPayments extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Get a list of refunded payments. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow-platnosci" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-a-list-of-refunded-payment" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $limit Number of returned operations.
     *     @var int $offset Index of the first returned payment operation from all search results.
     *     @var string $id ID of the refund.
     *     @var string $payment.id ID of the payment.
     *     @var string $occurredAt.gte Minimum date and time when the refund occurred provided in ISO 8601 format.
     *     @var string $occurredAt.lte Maximum date and time when the refund occurred provided in ISO 8601 format.
     *     @var array $status Current status of payment refund.
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
        return '/payments/refunds';
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
        $optionsResolver->setDefined(['limit', 'offset', 'id', 'payment.id', 'occurredAt.gte', 'occurredAt.lte', 'status']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 50, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('id', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('status', ['array']);
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
        if (403 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}