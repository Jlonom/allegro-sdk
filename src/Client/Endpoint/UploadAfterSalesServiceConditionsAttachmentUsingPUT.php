<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UploadAfterSalesServiceConditionsAttachmentUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $attachmentId;
    /**
    * Upload an after sale services attachment.
    This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
    **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
    *
    * @param string $attachmentId The ID of the attachment.
    * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    */
    public function __construct(string $attachmentId, $requestBody = null)
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
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/after-sales-service-conditions/attachments/{attachmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException($response);
        }
        if (413 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}