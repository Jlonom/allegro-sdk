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
class SmartSellerClassificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SmartSellerClassificationReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SmartSellerClassificationReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SmartSellerClassificationReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('classification', $data)) {
            $object->setClassification($this->denormalizer->denormalize($data['classification'], \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportClassification::class, 'json', $context));
            unset($data['classification']);
        }
        if (\array_key_exists('conditions', $data)) {
            $values = [];
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportConditionsItem::class, 'json', $context);
            }
            $object->setConditions($values);
            unset($data['conditions']);
        }
        if (\array_key_exists('excludedDeliveryMethods', $data)) {
            $values_1 = [];
            foreach ($data['excludedDeliveryMethods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\SmartDeliveryMethod::class, 'json', $context);
            }
            $object->setExcludedDeliveryMethods($values_1);
            unset($data['excludedDeliveryMethods']);
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
        if ($data->isInitialized('classification') && null !== $data->getClassification()) {
            $dataArray['classification'] = $this->normalizer->normalize($data->getClassification(), 'json', $context);
        }
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $values = [];
            foreach ($data->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conditions'] = $values;
        }
        if ($data->isInitialized('excludedDeliveryMethods') && null !== $data->getExcludedDeliveryMethods()) {
            $values_1 = [];
            foreach ($data->getExcludedDeliveryMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['excludedDeliveryMethods'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\SmartSellerClassificationReport::class => false];
    }
}