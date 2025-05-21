<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetMessageGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $messageId;
    /**
     * Use this resource to get message with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string $messageId Identifier of message to be returned.
     */
    public function __construct(string $messageId)
    {
        $this->messageId = $messageId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{messageId}'], [$this->messageId], '/messaging/messages/{messageId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetMessageGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetMessageGETNotFoundException
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
            throw new \Jlonom\AllegroSDK\Exception\GetMessageGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetMessageGETNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}