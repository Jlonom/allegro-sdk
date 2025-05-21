<?php

namespace Jlonom\AllegroSDK\Endpoint;

class ModifyPOSUsingPUT extends \Jlonom\AllegroSDK\Runtime\Client\BaseEndpoint implements \Jlonom\AllegroSDK\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Use this resource to modify a point of service. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id Point of service ID. Must match values with 'id' property from the body.
     * @param \Jlonom\AllegroSDK\Model\Pos $requestBody 
     */
    public function __construct(string $id, \Jlonom\AllegroSDK\Model\Pos $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Jlonom\AllegroSDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/points-of-service/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jlonom\AllegroSDK\Model\Pos) {
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
     * @throws \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTUnauthorizedException
     * @throws \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTForbiddenException
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
        }
        if (401 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Jlonom\AllegroSDK\Exception\ModifyPOSUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
        }
        if (409 === $status) {
        }
        if (422 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}