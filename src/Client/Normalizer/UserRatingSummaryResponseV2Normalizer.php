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
class UserRatingSummaryResponseV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recommended', $data)) {
            $object->setRecommended($this->denormalizer->denormalize($data['recommended'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Recommended::class, 'json', $context));
            unset($data['recommended']);
        }
        if (\array_key_exists('notRecommended', $data)) {
            $object->setNotRecommended($this->denormalizer->denormalize($data['notRecommended'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2NotRecommended::class, 'json', $context));
            unset($data['notRecommended']);
        }
        if (\array_key_exists('recommendedPercentage', $data)) {
            $object->setRecommendedPercentage($data['recommendedPercentage']);
            unset($data['recommendedPercentage']);
        }
        if (\array_key_exists('statistics', $data)) {
            $object->setStatistics($this->denormalizer->denormalize($data['statistics'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class, 'json', $context));
            unset($data['statistics']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2User::class, 'json', $context));
            unset($data['user']);
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
        if ($data->isInitialized('recommended') && null !== $data->getRecommended()) {
            $dataArray['recommended'] = $this->normalizer->normalize($data->getRecommended(), 'json', $context);
        }
        if ($data->isInitialized('notRecommended') && null !== $data->getNotRecommended()) {
            $dataArray['notRecommended'] = $this->normalizer->normalize($data->getNotRecommended(), 'json', $context);
        }
        if ($data->isInitialized('recommendedPercentage') && null !== $data->getRecommendedPercentage()) {
            $dataArray['recommendedPercentage'] = $data->getRecommendedPercentage();
        }
        if ($data->isInitialized('statistics') && null !== $data->getStatistics()) {
            $dataArray['statistics'] = $this->normalizer->normalize($data->getStatistics(), 'json', $context);
        }
        $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2::class => false];
    }
}