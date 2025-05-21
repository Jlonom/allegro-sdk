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
class SaleProductOfferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\SaleProductOffer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\SaleProductOffer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\SaleProductOffer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('payments', $data)) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], \Jlonom\AllegroSDK\Model\Payments::class, 'json', $context));
            unset($data['payments']);
        }
        if (\array_key_exists('sellingMode', $data)) {
            $object->setSellingMode($this->denormalizer->denormalize($data['sellingMode'], \Jlonom\AllegroSDK\Model\SellingMode::class, 'json', $context));
            unset($data['sellingMode']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Jlonom\AllegroSDK\Model\Location::class, 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('images', $data)) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $value;
            }
            $object->setImages($values);
            unset($data['images']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Jlonom\AllegroSDK\Model\StandardizedDescription::class, 'json', $context));
            unset($data['description']);
        }
        if (\array_key_exists('external', $data)) {
            $object->setExternal($this->denormalizer->denormalize($data['external'], \Jlonom\AllegroSDK\Model\ExternalId::class, 'json', $context));
            unset($data['external']);
        }
        if (\array_key_exists('sizeTable', $data)) {
            $object->setSizeTable($this->denormalizer->denormalize($data['sizeTable'], \Jlonom\AllegroSDK\Model\SizeTable::class, 'json', $context));
            unset($data['sizeTable']);
        }
        if (\array_key_exists('taxSettings', $data)) {
            $object->setTaxSettings($this->denormalizer->denormalize($data['taxSettings'], \Jlonom\AllegroSDK\Model\OfferTaxSettings::class, 'json', $context));
            unset($data['taxSettings']);
        }
        if (\array_key_exists('messageToSellerSettings', $data)) {
            $object->setMessageToSellerSettings($this->denormalizer->denormalize($data['messageToSellerSettings'], \Jlonom\AllegroSDK\Model\MessageToSellerSettings::class, 'json', $context));
            unset($data['messageToSellerSettings']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $dataArray['payments'] = $this->normalizer->normalize($data->getPayments(), 'json', $context);
        }
        if ($data->isInitialized('sellingMode') && null !== $data->getSellingMode()) {
            $dataArray['sellingMode'] = $this->normalizer->normalize($data->getSellingMode(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $value;
            }
            $dataArray['images'] = $values;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $this->normalizer->normalize($data->getDescription(), 'json', $context);
        }
        if ($data->isInitialized('external') && null !== $data->getExternal()) {
            $dataArray['external'] = $this->normalizer->normalize($data->getExternal(), 'json', $context);
        }
        if ($data->isInitialized('sizeTable') && null !== $data->getSizeTable()) {
            $dataArray['sizeTable'] = $this->normalizer->normalize($data->getSizeTable(), 'json', $context);
        }
        if ($data->isInitialized('taxSettings') && null !== $data->getTaxSettings()) {
            $dataArray['taxSettings'] = $this->normalizer->normalize($data->getTaxSettings(), 'json', $context);
        }
        if ($data->isInitialized('messageToSellerSettings') && null !== $data->getMessageToSellerSettings()) {
            $dataArray['messageToSellerSettings'] = $this->normalizer->normalize($data->getMessageToSellerSettings(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\SaleProductOffer::class => false];
    }
}