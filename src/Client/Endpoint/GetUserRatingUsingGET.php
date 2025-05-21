<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetUserRatingUsingGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $ratingId;
    /**
     * Use this resource to receive your sales rating by given rating id. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param string $ratingId The ID of the rating.
     */
    public function __construct(string $ratingId)
    {
        $this->ratingId = $ratingId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{ratingId}'], [$this->ratingId], '/sale/user-ratings/{ratingId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetUserRatingUsingGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}