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
class BadgeCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\BadgeCampaign::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\BadgeCampaign::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\BadgeCampaign();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\MarketplaceReference::class, 'json', $context));
            unset($data['marketplace']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('eligibility', $data)) {
            $object->setEligibility($this->denormalizer->denormalize($data['eligibility'], \Jlonom\AllegroSDK\Model\UserCampaignEligibility::class, 'json', $context));
            unset($data['eligibility']);
        }
        if (\array_key_exists('application', $data)) {
            $object->setApplication($this->denormalizer->denormalize($data['application'], \Jlonom\AllegroSDK\Model\ApplicationTimePolicy::class, 'json', $context));
            unset($data['application']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($this->denormalizer->denormalize($data['visibility'], \Jlonom\AllegroSDK\Model\VisibilityTimePolicy::class, 'json', $context));
            unset($data['visibility']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\PublicationTimePolicy::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('regulationsLink', $data)) {
            $object->setRegulationsLink($data['regulationsLink']);
            unset($data['regulationsLink']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
        $dataArray['type'] = $data->getType();
        $dataArray['eligibility'] = $this->normalizer->normalize($data->getEligibility(), 'json', $context);
        $dataArray['application'] = $this->normalizer->normalize($data->getApplication(), 'json', $context);
        $dataArray['visibility'] = $this->normalizer->normalize($data->getVisibility(), 'json', $context);
        $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        $dataArray['regulationsLink'] = $data->getRegulationsLink();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\BadgeCampaign::class => false];
    }
}