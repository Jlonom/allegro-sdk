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
class MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Message::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Message::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Message();
        if (\array_key_exists('hasAdditionalAttachments', $data) && \is_int($data['hasAdditionalAttachments'])) {
            $data['hasAdditionalAttachments'] = (bool) $data['hasAdditionalAttachments'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
            unset($data['createdAt']);
        }
        if (\array_key_exists('thread', $data)) {
            $object->setThread($this->denormalizer->denormalize($data['thread'], \Jlonom\AllegroSDK\Model\ThreadId::class, 'json', $context));
            unset($data['thread']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Jlonom\AllegroSDK\Model\MessageAuthor::class, 'json', $context));
            unset($data['author']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('relatesTo', $data)) {
            $object->setRelatesTo($this->denormalizer->denormalize($data['relatesTo'], \Jlonom\AllegroSDK\Model\MessageRelatedObject::class, 'json', $context));
            unset($data['relatesTo']);
        }
        if (\array_key_exists('hasAdditionalAttachments', $data)) {
            $object->setHasAdditionalAttachments($data['hasAdditionalAttachments']);
            unset($data['hasAdditionalAttachments']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jlonom\AllegroSDK\Model\MessageAttachmentInfo::class, 'json', $context);
            }
            $object->setAttachments($values);
            unset($data['attachments']);
        }
        if (\array_key_exists('additionalInformation', $data) && $data['additionalInformation'] !== null) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], \Jlonom\AllegroSDK\Model\MessageAdditionalInformation::class, 'json', $context));
            unset($data['additionalInformation']);
        }
        elseif (\array_key_exists('additionalInformation', $data) && $data['additionalInformation'] === null) {
            $object->setAdditionalInformation(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['status'] = $data->getStatus();
        $dataArray['type'] = $data->getType();
        $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['thread'] = $this->normalizer->normalize($data->getThread(), 'json', $context);
        $dataArray['author'] = $this->normalizer->normalize($data->getAuthor(), 'json', $context);
        $dataArray['text'] = $data->getText();
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        $dataArray['relatesTo'] = $this->normalizer->normalize($data->getRelatesTo(), 'json', $context);
        $dataArray['hasAdditionalAttachments'] = $data->getHasAdditionalAttachments();
        $values = [];
        foreach ($data->getAttachments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['attachments'] = $values;
        if ($data->isInitialized('additionalInformation') && null !== $data->getAdditionalInformation()) {
            $dataArray['additionalInformation'] = $this->normalizer->normalize($data->getAdditionalInformation(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jlonom\AllegroSDK\Model\Message::class => false];
    }
}