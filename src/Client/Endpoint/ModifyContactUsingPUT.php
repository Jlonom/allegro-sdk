<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ModifyContactUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to modify contact details. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-zmienic-dane-kontaktu" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-change-contact-data" target="_blank">EN</a>.
     *
     * @param string $id Contact identifier.
     * @param \Jlonom\AllegroSDK\Model\ContactRequest $requestBody 
     */
    public function __construct(string $id, \Jlonom\AllegroSDK\Model\ContactRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sale/offer-contacts/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\ContactRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyContactUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}