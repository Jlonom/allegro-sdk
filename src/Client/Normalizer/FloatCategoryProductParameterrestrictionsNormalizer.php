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
class FloatCategoryProductParameterrestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions();
        if (\array_key_exists('min', $data) && \is_int($data['min'])) {
            $data['min'] = (double) $data['min'];
        }
        if (\array_key_exists('max', $data) && \is_int($data['max'])) {
            $data['max'] = (double) $data['max'];
        }
        if (\array_key_exists('range', $data) && \is_int($data['range'])) {
            $data['range'] = (bool) $data['range'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('min', $data)) {
            $object->setMin($data['min']);
            unset($data['min']);
        }
        if (\array_key_exists('max', $data)) {
            $object->setMax($data['max']);
            unset($data['max']);
        }
        if (\array_key_exists('range', $data)) {
            $object->setRange($data['range']);
            unset($data['range']);
        }
        if (\array_key_exists('precision', $data)) {
            $object->setPrecision($data['precision']);
            unset($data['precision']);
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
        if ($data->isInitialized('min') && null !== $data->getMin()) {
            $dataArray['min'] = $data->getMin();
        }
        if ($data->isInitialized('max') && null !== $data->getMax()) {
            $dataArray['max'] = $data->getMax();
        }
        if ($data->isInitialized('range') && null !== $data->getRange()) {
            $dataArray['range'] = $data->getRange();
        }
        if ($data->isInitialized('precision') && null !== $data->getPrecision()) {
            $dataArray['precision'] = $data->getPrecision();
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
        return [\Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions::class => false];
    }
}