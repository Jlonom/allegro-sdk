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
class StockProductItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\StockProductItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\StockProductItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\StockProductItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Jlonom\AllegroSDK\Model\StockProduct::class, 'json', $context));
            unset($data['product']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Jlonom\AllegroSDK\Model\StockQuantity::class, 'json', $context));
            unset($data['quantity']);
        }
        if (\array_key_exists('sellingStats', $data)) {
            $object->setSellingStats($this->denormalizer->denormalize($data['sellingStats'], \Jlonom\AllegroSDK\Model\StockSellingStats::class, 'json', $context));
            unset($data['sellingStats']);
        }
        if (\array_key_exists('reserve', $data)) {
            $object->setReserve($this->denormalizer->denormalize($data['reserve'], \Jlonom\AllegroSDK\Model\ReserveInfo::class, 'json', $context));
            unset($data['reserve']);
        }
        if (\array_key_exists('storageFee', $data)) {
            $object->setStorageFee($this->denormalizer->denormalize($data['storageFee'], \Jlonom\AllegroSDK\Model\StockStorageFee::class, 'json', $context));
            unset($data['storageFee']);
        }
        if (\array_key_exists('offerId', $data)) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
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
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $this->normalizer->normalize($data->getQuantity(), 'json', $context);
        }
        if ($data->isInitialized('sellingStats') && null !== $data->getSellingStats()) {
            $dataArray['sellingStats'] = $this->normalizer->normalize($data->getSellingStats(), 'json', $context);
        }
        if ($data->isInitialized('reserve') && null !== $data->getReserve()) {
            $dataArray['reserve'] = $this->normalizer->normalize($data->getReserve(), 'json', $context);
        }
        if ($data->isInitialized('storageFee') && null !== $data->getStorageFee()) {
            $dataArray['storageFee'] = $this->normalizer->normalize($data->getStorageFee(), 'json', $context);
        }
        if ($data->isInitialized('offerId') && null !== $data->getOfferId()) {
            $dataArray['offerId'] = $data->getOfferId();
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
        return [\Jlonom\AllegroSDK\Model\StockProductItem::class => false];
    }
}