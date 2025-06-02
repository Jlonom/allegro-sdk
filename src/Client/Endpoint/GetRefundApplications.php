<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetRefundApplications extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to get a list of refund applications based on the provided query parameters. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-utworzonych-wnioskow-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-list-of-sale-commission-refunds" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $lineItem.offer.id ID of the offer associated with the refund application.
     *     @var string $buyer.login Login of the buyer that made the purchase associated with the refund application.
     *     @var string $status Status of the refund application.
     *     @var int $limit Maximum number of returned refund applications in response.
     *     @var int $offset Index of the first returned refund application from all search results.
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
        return '/order/refund-claims';
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
        $optionsResolver->setDefined(['lineItem.offer.id', 'buyer.login', 'status', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 25, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('lineItem.offer.id', ['string']);
        $optionsResolver->addAllowedTypes('buyer.login', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsNotAcceptableException
     * @throws \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationsForbiddenException($response);
        }
        if (406 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationsNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetRefundApplicationsUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}