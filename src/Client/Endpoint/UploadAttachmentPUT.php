<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UploadAttachmentPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $attachmentId;
    /**
     * Use this resource to upload attachment using identifier that was declared. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-an-attachment" target="_blank">EN</a>.
     *
     * @param string $attachmentId The identifier of attachment that will be uploaded.
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     */
    public function __construct(string $attachmentId, $requestBody)
    {
        $this->attachmentId = $attachmentId;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/messaging/message-attachments/{attachmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/png']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/gif']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/bmp']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/tiff']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/jpeg']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/pdf']], $this->body];
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
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTRequestEntityTooLargeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnsupportedMediaTypeException
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
            throw new \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTNotFoundException($response);
        }
        if (413 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAttachmentPUTUnsupportedMediaTypeException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}