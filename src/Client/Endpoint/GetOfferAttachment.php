<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetOfferAttachment extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $attachmentId;
    /**
     * Get details of an offer attachments, including download link, by attachment identifier ("attachmentId"). The attachment id can be retrieved by querying a particular offer, for example by using <a href="#operation/getProductOffer">`GET /sale/product-offers/{offerId}`</a>.
     *
     * @param string $attachmentId The ID of the attachment.
     */
    public function __construct(string $attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/sale/offer-attachments/{attachmentId}');
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
     * @throws \Jlonom\AllegroSDK\Exception\GetOfferAttachmentForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetOfferAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOfferAttachmentForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetOfferAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}