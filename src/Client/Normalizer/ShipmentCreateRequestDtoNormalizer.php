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
class ShipmentCreateRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryMethodId', $data)) {
            $object->setDeliveryMethodId($data['deliveryMethodId']);
            unset($data['deliveryMethodId']);
        }
        if (\array_key_exists('credentialsId', $data)) {
            $object->setCredentialsId($data['credentialsId']);
            unset($data['credentialsId']);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], \Jlonom\AllegroSDK\Model\SenderAddressDto::class, 'json', $context));
            unset($data['sender']);
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], \Jlonom\AllegroSDK\Model\ReceiverAddressDto::class, 'json', $context));
            unset($data['receiver']);
        }
        if (\array_key_exists('pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], \Jlonom\AllegroSDK\Model\ShipmentPickupAddressDto::class, 'json', $context));
            unset($data['pickup']);
        }
        if (\array_key_exists('referenceNumber', $data)) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('packages', $data)) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\PackageRequestDto::class, 'json', $context);
            }
            $object->setPackages($values);
            unset($data['packages']);
        }
        if (\array_key_exists('insurance', $data)) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], \Jlonom\AllegroSDK\Model\InsuranceDto::class, 'json', $context));
            unset($data['insurance']);
        }
        if (\array_key_exists('cashOnDelivery', $data)) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], \Jlonom\AllegroSDK\Model\CashOnDeliveryDto::class, 'json', $context));
            unset($data['cashOnDelivery']);
        }
        if (\array_key_exists('labelFormat', $data)) {
            $object->setLabelFormat($data['labelFormat']);
            unset($data['labelFormat']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $values_1 = [];
            foreach ($data['additionalServices'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAdditionalServices($values_1);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('additionalProperties', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additionalProperties'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setAdditionalProperties($values_2);
            unset($data['additionalProperties']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deliveryMethodId'] = $data->getDeliveryMethodId();
        if ($data->isInitialized('credentialsId') && null !== $data->getCredentialsId()) {
            $dataArray['credentialsId'] = $data->getCredentialsId();
        }
        $dataArray['sender'] = $this->normalizer->normalize($data->getSender(), 'json', $context);
        $dataArray['receiver'] = $this->normalizer->normalize($data->getReceiver(), 'json', $context);
        if ($data->isInitialized('pickup') && null !== $data->getPickup()) {
            $dataArray['pickup'] = $this->normalizer->normalize($data->getPickup(), 'json', $context);
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        $values = [];
        foreach ($data->getPackages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['packages'] = $values;
        if ($data->isInitialized('insurance') && null !== $data->getInsurance()) {
            $dataArray['insurance'] = $this->normalizer->normalize($data->getInsurance(), 'json', $context);
        }
        if ($data->isInitialized('cashOnDelivery') && null !== $data->getCashOnDelivery()) {
            $dataArray['cashOnDelivery'] = $this->normalizer->normalize($data->getCashOnDelivery(), 'json', $context);
        }
        if ($data->isInitialized('labelFormat') && null !== $data->getLabelFormat()) {
            $dataArray['labelFormat'] = $data->getLabelFormat();
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values_1 = [];
            foreach ($data->getAdditionalServices() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['additionalServices'] = $values_1;
        }
        if ($data->isInitialized('additionalProperties') && null !== $data->getAdditionalProperties()) {
            $values_2 = [];
            foreach ($data->getAdditionalProperties() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['additionalProperties'] = $values_2;
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto::class => false];
    }
}