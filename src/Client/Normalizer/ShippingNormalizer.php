<?php

namespace Jlonom\AllegroSDK\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jlonom\AllegroSDK\Runtime\Normalizer\CheckArray;
use Jlonom\AllegroSDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShippingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Shipping::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Shipping::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('method', $data) and 'OWN_TRANSPORT' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OwnTransportShipping', $format, $context);
        }
        if (array_key_exists('method', $data) and 'COURIER_BY_SELLER' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CourierBySellerShipping', $format, $context);
        }
        if (array_key_exists('method', $data) and 'THIRD_PARTY_DELIVERY' === $data['method']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Shipping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($data['method']);
            unset($data['method']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getMethod() and 'OWN_TRANSPORT' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getMethod() and 'COURIER_BY_SELLER' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getMethod() and 'THIRD_PARTY_DELIVERY' === $data->getMethod()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['method'] = $data->getMethod();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\Shipping::class => false];
    }
}