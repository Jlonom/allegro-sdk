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
class TurnoverDiscountThresholdDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minimumTurnover', $data)) {
            $object->setMinimumTurnover($this->denormalizer->denormalize($data['minimumTurnover'], \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoMinimumTurnover::class, 'json', $context));
            unset($data['minimumTurnover']);
        }
        if (\array_key_exists('discount', $data)) {
            $object->setDiscount($this->denormalizer->denormalize($data['discount'], \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoDiscount::class, 'json', $context));
            unset($data['discount']);
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
        if ($data->isInitialized('minimumTurnover') && null !== $data->getMinimumTurnover()) {
            $dataArray['minimumTurnover'] = $this->normalizer->normalize($data->getMinimumTurnover(), 'json', $context);
        }
        if ($data->isInitialized('discount') && null !== $data->getDiscount()) {
            $dataArray['discount'] = $this->normalizer->normalize($data->getDiscount(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class => false];
    }
}