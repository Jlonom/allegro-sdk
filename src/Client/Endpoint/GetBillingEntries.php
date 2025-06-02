<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetBillingEntries extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * The billing entries are sorted in a descending order (newest first) by date on which they occurred. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $marketplaceId The marketplace ID where operation was made. By default the marketplace ID where the user is registered. **Note:** Business marketplace is not a separate user's billing and defaults back to the main marketplace for given country.
     *     @var string $occurredAt.gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
     *     @var string $occurredAt.lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
     *     @var array $type.id List of billing types by which billing entries are filtered.
     *     @var string $offer.id Offer ID by which billing entries are filtered.
     *     @var string $order.id Order UUID by which billing entries are filtered.
     *     @var int $limit Number of returned operations.
     *     @var int $offset Index of the first returned payment operation from all search results.
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
        return '/billing/billing-entries';
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
        $optionsResolver->setDefined(['marketplaceId', 'occurredAt.gte', 'occurredAt.lte', 'type.id', 'offer.id', 'order.id', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('type.id', ['array']);
        $optionsResolver->addAllowedTypes('offer.id', ['string']);
        $optionsResolver->addAllowedTypes('order.id', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
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
        if (406 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}