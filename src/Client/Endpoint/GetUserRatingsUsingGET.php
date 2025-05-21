<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetUserRatingsUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to receive your sales ratings sorted by last change date, starting from the latest. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *     @var string $recommended Filter by recommended.
     *     @var string $lastChangedAt.gte Last change (creation or latest edition) date time in ISO 8601 format. The lower bound of date time range from which ratings will be fetched.
     *     @var string $lastChangedAt.lte Last change (creation or latest edition) date time in ISO 8601 format. The upper bound of date time range from which ratings will be fetched.
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
        return '/sale/user-ratings';
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
        $optionsResolver->setDefined(['recommended', 'lastChangedAt.gte', 'lastChangedAt.lte', 'offset', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 20]);
        $optionsResolver->addAllowedTypes('recommended', ['string']);
        $optionsResolver->addAllowedTypes('lastChangedAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('lastChangedAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingsUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}