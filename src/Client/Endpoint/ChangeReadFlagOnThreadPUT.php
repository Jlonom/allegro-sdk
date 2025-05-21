<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ChangeReadFlagOnThreadPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $threadId;
    /**
     * Use this resource to mark thread with provided identifier as read. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to be marked.
     * @param \Jlonom\AllegroSDK\Model\ThreadReadFlag $requestBody 
     */
    public function __construct(string $threadId, \Jlonom\AllegroSDK\Model\ThreadReadFlag $requestBody)
    {
        $this->threadId = $threadId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{threadId}'], [$this->threadId], '/messaging/threads/{threadId}/read');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\ThreadReadFlag) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ChangeReadFlagOnThreadPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}