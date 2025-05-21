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
class ModificationSafetyInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'NO_SAFETY_INFORMATION' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ModificationNoSafetyInformation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'ATTACHMENTS' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ModificationAttachmentSafetyInformation', $format, $context);
        }
        if (array_key_exists('type', $data) and 'TEXT' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\ModificationTextSafetyInformation', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ModificationSafetyInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if (null !== $data->getType() and 'NO_SAFETY_INFORMATION' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'ATTACHMENTS' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'TEXT' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['type'] = $data->getType();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class => false];
    }
}