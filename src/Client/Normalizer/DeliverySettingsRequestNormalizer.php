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
class DeliverySettingsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\DeliverySettingsRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\DeliverySettingsRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\DeliverySettingsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\DeliverySettingsRequestMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        }
        if (\array_key_exists('freeDelivery', $data)) {
            $object->setFreeDelivery($this->denormalizer->denormalize($data['freeDelivery'], \Jlonom\AllegroSDK\Model\DeliverySettingsRequestFreeDelivery::class, 'json', $context));
            unset($data['freeDelivery']);
        }
        if (\array_key_exists('abroadFreeDelivery', $data)) {
            $object->setAbroadFreeDelivery($this->denormalizer->denormalize($data['abroadFreeDelivery'], \Jlonom\AllegroSDK\Model\DeliverySettingsRequestAbroadFreeDelivery::class, 'json', $context));
            unset($data['abroadFreeDelivery']);
        }
        if (\array_key_exists('joinPolicy', $data)) {
            $object->setJoinPolicy($this->denormalizer->denormalize($data['joinPolicy'], \Jlonom\AllegroSDK\Model\DeliverySettingsRequestJoinPolicy::class, 'json', $context));
            unset($data['joinPolicy']);
        }
        if (\array_key_exists('customCost', $data)) {
            $object->setCustomCost($this->denormalizer->denormalize($data['customCost'], \Jlonom\AllegroSDK\Model\DeliverySettingsRequestCustomCost::class, 'json', $context));
            unset($data['customCost']);
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
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        }
        if ($data->isInitialized('freeDelivery') && null !== $data->getFreeDelivery()) {
            $dataArray['freeDelivery'] = $this->normalizer->normalize($data->getFreeDelivery(), 'json', $context);
        }
        if ($data->isInitialized('abroadFreeDelivery') && null !== $data->getAbroadFreeDelivery()) {
            $dataArray['abroadFreeDelivery'] = $this->normalizer->normalize($data->getAbroadFreeDelivery(), 'json', $context);
        }
        $dataArray['joinPolicy'] = $this->normalizer->normalize($data->getJoinPolicy(), 'json', $context);
        $dataArray['customCost'] = $this->normalizer->normalize($data->getCustomCost(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\DeliverySettingsRequest::class => false];
    }
}