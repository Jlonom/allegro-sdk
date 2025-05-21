<?php

namespace Jlonom\AllegroSDK\Endpoint;

class AddMessageToDisputeUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $disputeId;
    /**
     * Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#add-a-new-message-in-the-discussion" target="_blank">EN</a>.
     *
     * @param string $disputeId Dispute identifier.
     * @param \Jlonom\AllegroSDK\Model\MessageRequest $requestBody 
     */
    public function __construct(string $disputeId, \Jlonom\AllegroSDK\Model\MessageRequest $requestBody)
    {
        $this->disputeId = $disputeId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{disputeId}'], [$this->disputeId], '/sale/disputes/{disputeId}/messages');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\MessageRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTConflictException
     * @throws \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\AddMessageToDisputeUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}