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
class UserRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\UserRating::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\UserRating::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\UserRating();
        if (\array_key_exists('excludedFromAverageRates', $data) && \is_int($data['excludedFromAverageRates'])) {
            $data['excludedFromAverageRates'] = (bool) $data['excludedFromAverageRates'];
        }
        if (\array_key_exists('recommended', $data) && \is_int($data['recommended'])) {
            $data['recommended'] = (bool) $data['recommended'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('answer', $data)) {
            $object->setAnswer($this->denormalizer->denormalize($data['answer'], \Jlonom\AllegroSDK\Model\Answer::class, 'json', $context));
            unset($data['answer']);
        }
        if (\array_key_exists('buyer', $data)) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Jlonom\AllegroSDK\Model\User::class, 'json', $context));
            unset($data['buyer']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('editedAt', $data)) {
            $object->setEditedAt($data['editedAt']);
            unset($data['editedAt']);
        }
        if (\array_key_exists('excludedFromAverageRates', $data)) {
            $object->setExcludedFromAverageRates($data['excludedFromAverageRates']);
            unset($data['excludedFromAverageRates']);
        }
        if (\array_key_exists('excludedFromAverageRatesReason', $data)) {
            $object->setExcludedFromAverageRatesReason($data['excludedFromAverageRatesReason']);
            unset($data['excludedFromAverageRatesReason']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('lastChangedAt', $data)) {
            $object->setLastChangedAt($data['lastChangedAt']);
            unset($data['lastChangedAt']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Jlonom\AllegroSDK\Model\Order::class, 'json', $context));
            unset($data['order']);
        }
        if (\array_key_exists('rates', $data)) {
            $object->setRates($this->denormalizer->denormalize($data['rates'], \Jlonom\AllegroSDK\Model\Rates::class, 'json', $context));
            unset($data['rates']);
        }
        if (\array_key_exists('recommended', $data)) {
            $object->setRecommended($data['recommended']);
            unset($data['recommended']);
        }
        if (\array_key_exists('removal', $data)) {
            $object->setRemoval($this->denormalizer->denormalize($data['removal'], \Jlonom\AllegroSDK\Model\Removal::class, 'json', $context));
            unset($data['removal']);
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
        if ($data->isInitialized('answer') && null !== $data->getAnswer()) {
            $dataArray['answer'] = $this->normalizer->normalize($data->getAnswer(), 'json', $context);
        }
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        $dataArray['createdAt'] = $data->getCreatedAt();
        if ($data->isInitialized('editedAt') && null !== $data->getEditedAt()) {
            $dataArray['editedAt'] = $data->getEditedAt();
        }
        if ($data->isInitialized('excludedFromAverageRates') && null !== $data->getExcludedFromAverageRates()) {
            $dataArray['excludedFromAverageRates'] = $data->getExcludedFromAverageRates();
        }
        if ($data->isInitialized('excludedFromAverageRatesReason') && null !== $data->getExcludedFromAverageRatesReason()) {
            $dataArray['excludedFromAverageRatesReason'] = $data->getExcludedFromAverageRatesReason();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('lastChangedAt') && null !== $data->getLastChangedAt()) {
            $dataArray['lastChangedAt'] = $data->getLastChangedAt();
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        if ($data->isInitialized('rates') && null !== $data->getRates()) {
            $dataArray['rates'] = $this->normalizer->normalize($data->getRates(), 'json', $context);
        }
        $dataArray['recommended'] = $data->getRecommended();
        if ($data->isInitialized('removal') && null !== $data->getRemoval()) {
            $dataArray['removal'] = $this->normalizer->normalize($data->getRemoval(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\UserRating::class => false];
    }
}