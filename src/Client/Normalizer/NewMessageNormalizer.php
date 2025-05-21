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
class NewMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\NewMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\NewMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\NewMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recipient', $data)) {
            $object->setRecipient($this->denormalizer->denormalize($data['recipient'], \Jlonom\AllegroSDK\Model\Recipient::class, 'json', $context));
            unset($data['recipient']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('attachments', $data) && $data['attachments'] !== null) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\MessageAttachmentId::class, 'json', $context);
            }
            $object->setAttachments($values);
            unset($data['attachments']);
        }
        elseif (\array_key_exists('attachments', $data) && $data['attachments'] === null) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Jlonom\AllegroSDK\Model\MessageOrder::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['recipient'] = $this->normalizer->normalize($data->getRecipient(), 'json', $context);
        $dataArray['text'] = $data->getText();
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values = [];
            foreach ($data->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attachments'] = $values;
        }
        $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\NewMessage::class => false];
    }
}