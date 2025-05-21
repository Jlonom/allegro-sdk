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
class UserRatingSummaryResponseV2StatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('received', $data)) {
            $object->setReceived($this->denormalizer->denormalize($data['received'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsReceived::class, 'json', $context));
            unset($data['received']);
        }
        if (\array_key_exists('excluded', $data)) {
            $object->setExcluded($this->denormalizer->denormalize($data['excluded'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsExcluded::class, 'json', $context));
            unset($data['excluded']);
        }
        if (\array_key_exists('removed', $data)) {
            $object->setRemoved($this->denormalizer->denormalize($data['removed'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsRemoved::class, 'json', $context));
            unset($data['removed']);
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
        $dataArray['received'] = $this->normalizer->normalize($data->getReceived(), 'json', $context);
        $dataArray['excluded'] = $this->normalizer->normalize($data->getExcluded(), 'json', $context);
        $dataArray['removed'] = $this->normalizer->normalize($data->getRemoved(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class => false];
    }
}