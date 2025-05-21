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
class SellerOfferBaseEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SellerOfferBaseEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SellerOfferBaseEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('type', $data) and 'OFFER_ACTIVATED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferActivatedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_CHANGED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferChangedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_ENDED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferEndedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_STOCK_CHANGED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferStockChangedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_PRICE_CHANGED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferPriceChangedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_ARCHIVED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferArchivedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_BID_PLACED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferBidPlacedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_BID_CANCELED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferBidCanceledEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_TRANSLATION_UPDATED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferTranslationUpdatedEvent', $format, $context);
        }
        if (array_key_exists('type', $data) and 'OFFER_VISIBILITY_CHANGED' === $data['type']) {
            return $this->denormalizer->denormalize($data, 'Jlonom\AllegroSDK\Model\OfferVisibilityChangedEvent', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SellerOfferBaseEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('occurredAt', $data)) {
            $object->setOccurredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['occurredAt']));
            unset($data['occurredAt']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if (null !== $data->getType() and 'OFFER_ACTIVATED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_CHANGED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_ENDED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_STOCK_CHANGED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_PRICE_CHANGED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_ARCHIVED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_BID_PLACED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_BID_CANCELED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_TRANSLATION_UPDATED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getType() and 'OFFER_VISIBILITY_CHANGED' === $data->getType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->getId();
        $dataArray['occurredAt'] = $data->getOccurredAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['type'] = $data->getType();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\SellerOfferBaseEvent::class => false];
    }
}