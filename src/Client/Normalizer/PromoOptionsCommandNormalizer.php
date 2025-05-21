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
class PromoOptionsCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\PromoOptionsCommand::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\PromoOptionsCommand::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\PromoOptionsCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offerCriteria', $data)) {
            $values = [];
            foreach ($data['offerCriteria'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\OfferCriterium::class, 'json', $context);
            }
            $object->setOfferCriteria($values);
            unset($data['offerCriteria']);
        }
        if (\array_key_exists('modification', $data)) {
            $object->setModification($this->denormalizer->denormalize($data['modification'], \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class, 'json', $context));
            unset($data['modification']);
        }
        if (\array_key_exists('additionalMarketplaces', $data)) {
            $values_1 = [];
            foreach ($data['additionalMarketplaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsCommandModification::class, 'json', $context);
            }
            $object->setAdditionalMarketplaces($values_1);
            unset($data['additionalMarketplaces']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('offerCriteria') && null !== $data->getOfferCriteria()) {
            $values = [];
            foreach ($data->getOfferCriteria() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['offerCriteria'] = $values;
        }
        if ($data->isInitialized('modification') && null !== $data->getModification()) {
            $dataArray['modification'] = $this->normalizer->normalize($data->getModification(), 'json', $context);
        }
        if ($data->isInitialized('additionalMarketplaces') && null !== $data->getAdditionalMarketplaces()) {
            $values_1 = [];
            foreach ($data->getAdditionalMarketplaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['additionalMarketplaces'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\PromoOptionsCommand::class => false];
    }
}