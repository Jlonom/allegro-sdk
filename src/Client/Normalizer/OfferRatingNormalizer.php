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
class OfferRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferRating::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferRating::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferRating();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('averageScore', $data)) {
            $object->setAverageScore($data['averageScore']);
            unset($data['averageScore']);
        }
        if (\array_key_exists('scoreDistribution', $data)) {
            $values = [];
            foreach ($data['scoreDistribution'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\OfferRatingScoreDistributionItem::class, 'json', $context);
            }
            $object->setScoreDistribution($values);
            unset($data['scoreDistribution']);
        }
        if (\array_key_exists('totalResponses', $data)) {
            $object->setTotalResponses($data['totalResponses']);
            unset($data['totalResponses']);
        }
        if (\array_key_exists('sizeFeedback', $data)) {
            $values_1 = [];
            foreach ($data['sizeFeedback'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\OfferRatingSizeFeedbackItem::class, 'json', $context);
            }
            $object->setSizeFeedback($values_1);
            unset($data['sizeFeedback']);
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
        if ($data->isInitialized('averageScore') && null !== $data->getAverageScore()) {
            $dataArray['averageScore'] = $data->getAverageScore();
        }
        if ($data->isInitialized('scoreDistribution') && null !== $data->getScoreDistribution()) {
            $values = [];
            foreach ($data->getScoreDistribution() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['scoreDistribution'] = $values;
        }
        if ($data->isInitialized('totalResponses') && null !== $data->getTotalResponses()) {
            $dataArray['totalResponses'] = $data->getTotalResponses();
        }
        if ($data->isInitialized('sizeFeedback') && null !== $data->getSizeFeedback()) {
            $values_1 = [];
            foreach ($data->getSizeFeedback() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sizeFeedback'] = $values_1;
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
        return [\Jlonom\AllegroSDK\Model\OfferRating::class => false];
    }
}