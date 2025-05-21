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
class OrderEventDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OrderEventData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OrderEventData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OrderEventData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('seller', $data)) {
            $object->setSeller($this->denormalizer->denormalize($data['seller'], \Jlonom\AllegroSDK\Model\SellerReference::class, 'json', $context));
            unset($data['seller']);
        }
        if (\array_key_exists('buyer', $data)) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Jlonom\AllegroSDK\Model\BuyerReference::class, 'json', $context));
            unset($data['buyer']);
        }
        if (\array_key_exists('lineItems', $data)) {
            $values = [];
            foreach ($data['lineItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\OrderLineItem::class, 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['lineItems']);
        }
        if (\array_key_exists('checkoutForm', $data)) {
            $object->setCheckoutForm($this->denormalizer->denormalize($data['checkoutForm'], \Jlonom\AllegroSDK\Model\CheckoutFormReference::class, 'json', $context));
            unset($data['checkoutForm']);
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\OrderMarketplace::class, 'json', $context));
            unset($data['marketplace']);
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
        $dataArray['seller'] = $this->normalizer->normalize($data->getSeller(), 'json', $context);
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        $values = [];
        foreach ($data->getLineItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['lineItems'] = $values;
        if ($data->isInitialized('checkoutForm') && null !== $data->getCheckoutForm()) {
            $dataArray['checkoutForm'] = $this->normalizer->normalize($data->getCheckoutForm(), 'json', $context);
        }
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\OrderEventData::class => false];
    }
}