<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetPublicationTasksUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#informacje-o-publikacji" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#information-about-publication" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param array $queryParameters {
     *     @var int $limit The limit of elements in the response.
     *     @var int $offset The offset of elements in the response.
     * }
     */
    public function __construct(string $commandId, array $queryParameters = [])
    {
        $this->commandId = $commandId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-publication-commands/{commandId}/tasks');
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
        $optionsResolver->setDefined(['limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetPublicationTasksUsingGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}