<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateAfterSalesServiceConditionsAttachmentUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * You can attach PDF files to warranties.
    Uploading attachments flow:
     1. Create an attachment object to receive an upload URL (*POST /after-sales-service-conditions/attachments*),
     2. Use the upload URL to submit the PDF file (*PUT /after-sales-service-conditions/attachments/{attachmentId}*),
     3. Create (or update) warranty with attachment (*POST /after-sales-service-conditions/warranties*).
    
     Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody $requestBody 
    */
    public function __construct(\Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody $requestBody)
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
        return '/after-sales-service-conditions/attachments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTForbiddenException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}