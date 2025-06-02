<?php

namespace Jlonom\AllegroSDK\Endpoint;

class DeleteAdditionalServiceGroupTranslation extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $groupId;
    protected $language;
    /**
     * Use this resource to delete the translation for specified additional service group and language. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId Additional service group ID.
     * @param string $language IETF Language tag.
     */
    public function __construct(string $groupId, string $language)
    {
        $this->groupId = $groupId;
        $this->language = $language;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{groupId}', '{language}'], [$this->groupId, $this->language], '/sale/offer-additional-services/groups/{groupId}/translations/{language}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\DeleteAdditionalServiceGroupTranslationNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}