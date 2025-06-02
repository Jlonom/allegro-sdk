<?php

namespace Jlonom\AllegroSDK\Endpoint;

class UpdateAdvanceShipNotice extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
    * Use this resource to update an Advance Ship Notice. Any content property update will clear labels property. Use Create labels command to create new labels for provided content.
    If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo" target="_blank">PL</a> / <a href="../../one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice" target="_blank">EN</a>.
    *
    * @param string $id An identifier of Advance Ship Notice.
    * @param \Jlonom\AllegroSDK\Model\AdvanceShipNotice $requestBody 
    * @param array $headerParameters {
    *     @var string $if-match A current version of Advance Ship Notice (e.g. from etag header obtained via get).
    * }
    * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
    */
    public function __construct(string $id, \Jlonom\AllegroSDK\Model\AdvanceShipNotice $requestBody, array $headerParameters = [], array $accept = [])
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
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\AdvanceShipNotice) {
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
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeBadRequestException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticePreconditionFailedException
     * @throws \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeForbiddenException($response);
        }
        if (412 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticePreconditionFailedException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\UpdateAdvanceShipNoticeUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}