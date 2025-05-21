<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetCompatibleProducts extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Resource allows to fetch compatible products of given type. Read more: <a href="../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $type Type of compatible products. You can find available types in the response for the GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
     *     @var string $group.id Group identifier from `/sale/compatible-products/groups` resource. Parameter is required when parameter `tecdoc.kTypNr` or `tecdoc.nTypNr` or `phrase` is not specified.
     *     @var string $tecdoc.kTypNr Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *     @var string $tecdoc.nTypNr Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *     @var string $phrase Query for compatible products. When used, parameters: `group.id`, `limit`, `offset` and header `If-Modified-Since` are ignored.
     *     @var int $limit The limit of returned items. If `phrase` parameter is present, parameter is ignored and maximum value is set to `200`.
     *     @var int $offset The offset of returned items. If `phrase` parameter is present, parameter is ignored.
     * }
     * @param array $headerParameters {
     *     @var string $If-Modified-Since Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if `phrase` parameter is used.
     * }
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/sale/compatible-products';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['type', 'group.id', 'tecdoc.kTypNr', 'tecdoc.nTypNr', 'phrase', 'limit', 'offset']);
        $optionsResolver->setRequired(['type']);
        $optionsResolver->setDefaults(['limit' => 200, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('group.id', ['string']);
        $optionsResolver->addAllowedTypes('tecdoc.kTypNr', ['string']);
        $optionsResolver->addAllowedTypes('tecdoc.nTypNr', ['string']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
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
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnprocessableEntityException
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
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetCompatibleProductsBadRequestException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetCompatibleProductsUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}