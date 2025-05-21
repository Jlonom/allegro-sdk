<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetAdditionalServiceGroupTranslations extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $groupId;
    /**
     * Use this resource to get translations for additional service group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional Service Group ID.
     * @param array $queryParameters {
     *     @var string $language IETF language tag. When provided, the response will contain translations in only that language (if exists).
     * }
     */
    public function __construct(string $groupId, array $queryParameters = [])
    {
        $this->groupId = $groupId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{groupId}'], [$this->groupId], '/sale/offer-additional-services/groups/{groupId}/translations');
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
        $optionsResolver->setDefined(['language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('language', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetAdditionalServiceGroupTranslationsNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}