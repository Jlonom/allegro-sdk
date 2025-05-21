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
class StockSellingStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\StockSellingStats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\StockSellingStats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\StockSellingStats();
        if (\array_key_exists('lastWeekAverage', $data) && \is_int($data['lastWeekAverage'])) {
            $data['lastWeekAverage'] = (double) $data['lastWeekAverage'];
        }
        if (\array_key_exists('lastThirtyDaysSum', $data) && \is_int($data['lastThirtyDaysSum'])) {
            $data['lastThirtyDaysSum'] = (double) $data['lastThirtyDaysSum'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lastWeekAverage', $data)) {
            $object->setLastWeekAverage($data['lastWeekAverage']);
            unset($data['lastWeekAverage']);
        }
        if (\array_key_exists('lastThirtyDaysSum', $data)) {
            $object->setLastThirtyDaysSum($data['lastThirtyDaysSum']);
            unset($data['lastThirtyDaysSum']);
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
        if ($data->isInitialized('lastWeekAverage') && null !== $data->getLastWeekAverage()) {
            $dataArray['lastWeekAverage'] = $data->getLastWeekAverage();
        }
        if ($data->isInitialized('lastThirtyDaysSum') && null !== $data->getLastThirtyDaysSum()) {
            $dataArray['lastThirtyDaysSum'] = $data->getLastThirtyDaysSum();
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
        return [\Jlonom\AllegroSDK\Model\StockSellingStats::class => false];
    }
}