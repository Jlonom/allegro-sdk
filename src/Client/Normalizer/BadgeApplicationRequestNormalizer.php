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
class BadgeApplicationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BadgeApplicationRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BadgeApplicationRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BadgeApplicationRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('campaign', $data)) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Jlonom\AllegroSDK\Model\BadgeApplicationCampaign::class, 'json', $context));
            unset($data['campaign']);
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\BadgeApplicationOffer::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $object->setPrices($this->denormalizer->denormalize($data['prices'], \Jlonom\AllegroSDK\Model\BadgeApplicationPrices::class, 'json', $context));
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('purchaseConstraints', $data)) {
            $object->setPurchaseConstraints($this->denormalizer->denormalize($data['purchaseConstraints'], \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraints::class, 'json', $context));
            unset($data['purchaseConstraints']);
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
        $dataArray['campaign'] = $this->normalizer->normalize($data->getCampaign(), 'json', $context);
        $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $dataArray['prices'] = $this->normalizer->normalize($data->getPrices(), 'json', $context);
        }
        if ($data->isInitialized('purchaseConstraints') && null !== $data->getPurchaseConstraints()) {
            $dataArray['purchaseConstraints'] = $this->normalizer->normalize($data->getPurchaseConstraints(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\BadgeApplicationRequest::class => false];
    }
}