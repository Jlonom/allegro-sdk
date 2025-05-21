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
class DictionaryCategoryParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\DictionaryCategoryParameter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\DictionaryCategoryParameter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\DictionaryCategoryParameter();
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('requiredForProduct', $data) && \is_int($data['requiredForProduct'])) {
            $data['requiredForProduct'] = (bool) $data['requiredForProduct'];
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
        if (\array_key_exists('requiredForProduct', $data)) {
            $object->setRequiredForProduct($data['requiredForProduct']);
            unset($data['requiredForProduct']);
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
        if (\array_key_exists('options', $data)) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Jlonom\AllegroSDK\Model\CategoryParameterOptions::class, 'json', $context));
            unset($data['options']);
        }
        if (\array_key_exists('restrictions', $data)) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterrestrictions::class, 'json', $context));
            unset($data['restrictions']);
        }
        if (\array_key_exists('dictionary', $data)) {
            $values = [];
            foreach ($data['dictionary'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterdictionaryItem::class, 'json', $context);
            }
            $object->setDictionary($values);
            unset($data['dictionary']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if ($data->isInitialized('requiredForProduct') && null !== $data->getRequiredForProduct()) {
            $dataArray['requiredForProduct'] = $data->getRequiredForProduct();
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
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        if ($data->isInitialized('restrictions') && null !== $data->getRestrictions()) {
            $dataArray['restrictions'] = $this->normalizer->normalize($data->getRestrictions(), 'json', $context);
        }
        if ($data->isInitialized('dictionary') && null !== $data->getDictionary()) {
            $values = [];
            foreach ($data->getDictionary() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['dictionary'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\DictionaryCategoryParameter::class => false];
    }
}