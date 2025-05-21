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
class AllegroPickupDropOffPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('services', $data)) {
            $values = [];
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointServicesItem::class, 'json', $context);
            }
            $object->setServices($values);
            unset($data['services']);
        }
        if (\array_key_exists('restrictions', $data)) {
            $values_1 = [];
            foreach ($data['restrictions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointRestrictionsItem::class, 'json', $context);
            }
            $object->setRestrictions($values_1);
            unset($data['restrictions']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('payments', $data)) {
            $values_2 = [];
            foreach ($data['payments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointPaymentsItem::class, 'json', $context);
            }
            $object->setPayments($values_2);
            unset($data['payments']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('opening', $data)) {
            $values_3 = [];
            foreach ($data['opening'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointOpeningItem::class, 'json', $context);
            }
            $object->setOpening($values_3);
            unset($data['opening']);
        }
        if (\array_key_exists('carriers', $data)) {
            $values_4 = [];
            foreach ($data['carriers'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCarriers($values_4);
            unset($data['carriers']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['type'] = $data->getType();
        $values = [];
        foreach ($data->getServices() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['services'] = $values;
        $values_1 = [];
        foreach ($data->getRestrictions() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['restrictions'] = $values_1;
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $values_2 = [];
        foreach ($data->getPayments() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['payments'] = $values_2;
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        $values_3 = [];
        foreach ($data->getOpening() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['opening'] = $values_3;
        $values_4 = [];
        foreach ($data->getCarriers() as $value_4) {
            $values_4[] = $value_4;
        }
        $dataArray['carriers'] = $values_4;
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint::class => false];
    }
}