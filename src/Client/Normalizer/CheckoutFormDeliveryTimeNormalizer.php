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
class CheckoutFormDeliveryTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['from']));
            unset($data['from']);
        }
        if (\array_key_exists('to', $data)) {
            $object->setTo(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['to']));
            unset($data['to']);
        }
        if (\array_key_exists('guaranteed', $data)) {
            $object->setGuaranteed($this->denormalizer->denormalize($data['guaranteed'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeGuaranteed::class, 'json', $context));
            unset($data['guaranteed']);
        }
        if (\array_key_exists('dispatch', $data)) {
            $object->setDispatch($this->denormalizer->denormalize($data['dispatch'], \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeDispatch::class, 'json', $context));
            unset($data['dispatch']);
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
        if ($data->isInitialized('from') && null !== $data->getFrom()) {
            $dataArray['from'] = $data->getFrom()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('to') && null !== $data->getTo()) {
            $dataArray['to'] = $data->getTo()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('guaranteed') && null !== $data->getGuaranteed()) {
            $dataArray['guaranteed'] = $this->normalizer->normalize($data->getGuaranteed(), 'json', $context);
        }
        if ($data->isInitialized('dispatch') && null !== $data->getDispatch()) {
            $dataArray['dispatch'] = $this->normalizer->normalize($data->getDispatch(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class => false];
    }
}