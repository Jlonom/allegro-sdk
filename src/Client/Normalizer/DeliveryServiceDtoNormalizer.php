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
class DeliveryServiceDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\DeliveryServiceDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\DeliveryServiceDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\DeliveryServiceDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($this->denormalizer->denormalize($data['id'], \Jlonom\AllegroSDK\Model\DeliveryServiceIdDto::class, 'json', $context));
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('carrierId', $data)) {
            $object->setCarrierId($data['carrierId']);
            unset($data['carrierId']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $values = [];
            foreach ($data['additionalServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\AdditionalServiceDto::class, 'json', $context);
            }
            $object->setAdditionalServices($values);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('additionalProperties', $data)) {
            $values_1 = [];
            foreach ($data['additionalProperties'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\AdditionalPropertyDto::class, 'json', $context);
            }
            $object->setAdditionalProperties($values_1);
            unset($data['additionalProperties']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
            unset($data['owner']);
        }
        if (\array_key_exists('marketplaces', $data)) {
            $values_2 = [];
            foreach ($data['marketplaces'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMarketplaces($values_2);
            unset($data['marketplaces']);
        }
        if (\array_key_exists('packageTypes', $data)) {
            $values_3 = [];
            foreach ($data['packageTypes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPackageTypes($values_3);
            unset($data['packageTypes']);
        }
        if (\array_key_exists('cashOnDelivery', $data)) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class, 'json', $context));
            unset($data['cashOnDelivery']);
        }
        if (\array_key_exists('insurance', $data)) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], \Jlonom\AllegroSDK\Model\LimitWithCurrencyDto::class, 'json', $context));
            unset($data['insurance']);
        }
        if (\array_key_exists('features', $data)) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['features'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->setFeatures($values_4);
            unset($data['features']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $this->normalizer->normalize($data->getId(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('carrierId') && null !== $data->getCarrierId()) {
            $dataArray['carrierId'] = $data->getCarrierId();
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values = [];
            foreach ($data->getAdditionalServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalServices'] = $values;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $values_1 = [];
            foreach ($data->getAdditionalProperties() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalProperties'] = $values_1;
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner();
        }
        if ($data->isInitialized('marketplaces') && null !== $data->getMarketplaces()) {
            $values_2 = [];
            foreach ($data->getMarketplaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['marketplaces'] = $values_2;
        }
        if ($data->isInitialized('packageTypes') && null !== $data->getPackageTypes()) {
            $values_3 = [];
            foreach ($data->getPackageTypes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['packageTypes'] = $values_3;
        }
        if ($data->isInitialized('cashOnDelivery') && null !== $data->getCashOnDelivery()) {
            $dataArray['cashOnDelivery'] = $this->normalizer->normalize($data->getCashOnDelivery(), 'json', $context);
        }
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['insurance'] = $this->normalizer->normalize($data->getInsurance(), 'json', $context);
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values_4 = [];
            foreach ($data->getFeatures() as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $dataArray['features'] = $values_4;
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\DeliveryServiceDto::class => false];
    }
}