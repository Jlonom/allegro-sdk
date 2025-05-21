<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAllegroPickupDropOffPointsGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Get a list of Allegro pickup drop off points. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-punktow-allegro" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-list-of-allegro-pickup-drop-off-points" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $carriers List of carrier ids to filter the drop off/pick up points to only the ones where any of the listed carriers operate. In case of an empty list, all points are returned.
     * }
     * @param array $headerParameters {
     *     @var string $If-Modified-Since Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - `Last-Modified`.
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/order/carriers/ALLEGRO/points';
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
        $optionsResolver->setDefined(['carriers']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('carriers', ['array']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['If-Modified-Since']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('If-Modified-Since', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (304 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAllegroPickupDropOffPointsGETUnauthorizedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user', 'bearer-token-for-application'];
    }
}