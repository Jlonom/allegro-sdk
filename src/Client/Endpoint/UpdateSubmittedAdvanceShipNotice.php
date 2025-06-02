<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateSubmittedAdvanceShipNotice extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
    * Use this resource to update already submitted Advance Ship Notice. Update is allowed only when Advance Ship Notice is in "IN_TRANSIT" status. Modifications are limited to:
     - changing items quantity
     - removing items
     - changing handling unit amount
     - changing shipping courier id, name, tracking numbers or vehicle licence plate or third party delivery details (depending on the selected shipping method in the submitted advance ship notice)
    Handling unit's amount property update clears labels property. Use Create labels command to create new labels for provided content. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#edytuj-zakonczone-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#edit-advance-ship-notice" target="_blank">EN</a>.
    *
    * @param string $id An identifier of Advance Ship Notice.
    * @param \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $if-match A current version of Advance Ship Notice (e.g. from etag header obtained via get).
    * }
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    */
    public function __construct(string $id, \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}/submitted');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/json']];
        }
        return $this->accept;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['if-match']);
        $optionsResolver->setRequired(['if-match']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('if-match', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException($response);
        }
        if (412 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}