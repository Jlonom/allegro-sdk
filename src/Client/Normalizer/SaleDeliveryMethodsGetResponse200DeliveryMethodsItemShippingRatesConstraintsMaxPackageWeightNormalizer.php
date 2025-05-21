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
class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight();
        if (\array_key_exists('supported', $data) && \is_int($data['supported'])) {
            $data['supported'] = (bool) $data['supported'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('supported', $data)) {
            $object->setSupported($data['supported']);
            unset($data['supported']);
        }
        if (\array_key_exists('min', $data) && $data['min'] !== null) {
            $object->setMin($data['min']);
            unset($data['min']);
        }
        elseif (\array_key_exists('min', $data) && $data['min'] === null) {
            $object->setMin(null);
        }
        if (\array_key_exists('max', $data) && $data['max'] !== null) {
            $object->setMax($data['max']);
            unset($data['max']);
        }
        elseif (\array_key_exists('max', $data) && $data['max'] === null) {
            $object->setMax(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
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
        if ($data->isInitialized('supported') && null !== $data->getSupported()) {
            $dataArray['supported'] = $data->getSupported();
        }
        if ($data->isInitialized('min') && null !== $data->getMin()) {
            $dataArray['min'] = $data->getMin();
        }
        if ($data->isInitialized('max') && null !== $data->getMax()) {
            $dataArray['max'] = $data->getMax();
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
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
        return [\Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class => false];
    }
}