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
class OrderLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OrderLineItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OrderLineItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OrderLineItem();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\OrderLineItemOfferReference::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('originalPrice', $data)) {
            $object->setOriginalPrice($this->denormalizer->denormalize($data['originalPrice'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['originalPrice']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Jlonom\AllegroSDK\Model\Price::class, 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('boughtAt', $data)) {
            $object->setBoughtAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['boughtAt']));
            unset($data['boughtAt']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('originalPrice') && null !== $data->getOriginalPrice()) {
            $dataArray['originalPrice'] = $this->normalizer->normalize($data->getOriginalPrice(), 'json', $context);
        }
        $dataArray['price'] = $this->normalizer->normalize($data->getPrice(), 'json', $context);
        if ($data->isInitialized('boughtAt') && null !== $data->getBoughtAt()) {
            $dataArray['boughtAt'] = $data->getBoughtAt()?->format('Y-m-d\TH:i:sP');
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
        return [\Jlonom\AllegroSDK\Model\OrderLineItem::class => false];
    }
}