<?php

namespace Jlonom\AllegroSDK\Endpoint;

class GetSubmitCommand extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $command-id;
    protected $accept;
    /**
     * Use this resource to get submit status of the Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId An identifier of the command.
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $commandId = '882202c8-15ab-4a83-aeef-29ea505bf0d0', array $accept = [])
    {
        $this->command-id = $commandId;
        $this->accept = $accept;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{command-id}'], [$this->command-id], '/fulfillment/submit-commands/{command-id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandForbiddenException
     * @throws \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnprocessableEntityException
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
            throw new \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\GetSubmitCommandForbiddenException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Jlonom\AllegroSDK\Exception\GetSubmitCommandUnprocessableEntityException($serializer->deserialize($body, 'Jlonom\AllegroSDK\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}