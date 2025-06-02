<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateAdditionalServiceGroupTranslation extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $groupId;
    protected $language;
    /**
     * Use this resource to create/update translation for additional service group and specified language. It is allowed to provide an incomplete list of services that belong to the group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional Service Group ID.
     * @param string $language IETF Language tag.
     * @param \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest $requestBody 
     */
    public function __construct(string $groupId, string $language, \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest $requestBody)
    {
        $this->groupId = $groupId;
        $this->language = $language;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{groupId}', '{language}'], [$this->groupId, $this->language], '/sale/offer-additional-services/groups/{groupId}/translations/{language}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdditionalServiceGroupTranslationNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}