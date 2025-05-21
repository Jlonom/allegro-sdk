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
class BadgeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Badge::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Badge::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Badge();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('offer', $data)) {
            $object->setOffer($this->denormalizer->denormalize($data['offer'], \Jlonom\AllegroSDK\Model\BadgeApplicationOffer::class, 'json', $context));
            unset($data['offer']);
        }
        if (\array_key_exists('campaign', $data)) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Jlonom\AllegroSDK\Model\OfferBadgeCampaign::class, 'json', $context));
            unset($data['campaign']);
        }
        if (\array_key_exists('publication', $data) && $data['publication'] !== null) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\BadgePublicationTimePolicy::class, 'json', $context));
            unset($data['publication']);
        }
        elseif (\array_key_exists('publication', $data) && $data['publication'] === null) {
            $object->setPublication(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $object->setPrices($this->denormalizer->denormalize($data['prices'], \Jlonom\AllegroSDK\Model\BadgePrices::class, 'json', $context));
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('process', $data)) {
            $object->setProcess($this->denormalizer->denormalize($data['process'], \Jlonom\AllegroSDK\Model\BadgeProcess::class, 'json', $context));
            unset($data['process']);
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
        $dataArray['offer'] = $this->normalizer->normalize($data->getOffer(), 'json', $context);
        $dataArray['campaign'] = $this->normalizer->normalize($data->getCampaign(), 'json', $context);
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $dataArray['prices'] = $this->normalizer->normalize($data->getPrices(), 'json', $context);
        }
        $dataArray['process'] = $this->normalizer->normalize($data->getProcess(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\Badge::class => false];
    }
}