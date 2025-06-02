<?php

namespace Jlonom\AllegroSDK\Endpoint;

class NewAttachmentDeclarationPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
     * Use this resource to add attachment declaration before uploading. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#deklaracja-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-declaration" target="_blank">EN</a>.
     *
     * @param \Jlonom\AllegroSDK\Model\NewAttachmentDeclaration $requestBody 
     */
    public function __construct(\Jlonom\AllegroSDK\Model\NewAttachmentDeclaration $requestBody)
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
        return '/messaging/message-attachments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\NewAttachmentDeclaration) {
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
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnauthorizedException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\NewAttachmentDeclarationPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}