<?php

namespace Jlonom\AllegroSDK\Endpoint;

class NewMessagePOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to write new message to recipient. This resource is rate limited to 1 request per second for a user. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\NewMessage $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\NewMessage $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/messaging/messages';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\NewMessage) {
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
     * @throws \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\NewMessagePOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}