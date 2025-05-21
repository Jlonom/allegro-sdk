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
class PromoModificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PromoModificationReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PromoModificationReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PromoModificationReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tasks', $data)) {
            $values = [];
            foreach ($data['tasks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\PromoModificationTask::class, 'json', $context);
            }
            $object->setTasks($values);
            unset($data['tasks']);
        }
        if (\array_key_exists('modification', $data)) {
            $object->setModification($this->denormalizer->denormalize($data['modification'], \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class, 'json', $context));
            unset($data['modification']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_1 = [];
            foreach ($data['additionalMarketplaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsCommandModification::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
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
        if ($data->isInitialized('tasks') && null !== $data->getTasks()) {
            $values = [];
            foreach ($data->getTasks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['tasks'] = $values;
        }
        if ($data->isInitialized('modification') && null !== $data->getModification()) {
            $dataArray['modification'] = $this->normalizer->normalize($data->getModification(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\PromoModificationReport::class => false];
    }
}