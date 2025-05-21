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
class OfferAutomaticPricingModificationSetSetItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemMarketplace::class, 'json', $context));
            unset($data['marketplace']);
        }
        if (\array_key_exists('rule', $data)) {
            $object->setRule($this->denormalizer->denormalize($data['rule'], \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemRule::class, 'json', $context));
            unset($data['rule']);
        }
        if (\array_key_exists('configuration', $data)) {
            $object->setConfiguration($this->denormalizer->denormalize($data['configuration'], \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfiguration::class, 'json', $context));
            unset($data['configuration']);
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
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        $dataArray['rule'] = $this->normalizer->normalize($data->getRule(), 'json', $context);
        if ($data->isInitialized('configuration') && null !== $data->getConfiguration()) {
            $dataArray['configuration'] = $this->normalizer->normalize($data->getConfiguration(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem::class => false];
    }
}