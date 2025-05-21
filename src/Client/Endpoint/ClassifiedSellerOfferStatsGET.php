<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ClassifiedSellerOfferStatsGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range for logged user. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wszystkich-ogloszen-sprzedawcy" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-seller-s-classified-ads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $date.gte The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.
     *     @var string $date.lte The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
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
        return '/sale/classified-seller-stats';
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
        $optionsResolver->setDefined(['date.gte', 'date.lte']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('date.gte', ['string']);
        $optionsResolver->addAllowedTypes('date.lte', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedSellerOfferStatsGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}