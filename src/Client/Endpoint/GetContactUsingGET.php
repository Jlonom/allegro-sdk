<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetContactUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to get contact details. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegoly-danego-kontaktu" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-contact-details" target="_blank">EN</a>.
     *
     * @param string $id Contact identifier.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sale/offer-contacts/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetContactUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetContactUsingGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetContactUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetContactUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetContactUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}