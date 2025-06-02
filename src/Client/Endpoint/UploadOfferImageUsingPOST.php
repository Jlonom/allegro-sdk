<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UploadOfferImageUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * Upload image to our servers.
    You can choose from two upload options:
     * \- provide a link and we will download an image for you
     * \- send an image as binary data
    **Important!** Remember to use dedicated domain for upload, i.e.
     * \- https://upload.allegro.pl for Production
     * \- https://upload.allegro.pl.allegrosandbox.pl for Sandbox
    Read more about the rules for photos in an offer's gallery and description: <a href="https://help.allegro.com/pl/sell/a/zasady-dla-zdjec-w-galerii-i-w-opisie-8dvWz3eo4T5?marketplaceId=allegro-pl" target="_blank">PL</a> / <a href="https://help.allegro.com/en/sell/a/rules-for-images-in-the-gallery-and-in-descriptions-8dvWB8Y2PIq" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\OfferImageLinkUploadRequest|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    */
    public function __construct($requestBody)
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
        return '/sale/images';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\OfferImageLinkUploadRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/jpeg']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/png']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/webp']], $this->body];
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
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTForbiddenException($response);
        }
        if (413 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UploadOfferImageUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}