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
class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints();
        if (\array_key_exists('allowed', $data) && \is_int($data['allowed'])) {
            $data['allowed'] = (bool) $data['allowed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowed', $data)) {
            $object->setAllowed($data['allowed']);
            unset($data['allowed']);
        }
        if (\array_key_exists('maxQuantityPerPackage', $data)) {
            $object->setMaxQuantityPerPackage($this->denormalizer->denormalize($data['maxQuantityPerPackage'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage::class, 'json', $context));
            unset($data['maxQuantityPerPackage']);
        }
        if (\array_key_exists('maxPackageWeight', $data)) {
            $object->setMaxPackageWeight($this->denormalizer->denormalize($data['maxPackageWeight'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class, 'json', $context));
            unset($data['maxPackageWeight']);
        }
        if (\array_key_exists('firstItemRate', $data)) {
            $object->setFirstItemRate($this->denormalizer->denormalize($data['firstItemRate'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate::class, 'json', $context));
            unset($data['firstItemRate']);
        }
        if (\array_key_exists('nextItemRate', $data)) {
            $object->setNextItemRate($this->denormalizer->denormalize($data['nextItemRate'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate::class, 'json', $context));
            unset($data['nextItemRate']);
        }
        if (\array_key_exists('shippingTime', $data)) {
            $object->setShippingTime($this->denormalizer->denormalize($data['shippingTime'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class, 'json', $context));
            unset($data['shippingTime']);
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
        if ($data->isInitialized('allowed') && null !== $data->getAllowed()) {
            $dataArray['allowed'] = $data->getAllowed();
        }
        if ($data->isInitialized('maxQuantityPerPackage') && null !== $data->getMaxQuantityPerPackage()) {
            $dataArray['maxQuantityPerPackage'] = $this->normalizer->normalize($data->getMaxQuantityPerPackage(), 'json', $context);
        }
        if ($data->isInitialized('maxPackageWeight') && null !== $data->getMaxPackageWeight()) {
            $dataArray['maxPackageWeight'] = $this->normalizer->normalize($data->getMaxPackageWeight(), 'json', $context);
        }
        if ($data->isInitialized('firstItemRate') && null !== $data->getFirstItemRate()) {
            $dataArray['firstItemRate'] = $this->normalizer->normalize($data->getFirstItemRate(), 'json', $context);
        }
        if ($data->isInitialized('nextItemRate') && null !== $data->getNextItemRate()) {
            $dataArray['nextItemRate'] = $this->normalizer->normalize($data->getNextItemRate(), 'json', $context);
        }
        if ($data->isInitialized('shippingTime') && null !== $data->getShippingTime()) {
            $dataArray['shippingTime'] = $this->normalizer->normalize($data->getShippingTime(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class => false];
    }
}