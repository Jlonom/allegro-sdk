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
class BadgePricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BadgePrices::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BadgePrices::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BadgePrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('market', $data)) {
            $object->setMarket($this->denormalizer->denormalize($data['market'], \Jlonom\AllegroSDK\Model\BadgeMarketPrice::class, 'json', $context));
            unset($data['market']);
        }
        if (\array_key_exists('bargain', $data) && $data['bargain'] !== null) {
            $object->setBargain($this->denormalizer->denormalize($data['bargain'], \Jlonom\AllegroSDK\Model\BadgeApplicationBargainPrice::class, 'json', $context));
            unset($data['bargain']);
        }
        elseif (\array_key_exists('bargain', $data) && $data['bargain'] === null) {
            $object->setBargain(null);
        }
        if (\array_key_exists('subsidy', $data)) {
            $object->setSubsidy($this->denormalizer->denormalize($data['subsidy'], \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class, 'json', $context));
            unset($data['subsidy']);
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
        if ($data->isInitialized('market') && null !== $data->getMarket()) {
            $dataArray['market'] = $this->normalizer->normalize($data->getMarket(), 'json', $context);
        }
        if ($data->isInitialized('bargain') && null !== $data->getBargain()) {
            $dataArray['bargain'] = $this->normalizer->normalize($data->getBargain(), 'json', $context);
        }
        if ($data->isInitialized('subsidy') && null !== $data->getSubsidy()) {
            $dataArray['subsidy'] = $this->normalizer->normalize($data->getSubsidy(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\BadgePrices::class => false];
    }
}