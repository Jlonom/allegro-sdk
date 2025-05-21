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
class AlleDiscountEligibleOfferDtoAlleDiscountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('campaignConditions', $data)) {
            $object->setCampaignConditions($this->denormalizer->denormalize($data['campaignConditions'], \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions::class, 'json', $context));
            unset($data['campaignConditions']);
        }
        if (\array_key_exists('requiredMerchantPrice', $data)) {
            $object->setRequiredMerchantPrice($this->denormalizer->denormalize($data['requiredMerchantPrice'], \Jlonom\AllegroSDK\Model\AlleDiscountRequiredMerchantPriceDto::class, 'json', $context));
            unset($data['requiredMerchantPrice']);
        }
        if (\array_key_exists('minimumGuaranteedDiscount', $data)) {
            $object->setMinimumGuaranteedDiscount($this->denormalizer->denormalize($data['minimumGuaranteedDiscount'], \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount::class, 'json', $context));
            unset($data['minimumGuaranteedDiscount']);
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
        if ($data->isInitialized('campaignConditions') && null !== $data->getCampaignConditions()) {
            $dataArray['campaignConditions'] = $this->normalizer->normalize($data->getCampaignConditions(), 'json', $context);
        }
        if ($data->isInitialized('requiredMerchantPrice') && null !== $data->getRequiredMerchantPrice()) {
            $dataArray['requiredMerchantPrice'] = $this->normalizer->normalize($data->getRequiredMerchantPrice(), 'json', $context);
        }
        if ($data->isInitialized('minimumGuaranteedDiscount') && null !== $data->getMinimumGuaranteedDiscount()) {
            $dataArray['minimumGuaranteedDiscount'] = $this->normalizer->normalize($data->getMinimumGuaranteedDiscount(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class => false];
    }
}