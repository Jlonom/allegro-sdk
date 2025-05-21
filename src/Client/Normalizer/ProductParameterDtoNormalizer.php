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
class ProductParameterDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ProductParameterDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ProductParameterDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ProductParameterDto();
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
        if (\array_key_exists('rangeValue', $data)) {
            $object->setRangeValue($this->denormalizer->denormalize($data['rangeValue'], \Jlonom\AllegroSDK\Model\ParameterRangeValue::class, 'json', $context));
            unset($data['rangeValue']);
        }
        if (\array_key_exists('values', $data)) {
            $values = [];
            foreach ($data['values'] as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
            unset($data['values']);
        }
        if (\array_key_exists('valuesIds', $data)) {
            $values_1 = [];
            foreach ($data['valuesIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setValuesIds($values_1);
            unset($data['valuesIds']);
        }
        if (\array_key_exists('valuesLabels', $data)) {
            $values_2 = [];
            foreach ($data['valuesLabels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setValuesLabels($values_2);
            unset($data['valuesLabels']);
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        if (\array_key_exists('options', $data)) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class, 'json', $context));
            unset($data['options']);
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
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('rangeValue') && null !== $data->getRangeValue()) {
            $dataArray['rangeValue'] = $this->normalizer->normalize($data->getRangeValue(), 'json', $context);
        }
        if ($data->isInitialized('values') && null !== $data->getValues()) {
            $values = [];
            foreach ($data->getValues() as $value) {
                $values[] = $value;
            }
            $dataArray['values'] = $values;
        }
        if ($data->isInitialized('valuesIds') && null !== $data->getValuesIds()) {
            $values_1 = [];
            foreach ($data->getValuesIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['valuesIds'] = $values_1;
        }
        if ($data->isInitialized('valuesLabels') && null !== $data->getValuesLabels()) {
            $values_2 = [];
            foreach ($data->getValuesLabels() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['valuesLabels'] = $values_2;
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\ProductParameterDto::class => false];
    }
}