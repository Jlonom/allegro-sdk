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
class AlleDiscountEligibleOfferDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoProduct::class, 'json', $context));
            unset($data['product']);
        }
        if (\array_key_exists('basePrice', $data) && $data['basePrice'] !== null) {
            $object->setBasePrice($this->denormalizer->denormalize($data['basePrice'], \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoBasePrice::class, 'json', $context));
            unset($data['basePrice']);
        }
        elseif (\array_key_exists('basePrice', $data) && $data['basePrice'] === null) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('alleDiscount', $data)) {
            $object->setAlleDiscount($this->denormalizer->denormalize($data['alleDiscount'], \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class, 'json', $context));
            unset($data['alleDiscount']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('basePrice') && null !== $data->getBasePrice()) {
            $dataArray['basePrice'] = $this->normalizer->normalize($data->getBasePrice(), 'json', $context);
        }
        if ($data->isInitialized('alleDiscount') && null !== $data->getAlleDiscount()) {
            $dataArray['alleDiscount'] = $this->normalizer->normalize($data->getAlleDiscount(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto::class => false];
    }
}