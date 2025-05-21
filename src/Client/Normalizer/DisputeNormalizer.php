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
class DisputeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jlonom\AllegroSDK\Model\Dispute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jlonom\AllegroSDK\Model\Dispute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jlonom\AllegroSDK\Model\Dispute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], \Jlonom\AllegroSDK\Model\Subject::class, 'json', $context));
            unset($data['subject']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('messagesStatus', $data)) {
            $object->setMessagesStatus($data['messagesStatus']);
            unset($data['messagesStatus']);
        }
        if (\array_key_exists('buyer', $data)) {
            $object->setBuyer($this->denormalizer->denormalize($data['buyer'], \Jlonom\AllegroSDK\Model\DisputeUser::class, 'json', $context));
            unset($data['buyer']);
        }
        if (\array_key_exists('checkoutForm', $data)) {
            $object->setCheckoutForm($this->denormalizer->denormalize($data['checkoutForm'], \Jlonom\AllegroSDK\Model\DisputeCheckoutForm::class, 'json', $context));
            unset($data['checkoutForm']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], \Jlonom\AllegroSDK\Model\DisputeFirstMessage::class, 'json', $context));
            unset($data['message']);
        }
        if (\array_key_exists('messagesCount', $data)) {
            $object->setMessagesCount($data['messagesCount']);
            unset($data['messagesCount']);
        }
        if (\array_key_exists('openedDate', $data)) {
            $object->setOpenedDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['openedDate']));
            unset($data['openedDate']);
        }
        if (\array_key_exists('lastMessageCreationDate', $data)) {
            $object->setLastMessageCreationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastMessageCreationDate']));
            unset($data['lastMessageCreationDate']);
        }
        if (\array_key_exists('claim', $data)) {
            $object->setClaim($this->denormalizer->denormalize($data['claim'], \Jlonom\AllegroSDK\Model\DisputeClaim::class, 'json', $context));
            unset($data['claim']);
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
        $dataArray['subject'] = $this->normalizer->normalize($data->getSubject(), 'json', $context);
        $dataArray['status'] = $data->getStatus();
        $dataArray['messagesStatus'] = $data->getMessagesStatus();
        $dataArray['buyer'] = $this->normalizer->normalize($data->getBuyer(), 'json', $context);
        $dataArray['checkoutForm'] = $this->normalizer->normalize($data->getCheckoutForm(), 'json', $context);
        $dataArray['message'] = $this->normalizer->normalize($data->getMessage(), 'json', $context);
        $dataArray['messagesCount'] = $data->getMessagesCount();
        if ($data->isInitialized('openedDate') && null !== $data->getOpenedDate()) {
            $dataArray['openedDate'] = $data->getOpenedDate()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['lastMessageCreationDate'] = $data->getLastMessageCreationDate()?->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('claim') && null !== $data->getClaim()) {
            $dataArray['claim'] = $this->normalizer->normalize($data->getClaim(), 'json', $context);
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
        return [\Jlonom\AllegroSDK\Model\Dispute::class => false];
    }
}