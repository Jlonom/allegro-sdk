<?php

namespace Jlonom\AllegroSDK\Endpoint;

class SubmitCommand extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $command-id;
    protected $accept;
    /**
     * Use this resource to submit the Advance Ship Notice. After this operation, updates of the Advance Ship Notice are limited to selected properties only. See <a href="../../documentation#operation/updateSubmittedAdvanceShipNotice">PUT /fulfillment/advance-ship-notices/{id}/submitted</a>. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId The identifier of the command.
     * @param \Jlonom\AllegroSDK\Model\SubmitCommand $requestBody 
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $commandId = '725432a9-ae9e-43de-b8c5-7430606a81a4', \Jlonom\AllegroSDK\Model\SubmitCommand $requestBody, array $accept = [])
    {
        $this->command-id = $commandId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{command-id}'], [$this->command-id], '/fulfillment/submit-commands/{command-id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\SubmitCommand) {
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
    /**
     * {@inheritdoc}
     *
     * @throws \Jlonom\AllegroSDK\Exception\SubmitCommandUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\SubmitCommandUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\SubmitCommandUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\SubmitCommandUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}