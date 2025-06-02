<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ChangePublicationStatusUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Use this resource to modify multiple offers publication at once. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#publikacja-oferty" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-publication" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto $requestBody 
     */
    public function __construct(string $commandId, \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto $requestBody)
    {
        $this->commandId = $commandId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-publication-commands/{commandId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTConflictException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}