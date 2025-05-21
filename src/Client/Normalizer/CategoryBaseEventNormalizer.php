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
class CategoryBaseEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CategoryBaseEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CategoryBaseEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'CATEGORY_CREATED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CategoryCreatedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'CATEGORY_RENAMED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CategoryRenamedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'CATEGORY_MOVED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CategoryMovedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'CATEGORY_DELETED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\CategoryDeletedEvent', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CategoryBaseEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('occurredAt', $data)) {
            $object->setOccurredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']));
            unset($data['occurredAt']);
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
        if (null !== $data->getType() and 'CATEGORY_CREATED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'CATEGORY_RENAMED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'CATEGORY_MOVED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'CATEGORY_DELETED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->getId();
        $dataArray['occurredAt'] = $data->getOccurredAt()?->format('Y-m-d\TH:i:sP');
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
        return [\Jlonom\AllegroSDK\Model\CategoryBaseEvent::class => false];
    }
}