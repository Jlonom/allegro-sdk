<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOffersUnfilledParametersUsingGET1 extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-nieuzupelnione-parametry-w-ofertach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-unfilled-parameters-in-offers" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var array $offer.id List of offer ids. If empty all offers with unfilled parameters will be returned.
     *     @var string $parameterType Filter by parameter type.
     *     @var int $offset The offset of elements in the response.
     *     @var int $limit The limit of elements in the response.
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
        return '/sale/offers/unfilled-parameters';
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
        $optionsResolver->setDefined(['offer.id', 'parameterType', 'offset', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 100]);
        $optionsResolver->addAllowedTypes('offer.id', ['array']);
        $optionsResolver->addAllowedTypes('parameterType', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1BadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1UnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1ForbiddenException
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
            throw new \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1BadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOffersUnfilledParametersUsingGET1ForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}