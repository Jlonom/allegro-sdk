<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ClassifiedOffersStatsGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wybranych-ogloszen" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-selected-classified-ads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $offer.id List of offer Ids, maximum 50 values.
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
        return '/sale/classified-offers-stats';
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
        $optionsResolver->setDefined(['offer.id', 'date.gte', 'date.lte']);
        $optionsResolver->setRequired(['offer.id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('offer.id', ['array']);
        $optionsResolver->addAllowedTypes('date.gte', ['string']);
        $optionsResolver->addAllowedTypes('date.lte', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ClassifiedOffersStatsGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}