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
class PriceModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PriceModification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PriceModification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'FIXED_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PriceModificationFixedPrice', $format, $context);
        }
        if (array_key_exists('type', $data) and 'INCREASE_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PriceModificationValueChangeIncrease', $format, $context);
        }
        if (array_key_exists('type', $data) and 'DECREASE_PRICE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PriceModificationValueChangeDecrease', $format, $context);
        }
        if (array_key_exists('type', $data) and 'INCREASE_PERCENTAGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeIncrease', $format, $context);
        }
        if (array_key_exists('type', $data) and 'DECREASE_PERCENTAGE' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeDecrease', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PriceModification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('marketplaceId', $data) && $data['marketplaceId'] !== null) {
            $object->setMarketplaceId($data['marketplaceId']);
            unset($data['marketplaceId']);
        }
        elseif (\array_key_exists('marketplaceId', $data) && $data['marketplaceId'] === null) {
            $object->setMarketplaceId(null);
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
        if (null !== $data->getType() and 'FIXED_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'INCREASE_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'DECREASE_PRICE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'INCREASE_PERCENTAGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'DECREASE_PERCENTAGE' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('marketplaceId') && null !== $data->getMarketplaceId()) {
            $dataArray['marketplaceId'] = $data->getMarketplaceId();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\PriceModification::class => false];
    }
}