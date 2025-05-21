<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UploadDisputeAttachmentUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $attachmentId;
    /**
    * Upload a dispute message attachment.
    This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments*
    **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment" target="_blank">EN</a>.
    *
    * @param string $attachmentId Attachment identifier.
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
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/sale/dispute-attachments/{attachmentId}');
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
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTRequestEntityTooLargeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnauthorizedException($response);
        }
        if (413 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadDisputeAttachmentUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}