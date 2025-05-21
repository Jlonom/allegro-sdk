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
class PosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Pos::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Pos::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Pos();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('externalId', $data)) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('seller', $data)) {
            $object->setSeller($this->denormalizer->denormalize($data['seller'], \Jlonom\AllegroSDK\Model\Seller::class, 'json', $context));
            unset($data['seller']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Jlonom\AllegroSDK\Model\Address::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('phoneNumber', $data)) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('locations', $data)) {
            $values = [];
            foreach ($data['locations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\PosLocation::class, 'json', $context);
            }
            $object->setLocations($values);
            unset($data['locations']);
        }
        if (\array_key_exists('openHours', $data)) {
            $values_1 = [];
            foreach ($data['openHours'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\OpenHour::class, 'json', $context);
            }
            $object->setOpenHours($values_1);
            unset($data['openHours']);
        }
        if (\array_key_exists('serviceTime', $data)) {
            $object->setServiceTime($data['serviceTime']);
            unset($data['serviceTime']);
        }
        if (\array_key_exists('payments', $data)) {
            $values_2 = [];
            foreach ($data['payments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jlonom\AllegroSDK\Model\Payment::class, 'json', $context);
            }
            $object->setPayments($values_2);
            unset($data['payments']);
        }
        if (\array_key_exists('confirmationType', $data)) {
            $object->setConfirmationType($data['confirmationType']);
            unset($data['confirmationType']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['externalId'] = $data->getExternalId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('seller') && null !== $data->getSeller()) {
            $dataArray['seller'] = $this->normalizer->normalize($data->getSeller(), 'json', $context);
        }
        $dataArray['type'] = $data->getType();
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('locations') && null !== $data->getLocations()) {
            $values = [];
            foreach ($data->getLocations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['locations'] = $values;
        }
        $values_1 = [];
        foreach ($data->getOpenHours() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['openHours'] = $values_1;
        if ($data->isInitialized('serviceTime') && null !== $data->getServiceTime()) {
            $dataArray['serviceTime'] = $data->getServiceTime();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $values_2 = [];
            foreach ($data->getPayments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['payments'] = $values_2;
        }
        $dataArray['confirmationType'] = $data->getConfirmationType();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\Pos::class => false];
    }
}