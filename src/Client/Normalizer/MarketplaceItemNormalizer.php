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
class MarketplaceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\MarketplaceItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\MarketplaceItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\MarketplaceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('languages', $data)) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], \Jlonom\AllegroSDK\Model\MarketplaceItemLanguages::class, 'json', $context));
            unset($data['languages']);
        }
        if (\array_key_exists('currencies', $data)) {
            $object->setCurrencies($this->denormalizer->denormalize($data['currencies'], \Jlonom\AllegroSDK\Model\MarketplaceItemCurrencies::class, 'json', $context));
            unset($data['currencies']);
        }
        if (\array_key_exists('shippingCountries', $data)) {
            $values = [];
            foreach ($data['shippingCountries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\MarketplaceItemShippingCountry::class, 'json', $context);
            }
            $object->setShippingCountries($values);
            unset($data['shippingCountries']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('languages') && null !== $data->getLanguages()) {
            $dataArray['languages'] = $this->normalizer->normalize($data->getLanguages(), 'json', $context);
        }
        if ($data->isInitialized('currencies') && null !== $data->getCurrencies()) {
            $dataArray['currencies'] = $this->normalizer->normalize($data->getCurrencies(), 'json', $context);
        }
        if ($data->isInitialized('shippingCountries') && null !== $data->getShippingCountries()) {
            $values = [];
            foreach ($data->getShippingCountries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['shippingCountries'] = $values;
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
        return [\Jlonom\AllegroSDK\Model\MarketplaceItem::class => false];
    }
}