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
class UserRatingSummaryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\UserRatingSummaryResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\UserRatingSummaryResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('averageRates', $data)) {
            $object->setAverageRates($this->denormalizer->denormalize($data['averageRates'], \Jlonom\AllegroSDK\Model\AverageRates::class, 'json', $context));
            unset($data['averageRates']);
        }
        if (\array_key_exists('notRecommended', $data)) {
            $object->setNotRecommended($this->denormalizer->denormalize($data['notRecommended'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseNotRecommended::class, 'json', $context));
            unset($data['notRecommended']);
        }
        if (\array_key_exists('recommended', $data)) {
            $object->setRecommended($this->denormalizer->denormalize($data['recommended'], \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseRecommended::class, 'json', $context));
            unset($data['recommended']);
        }
        if (\array_key_exists('recommendedPercentage', $data)) {
            $object->setRecommendedPercentage($data['recommendedPercentage']);
            unset($data['recommendedPercentage']);
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
        if ($data->isInitialized('averageRates') && null !== $data->getAverageRates()) {
            $dataArray['averageRates'] = $this->normalizer->normalize($data->getAverageRates(), 'json', $context);
        }
        $dataArray['notRecommended'] = $this->normalizer->normalize($data->getNotRecommended(), 'json', $context);
        $dataArray['recommended'] = $this->normalizer->normalize($data->getRecommended(), 'json', $context);
        $dataArray['recommendedPercentage'] = $data->getRecommendedPercentage();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\UserRatingSummaryResponse::class => false];
    }
}