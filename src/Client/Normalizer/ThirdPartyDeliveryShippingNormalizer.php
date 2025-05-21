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
class ThirdPartyDeliveryShippingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($data['method']);
            unset($data['method']);
        }
        if (\array_key_exists('thirdParty', $data)) {
            $object->setThirdParty($this->denormalizer->denormalize($data['thirdParty'], \Jlonom\AllegroSDK\Model\ThirdParty::class, 'json', $context));
            unset($data['thirdParty']);
        }
        if (\array_key_exists('estimatedTimeOfArrival', $data)) {
            $object->setEstimatedTimeOfArrival(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['estimatedTimeOfArrival']));
            unset($data['estimatedTimeOfArrival']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
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
        if ($data->isInitialized('method') && null !== $data->getMethod()) {
            $dataArray['method'] = $data->getMethod();
        }
        if ($data->isInitialized('thirdParty') && null !== $data->getThirdParty()) {
            $dataArray['thirdParty'] = $this->normalizer->normalize($data->getThirdParty(), 'json', $context);
        }
        if ($data->isInitialized('estimatedTimeOfArrival') && null !== $data->getEstimatedTimeOfArrival()) {
            $dataArray['estimatedTimeOfArrival'] = $data->getEstimatedTimeOfArrival()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
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
        return [\Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping::class => false];
    }
}