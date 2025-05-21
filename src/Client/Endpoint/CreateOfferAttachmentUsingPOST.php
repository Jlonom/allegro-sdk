<?php

namespace Jlonom\AllegroSDK\Endpoint;

class CreateOfferAttachmentUsingPOST extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    /**
    * You can attach pdf, jpeg or png files to your offers. We will present them under the offer description in the Additional information section.
    You can attach up to 9 files to one offer – one per each type from the list:
     * Guide (MANUAL). Allowed media types: PDF
     * Special offer terms (SPECIAL_OFFER_RULES). Allowed media types: PDF
     * Competition terms (COMPETITION_RULES). Allowed media types: PDF
     * Book excerpt (BOOK_EXCERPT). Allowed media types: PDF
     * Manual (USER_MANUAL). Allowed media types: PDF
     * Installation manual (INSTALLATION_INSTRUCTIONS). Allowed media types: PDF
     * Game manual (GAME_INSTRUCTIONS). Allowed media types: PDF
     * Energy label (ENERGY_LABEL). Allowed media types: JPEG, JPG, PNG
     * Product information sheet (PRODUCT_INFORMATION_SHEET). Allowed media types: PDF
     * Tire label (TIRE_LABEL). Allowed media types: JPEG, JPG, PNG
    You can attach up to 20 files to one product for:
     * Safety information manual (SAFETY_INFORMATION_MANUAL). Allowed media types: PDF, JPEG, JPG, PNG
    Uploading attachments flow:
     1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),
     2. Use the upload URL to submit the file (*PUT /sale/offer-attachments/{attachmentId}*),
     3. Add attachments to the offer (*PATCH /sale/product-offers/{offerId}*).
    Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
    *
    * @param \Jlonom\AllegroSDK\Model\OfferAttachmentRequest $requestBody 
    */
    public function __construct(\Jlonom\AllegroSDK\Model\OfferAttachmentRequest $requestBody)
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
        return '/sale/offer-attachments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\OfferAttachmentRequest) {
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
     * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException
     * @throws \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException($response);
        }
        if (415 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}