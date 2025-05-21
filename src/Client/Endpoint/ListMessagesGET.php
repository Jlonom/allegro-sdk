<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ListMessagesGET extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $threadId;
    /**
     * Use this resource to list messages in thread with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-wiadomosci-dla-wybranego-watku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-the-messages-for-the-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId Identifier of thread to get messages from.
     * @param array $queryParameters {
     *     @var int $limit The maximum number of messages returned in the response.
     *     @var int $offset Index of the first returned message from all results.
     *     @var string $before Message creation date before filter parameter (exclusive) - cannot be used with offset.
     *     @var string $after Message creation date after filter parameter (exclusive).
     * }
     */
    public function __construct(string $threadId, array $queryParameters = [])
    {
        $this->threadId = $threadId;
        $this->queryParameters = $queryParameters;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{threadId}'], [$this->threadId], '/messaging/threads/{threadId}/messages');
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
        $optionsResolver->setDefined(['limit', 'offset', 'before', 'after']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 20, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('before', ['string']);
        $optionsResolver->addAllowedTypes('after', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\ListMessagesGETUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\ListMessagesGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ListMessagesGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ListMessagesGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ListMessagesGETUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}