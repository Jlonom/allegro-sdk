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
class RequirementChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\RequirementChange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\RequirementChange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\RequirementChange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('scheduledAt', $data)) {
            $object->setScheduledAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['scheduledAt']));
            unset($data['scheduledAt']);
        }
        if (\array_key_exists('scheduledFor', $data)) {
            $object->setScheduledFor(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['scheduledFor']));
            unset($data['scheduledFor']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeCategory::class, 'json', $context));
            unset($data['category']);
        }
        if (\array_key_exists('parameter', $data)) {
            $object->setParameter($this->denormalizer->denormalize($data['parameter'], \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeParameter::class, 'json', $context));
            unset($data['parameter']);
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
        $dataArray['scheduledAt'] = $data->getScheduledAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['scheduledFor'] = $data->getScheduledFor()?->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        $dataArray['parameter'] = $this->normalizer->normalize($data->getParameter(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\RequirementChange::class => false];
    }
}