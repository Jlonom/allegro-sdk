<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ModificationCommandUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $commandId;
    /**
     * Use this resource to modify multiple offers at once. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId Command identifier.
     * @param \Jlonom\AllegroSDK\Model\OfferChangeCommand $requestBody 
     */
    public function __construct(string $commandId, \Jlonom\AllegroSDK\Model\OfferChangeCommand $requestBody)
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
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-modification-commands/{commandId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\OfferChangeCommand) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTConflictException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModificationCommandUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}