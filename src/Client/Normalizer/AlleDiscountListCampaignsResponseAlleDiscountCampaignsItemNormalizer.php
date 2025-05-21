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
class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem();
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
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($this->denormalizer->denormalize($data['visibility'], \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility::class, 'json', $context));
            unset($data['visibility']);
        }
        if (\array_key_exists('application', $data)) {
            $object->setApplication($this->denormalizer->denormalize($data['application'], \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication::class, 'json', $context));
            unset($data['application']);
        }
        if (\array_key_exists('publication', $data)) {
            $object->setPublication($this->denormalizer->denormalize($data['publication'], \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication::class, 'json', $context));
            unset($data['publication']);
        }
        if (\array_key_exists('marketplace', $data)) {
            $object->setMarketplace($this->denormalizer->denormalize($data['marketplace'], \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace::class, 'json', $context));
            unset($data['marketplace']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('visibility') && null !== $data->getVisibility()) {
            $dataArray['visibility'] = $this->normalizer->normalize($data->getVisibility(), 'json', $context);
        }
        if ($data->isInitialized('application') && null !== $data->getApplication()) {
            $dataArray['application'] = $this->normalizer->normalize($data->getApplication(), 'json', $context);
        }
        if ($data->isInitialized('publication') && null !== $data->getPublication()) {
            $dataArray['publication'] = $this->normalizer->normalize($data->getPublication(), 'json', $context);
        }
        if ($data->isInitialized('marketplace') && null !== $data->getMarketplace()) {
            $dataArray['marketplace'] = $this->normalizer->normalize($data->getMarketplace(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class => false];
    }
}