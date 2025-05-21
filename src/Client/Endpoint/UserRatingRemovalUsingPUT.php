<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UserRatingRemovalUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $ratingId;
    /**
     * Use this resource to request removal of received rating. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-wyslac-prosbe-o-usuniecie-oceny" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-send-a-request-to-remove-user-rating" target="_blank">EN</a>.
     *
     * @param string $ratingId ID of the rating.
     * @param \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest $requestBody 
     */
    public function __construct(string $ratingId, \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest $requestBody)
    {
        $this->ratingId = $ratingId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{ratingId}'], [$this->ratingId], '/sale/user-ratings/{ratingId}/removal');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTNotFoundException
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
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UserRatingRemovalUsingPUTNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}