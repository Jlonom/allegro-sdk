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
class SalesQualityForDayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SalesQualityForDay::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SalesQualityForDay::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SalesQualityForDay();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (double) $data['score'];
        }
        if (\array_key_exists('maxScore', $data) && \is_int($data['maxScore'])) {
            $data['maxScore'] = (double) $data['maxScore'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resultFor', $data)) {
            $object->setResultFor(\DateTime::createFromFormat('Y-m-d', $data['resultFor'])->setTime(0, 0, 0));
            unset($data['resultFor']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('grade', $data)) {
            $object->setGrade($data['grade']);
            unset($data['grade']);
        }
        if (\array_key_exists('maxScore', $data)) {
            $object->setMaxScore($data['maxScore']);
            unset($data['maxScore']);
        }
        if (\array_key_exists('metrics', $data)) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\SalesQualityMetric::class, 'json', $context);
            }
            $object->setMetrics($values);
            unset($data['metrics']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['resultFor'] = $data->getResultFor()?->format('Y-m-d');
        $dataArray['score'] = $data->getScore();
        $dataArray['grade'] = $data->getGrade();
        $dataArray['maxScore'] = $data->getMaxScore();
        $values = [];
        foreach ($data->getMetrics() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['metrics'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SalesQualityForDay::class => false];
    }
}