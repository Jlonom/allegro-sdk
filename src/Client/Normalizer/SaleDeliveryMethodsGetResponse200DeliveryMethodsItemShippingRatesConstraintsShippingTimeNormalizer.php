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
class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime();
        if (\array_key_exists('customizable', $data) && \is_int($data['customizable'])) {
            $data['customizable'] = (bool) $data['customizable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('default', $data)) {
            $object->setDefault($this->denormalizer->denormalize($data['default'], \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault::class, 'json', $context));
            unset($data['default']);
        }
        if (\array_key_exists('customizable', $data)) {
            $object->setCustomizable($data['customizable']);
            unset($data['customizable']);
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
        if ($data->isInitialized('default') && null !== $data->getDefault()) {
            $dataArray['default'] = $this->normalizer->normalize($data->getDefault(), 'json', $context);
        }
        if ($data->isInitialized('customizable') && null !== $data->getCustomizable()) {
            $dataArray['customizable'] = $data->getCustomizable();
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
        return [\Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class => false];
    }
}