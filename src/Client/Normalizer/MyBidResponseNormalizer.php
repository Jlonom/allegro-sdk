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
class MyBidResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\MyBidResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\MyBidResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\MyBidResponse();
        if (\array_key_exists('minimalPriceMet', $data) && \is_int($data['minimalPriceMet'])) {
            $data['minimalPriceMet'] = (bool) $data['minimalPriceMet'];
        }
        if (\array_key_exists('highBidder', $data) && \is_int($data['highBidder'])) {
            $data['highBidder'] = (bool) $data['highBidder'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maxAmount', $data)) {
            $object->setMaxAmount($this->denormalizer->denormalize($data['maxAmount'], \Jlonom\AllegroSDK\Model\MaxPrice::class, 'json', $context));
            unset($data['maxAmount']);
        }
        if (\array_key_exists('minimalPriceMet', $data)) {
            $object->setMinimalPriceMet($data['minimalPriceMet']);
            unset($data['minimalPriceMet']);
        }
        if (\array_key_exists('highBidder', $data)) {
            $object->setHighBidder($data['highBidder']);
            unset($data['highBidder']);
        }
        if (\array_key_exists('auction', $data)) {
            $object->setAuction($this->denormalizer->denormalize($data['auction'], \Jlonom\AllegroSDK\Model\MyBidResponseAuction::class, 'json', $context));
            unset($data['auction']);
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
        $dataArray['maxAmount'] = $this->normalizer->normalize($data->getMaxAmount(), 'json', $context);
        if ($data->isInitialized('minimalPriceMet') && null !== $data->getMinimalPriceMet()) {
            $dataArray['minimalPriceMet'] = $data->getMinimalPriceMet();
        }
        $dataArray['highBidder'] = $data->getHighBidder();
        $dataArray['auction'] = $this->normalizer->normalize($data->getAuction(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\MyBidResponse::class => false];
    }
}