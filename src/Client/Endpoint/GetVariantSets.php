<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetVariantSets extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to get created variant sets. The returned variant sets are ordered by name. Read more: <a href="../../tutorials/jak-utworzyc-oferte-wielowariantowa-oA6ZYBg5XFo#pobierz-liste-ofert-wielowariantowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-create-a-multi-variant-offer-nn9DOL3nXs2#retrieve-a-multi-variant-offer" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var int $offset Index of first returned variant set.
     *     @var int $limit Maximum number of returned variant sets.
     *     @var string $query Filter variant sets by name or offer id.
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
        return '/sale/offer-variants';
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
        $optionsResolver->setDefined(['offset', 'limit', 'query']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 10]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('query', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetVariantSetsForbiddenException
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
            throw new \Jlonom\AllegroSDK\Exception\GetVariantSetsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetVariantSetsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}