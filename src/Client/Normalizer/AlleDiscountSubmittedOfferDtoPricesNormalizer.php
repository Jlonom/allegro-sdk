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
class AlleDiscountSubmittedOfferDtoPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('proposedPrice', $data)) {
            $object->setProposedPrice($this->denormalizer->denormalize($data['proposedPrice'], \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class, 'json', $context));
            unset($data['proposedPrice']);
        }
        if (\array_key_exists('minimalPriceReduction', $data)) {
            $object->setMinimalPriceReduction($this->denormalizer->denormalize($data['minimalPriceReduction'], \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class, 'json', $context));
            unset($data['minimalPriceReduction']);
        }
        if (\array_key_exists('maximumSellingPrice', $data)) {
            $object->setMaximumSellingPrice($this->denormalizer->denormalize($data['maximumSellingPrice'], \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class, 'json', $context));
            unset($data['maximumSellingPrice']);
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
        if ($data->isInitialized('proposedPrice') && null !== $data->getProposedPrice()) {
            $dataArray['proposedPrice'] = $this->normalizer->normalize($data->getProposedPrice(), 'json', $context);
        }
        if ($data->isInitialized('minimalPriceReduction') && null !== $data->getMinimalPriceReduction()) {
            $dataArray['minimalPriceReduction'] = $this->normalizer->normalize($data->getMinimalPriceReduction(), 'json', $context);
        }
        if ($data->isInitialized('maximumSellingPrice') && null !== $data->getMaximumSellingPrice()) {
            $dataArray['maximumSellingPrice'] = $this->normalizer->normalize($data->getMaximumSellingPrice(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices::class => false];
    }
}