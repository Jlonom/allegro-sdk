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
class TurnoverDiscountDefinitionDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cumulatingFromDate', $data)) {
            $object->setCumulatingFromDate(\DateTime::createFromFormat('Y-m-d', $data['cumulatingFromDate'])->setTime(0, 0, 0));
            unset($data['cumulatingFromDate']);
        }
        if (\array_key_exists('cumulatingToDate', $data) && $data['cumulatingToDate'] !== null) {
            $object->setCumulatingToDate(\DateTime::createFromFormat('Y-m-d', $data['cumulatingToDate'])->setTime(0, 0, 0));
            unset($data['cumulatingToDate']);
        }
        elseif (\array_key_exists('cumulatingToDate', $data) && $data['cumulatingToDate'] === null) {
            $object->setCumulatingToDate(null);
        }
        if (\array_key_exists('spendingFromDate', $data)) {
            $object->setSpendingFromDate(\DateTime::createFromFormat('Y-m-d', $data['spendingFromDate'])->setTime(0, 0, 0));
            unset($data['spendingFromDate']);
        }
        if (\array_key_exists('spendingToDate', $data) && $data['spendingToDate'] !== null) {
            $object->setSpendingToDate(\DateTime::createFromFormat('Y-m-d', $data['spendingToDate'])->setTime(0, 0, 0));
            unset($data['spendingToDate']);
        }
        elseif (\array_key_exists('spendingToDate', $data) && $data['spendingToDate'] === null) {
            $object->setSpendingToDate(null);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        }
        if (\array_key_exists('thresholds', $data)) {
            $values = [];
            foreach ($data['thresholds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class, 'json', $context);
            }
            $object->setThresholds($values);
            unset($data['thresholds']);
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
        if ($data->isInitialized('cumulatingFromDate') && null !== $data->getCumulatingFromDate()) {
            $dataArray['cumulatingFromDate'] = $data->getCumulatingFromDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('cumulatingToDate') && null !== $data->getCumulatingToDate()) {
            $dataArray['cumulatingToDate'] = $data->getCumulatingToDate()->format('Y-m-d');
        }
        if ($data->isInitialized('spendingFromDate') && null !== $data->getSpendingFromDate()) {
            $dataArray['spendingFromDate'] = $data->getSpendingFromDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('spendingToDate') && null !== $data->getSpendingToDate()) {
            $dataArray['spendingToDate'] = $data->getSpendingToDate()->format('Y-m-d');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('thresholds') && null !== $data->getThresholds()) {
            $values = [];
            foreach ($data->getThresholds() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['thresholds'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto::class => false];
    }
}