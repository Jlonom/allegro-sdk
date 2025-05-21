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
class SmartOfferClassificationReportConditionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem();
        if (\array_key_exists('fulfilled', $data) && \is_int($data['fulfilled'])) {
            $data['fulfilled'] = (bool) $data['fulfilled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('fulfilled', $data)) {
            $object->setFulfilled($data['fulfilled']);
            unset($data['fulfilled']);
        }
        if (\array_key_exists('passedDeliveryMethods', $data)) {
            $values = [];
            foreach ($data['passedDeliveryMethods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\DeliveryMethodId::class, 'json', $context);
            }
            $object->setPassedDeliveryMethods($values);
            unset($data['passedDeliveryMethods']);
        }
        if (\array_key_exists('failedDeliveryMethods', $data)) {
            $values_1 = [];
            foreach ($data['failedDeliveryMethods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\DeliveryMethodId::class, 'json', $context);
            }
            $object->setFailedDeliveryMethods($values_1);
            unset($data['failedDeliveryMethods']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('fulfilled') && null !== $data->getFulfilled()) {
            $dataArray['fulfilled'] = $data->getFulfilled();
        }
        if ($data->isInitialized('passedDeliveryMethods') && null !== $data->getPassedDeliveryMethods()) {
            $values = [];
            foreach ($data->getPassedDeliveryMethods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['passedDeliveryMethods'] = $values;
        }
        if ($data->isInitialized('failedDeliveryMethods') && null !== $data->getFailedDeliveryMethods()) {
            $values_1 = [];
            foreach ($data->getFailedDeliveryMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['failedDeliveryMethods'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem::class => false];
    }
}