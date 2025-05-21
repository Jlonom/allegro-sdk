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
class OfferStatResponseDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferStatResponseDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferStatResponseDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferStatResponseDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\OfferStatModelDto::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('eventStatsTotal', $data)) {
            $values = [];
            foreach ($data['eventStatsTotal'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\ClassifiedEventStat::class, 'json', $context);
            }
            $object->setEventStatsTotal($values);
            unset($data['eventStatsTotal']);
        }
        if (\array_key_exists('eventsPerDay', $data)) {
            $values_1 = [];
            foreach ($data['eventsPerDay'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\ClassifiedDailyEventStatResponseDto::class, 'json', $context);
            }
            $object->setEventsPerDay($values_1);
            unset($data['eventsPerDay']);
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
        if ($data->isInitialized('offer') && null !== $data->getOffer()) {
            $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        }
        if ($data->isInitialized('eventStatsTotal') && null !== $data->getEventStatsTotal()) {
            $values = [];
            foreach ($data->getEventStatsTotal() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['eventStatsTotal'] = $values;
        }
        if ($data->isInitialized('eventsPerDay') && null !== $data->getEventsPerDay()) {
            $values_1 = [];
            foreach ($data->getEventsPerDay() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['eventsPerDay'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\OfferStatResponseDto::class => false];
    }
}