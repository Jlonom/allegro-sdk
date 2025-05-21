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
class CategoryProductParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CategoryProductParameter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CategoryProductParameter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'integer' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\IntegerCategoryProductParameter', $format, $context);
        }
        if (array_key_exists('type', $data) and 'float' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\FloatCategoryProductParameter', $format, $context);
        }
        if (array_key_exists('type', $data) and 'string' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\StringCategoryProductParameter', $format, $context);
        }
        if (array_key_exists('type', $data) and 'dictionary' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameter', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CategoryProductParameter();
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
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
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        if (\array_key_exists('requiredIf', $data)) {
            $object->setRequiredIf($this->denormalizer->denormalize($data['requiredIf'], \Jlonom\AllegroSDK\Model\CategoryParameterRequirementConditions::class, 'json', $context));
            unset($data['requiredIf']);
        }
        if (\array_key_exists('displayedIf', $data)) {
            $object->setDisplayedIf($this->denormalizer->denormalize($data['displayedIf'], \Jlonom\AllegroSDK\Model\CategoryParameterDisplayConditions::class, 'json', $context));
            unset($data['displayedIf']);
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
        if (null !== $data->getType() and 'integer' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'float' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'string' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'dictionary' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if ($data->isInitialized('requiredIf') && null !== $data->getRequiredIf()) {
            $dataArray['requiredIf'] = $this->normalizer->normalize($data->getRequiredIf(), 'json', $context);
        }
        if ($data->isInitialized('displayedIf') && null !== $data->getDisplayedIf()) {
            $dataArray['displayedIf'] = $this->normalizer->normalize($data->getDisplayedIf(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\CategoryProductParameter::class => false];
    }
}