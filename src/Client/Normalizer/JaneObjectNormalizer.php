<?php

namespace Jlonom\AllegroSDK\Normalizer;

use Jlonom\AllegroSDK\Runtime\Normalizer\CheckArray;
use Jlonom\AllegroSDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Jlonom\AllegroSDK\Model\BillingEntries::class => \Jlonom\AllegroSDK\Normalizer\BillingEntriesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntry::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryType::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryTypeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryOffer::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryValue::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryTax::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryTaxNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryBalance::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryBalanceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryOrder::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryOrderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingEntryAdditionalInfoItem::class => \Jlonom\AllegroSDK\Normalizer\BillingEntryAdditionalInfoItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BillingType::class => \Jlonom\AllegroSDK\Normalizer\BillingTypeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\InitializeRefund::class => \Jlonom\AllegroSDK\Normalizer\InitializeRefundNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\InitializeRefundDelivery::class => \Jlonom\AllegroSDK\Normalizer\InitializeRefundDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\InitializeRefundOverpaid::class => \Jlonom\AllegroSDK\Normalizer\InitializeRefundOverpaidNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\InitializeRefundAdditionalServices::class => \Jlonom\AllegroSDK\Normalizer\InitializeRefundAdditionalServicesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaim::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimCommission::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimCommissionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimBuyer::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimBuyerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimLineItem::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimLineItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimLineItemOffer::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimLineItemOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimRequest::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimRequestLineItem::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimRequestLineItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundClaimResponse::class => \Jlonom\AllegroSDK\Normalizer\RefundClaimResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundDetails::class => \Jlonom\AllegroSDK\Normalizer\RefundDetailsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundDetailsDelivery::class => \Jlonom\AllegroSDK\Normalizer\RefundDetailsDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundDetailsOverpaid::class => \Jlonom\AllegroSDK\Normalizer\RefundDetailsOverpaidNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundDetailsAdditionalServices::class => \Jlonom\AllegroSDK\Normalizer\RefundDetailsAdditionalServicesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundLineItem::class => \Jlonom\AllegroSDK\Normalizer\RefundLineItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundLineItemValue::class => \Jlonom\AllegroSDK\Normalizer\RefundLineItemValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundPayment::class => \Jlonom\AllegroSDK\Normalizer\RefundPaymentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRefundRejectionRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequestRejection::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRefundRejectionRequestRejectionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnResponse::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturn::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRejection::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRejectionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnBuyer::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnBuyerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnItem::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRefund::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRefundNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnReturnParcelNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnItemReason::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnItemReasonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRefundBankAccount::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRefundBankAccountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnRefundBankAccountAddress::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnRefundBankAccountAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CustomerReturnParcelSender::class => \Jlonom\AllegroSDK\Normalizer\CustomerReturnParcelSenderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PaymentsSurcharge::class => \Jlonom\AllegroSDK\Normalizer\PaymentsSurchargeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceDefinitionRequest::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceDefinitionRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceRequest::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroup::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroupResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroups::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupTranslationRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationWrapper::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupTranslationWrapperNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceTranslation::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslationResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceGroupTranslationResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslation::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceGroupTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationWrapperWithType::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServicesGroupTranslationWrapperWithTypeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslationPatchResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceGroupTranslationPatchResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Address::class => \Jlonom\AllegroSDK\Normalizer\AddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAdditionalMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OfferAdditionalMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacePublication::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacePublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplaceSellingMode::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplaceSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServices::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesAttachment::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesAttachmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarranty::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicy::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Warranty::class => \Jlonom\AllegroSDK\Normalizer\WarrantyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantyRequest::class => \Jlonom\AllegroSDK\Normalizer\WarrantyRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantyResponse::class => \Jlonom\AllegroSDK\Normalizer\WarrantyResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantyPeriod::class => \Jlonom\AllegroSDK\Normalizer\WarrantyPeriodNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantyAttachment::class => \Jlonom\AllegroSDK\Normalizer\WarrantyAttachmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantyRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarrantyResponse::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantyResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarrantyPeriod::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantyPeriodNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesAddress::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyAddress::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyRequest::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyResponse::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyAvailability::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyAvailabilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RestrictionCause::class => \Jlonom\AllegroSDK\Normalizer\RestrictionCauseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyReturnCost::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyReturnCostNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyContact::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyContactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPolicyOptions::class => \Jlonom\AllegroSDK\Normalizer\ReturnPolicyOptionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Attachment::class => \Jlonom\AllegroSDK\Normalizer\AttachmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingAnswerRequest::class => \Jlonom\AllegroSDK\Normalizer\UserRatingAnswerRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Answer::class => \Jlonom\AllegroSDK\Normalizer\AnswerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AvailableConstraint::class => \Jlonom\AllegroSDK\Normalizer\AvailableConstraintNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AverageRates::class => \Jlonom\AllegroSDK\Normalizer\AverageRatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BasicDefinitionResponse::class => \Jlonom\AllegroSDK\Normalizer\BasicDefinitionResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Benefit::class => \Jlonom\AllegroSDK\Normalizer\BenefitNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BenefitSpecification::class => \Jlonom\AllegroSDK\Normalizer\BenefitSpecificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecification::class => \Jlonom\AllegroSDK\Normalizer\LargeOrderDiscountBenefitSpecificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItem::class => \Jlonom\AllegroSDK\Normalizer\LargeOrderDiscountBenefitSpecificationthresholdsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue::class => \Jlonom\AllegroSDK\Normalizer\LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount::class => \Jlonom\AllegroSDK\Normalizer\LargeOrderDiscountBenefitSpecificationthresholdsItemDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecification::class => \Jlonom\AllegroSDK\Normalizer\WholesalePriceListBenefitSpecificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItem::class => \Jlonom\AllegroSDK\Normalizer\WholesalePriceListBenefitSpecificationthresholdsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItemQuantity::class => \Jlonom\AllegroSDK\Normalizer\WholesalePriceListBenefitSpecificationthresholdsItemQuantityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItemDiscount::class => \Jlonom\AllegroSDK\Normalizer\WholesalePriceListBenefitSpecificationthresholdsItemDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecification::class => \Jlonom\AllegroSDK\Normalizer\MultiPackBenefitSpecificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecificationconfiguration::class => \Jlonom\AllegroSDK\Normalizer\MultiPackBenefitSpecificationconfigurationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecificationtrigger::class => \Jlonom\AllegroSDK\Normalizer\MultiPackBenefitSpecificationtriggerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Caption::class => \Jlonom\AllegroSDK\Normalizer\CaptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoriesDto::class => \Jlonom\AllegroSDK\Normalizer\CategoriesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Category::class => \Jlonom\AllegroSDK\Normalizer\CategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferCategoryRequest::class => \Jlonom\AllegroSDK\Normalizer\OfferCategoryRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferCategory::class => \Jlonom\AllegroSDK\Normalizer\OfferCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductCategory::class => \Jlonom\AllegroSDK\Normalizer\ProductCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDto::class => \Jlonom\AllegroSDK\Normalizer\CategoryDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDtoParent::class => \Jlonom\AllegroSDK\Normalizer\CategoryDtoParentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryOptionsDto::class => \Jlonom\AllegroSDK\Normalizer\CategoryOptionsDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategorySuggestionCategoryNode::class => \Jlonom\AllegroSDK\Normalizer\CategorySuggestionCategoryNodeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategorySuggestionResponse::class => \Jlonom\AllegroSDK\Normalizer\CategorySuggestionResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UnfilledParametersResponse::class => \Jlonom\AllegroSDK\Normalizer\UnfilledParametersResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItem::class => \Jlonom\AllegroSDK\Normalizer\UnfilledParametersResponseOffersItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItemParametersItem::class => \Jlonom\AllegroSDK\Normalizer\UnfilledParametersResponseOffersItemParametersItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItemCategory::class => \Jlonom\AllegroSDK\Normalizer\UnfilledParametersResponseOffersItemCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParametersScheduledChangesResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoryParametersScheduledChangesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChange::class => \Jlonom\AllegroSDK\Normalizer\CategoryParametersScheduledBaseChangeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RequirementChange::class => \Jlonom\AllegroSDK\Normalizer\RequirementChangeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeCategory::class => \Jlonom\AllegroSDK\Normalizer\CategoryParametersScheduledBaseChangeCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeParameter::class => \Jlonom\AllegroSDK\Normalizer\CategoryParametersScheduledBaseChangeParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryEventsResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoryEventsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryBaseEvent::class => \Jlonom\AllegroSDK\Normalizer\CategoryBaseEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryCreatedEvent::class => \Jlonom\AllegroSDK\Normalizer\CategoryCreatedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryRenamedEvent::class => \Jlonom\AllegroSDK\Normalizer\CategoryRenamedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryMovedEvent::class => \Jlonom\AllegroSDK\Normalizer\CategoryMovedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDeletedEvent::class => \Jlonom\AllegroSDK\Normalizer\CategoryDeletedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDeletedEventredirectCategory::class => \Jlonom\AllegroSDK\Normalizer\CategoryDeletedEventredirectCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryEventBaseCategory::class => \Jlonom\AllegroSDK\Normalizer\CategoryEventBaseCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryEventBaseCategoryParent::class => \Jlonom\AllegroSDK\Normalizer\CategoryEventBaseCategoryParentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDto::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListSupportedCategoriesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRulesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductsGroupsDto::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductsGroupsDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductsGroupsDtoGroupsItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductsGroupsDtoGroupsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductsListDto::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductsListDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductDto::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductDtoGroup::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductDtoGroupNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibleProductDtoAttributesItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibleProductDtoAttributesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Cells::class => \Jlonom\AllegroSDK\Normalizer\CellsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRulesResponse::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRulesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRules::class => \Jlonom\AllegroSDK\Normalizer\OfferRulesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRulesRulesItem::class => \Jlonom\AllegroSDK\Normalizer\OfferRulesRulesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRulesRulesItemMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OfferRulesRulesItemMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRulesRulesItemRule::class => \Jlonom\AllegroSDK\Normalizer\OfferRulesRulesItemRuleNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSet::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationSetNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationSetSetItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationSetSetItemMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemRule::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationSetSetItemRuleNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemove::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationRemoveNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemoveRemoveItem::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationRemoveRemoveItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemoveRemoveItemMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OfferAutomaticPricingModificationRemoveRemoveItemMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleResponse::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmount::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleConfigurationChangeByAmountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByPercentage::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleConfigurationChangeByPercentageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRulePostRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingRulePutRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfiguration::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingOfferRuleConfigurationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRange::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingOfferRuleConfigurationPriceRangeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingOfferRuleConfigurationPriceRangeMinPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice::class => \Jlonom\AllegroSDK\Normalizer\AutomaticPricingOfferRuleConfigurationPriceRangeMaxPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ChangePrice::class => \Jlonom\AllegroSDK\Normalizer\ChangePriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ChangePriceInput::class => \Jlonom\AllegroSDK\Normalizer\ChangePriceInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ChangePriceWithoutOutput::class => \Jlonom\AllegroSDK\Normalizer\ChangePriceWithoutOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CommandOutput::class => \Jlonom\AllegroSDK\Normalizer\CommandOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CommandTask::class => \Jlonom\AllegroSDK\Normalizer\CommandTaskNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityList::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListManual::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListManualNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListManualType::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListManualTypeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListProductBased::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListProductBasedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListProductBasedProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListProductBasedProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListItemProductBased::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListItemProductBasedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListTextItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListTextItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListIdItem::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListIdItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompatibilityListIdItemAdditionalInfo::class => \Jlonom\AllegroSDK\Normalizer\CompatibilityListIdItemAdditionalInfoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Configuration::class => \Jlonom\AllegroSDK\Normalizer\ConfigurationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ConstraintCriteria::class => \Jlonom\AllegroSDK\Normalizer\ConstraintCriteriaNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ContactRequest::class => \Jlonom\AllegroSDK\Normalizer\ContactRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ContactResponse::class => \Jlonom\AllegroSDK\Normalizer\ContactResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ContactResponseList::class => \Jlonom\AllegroSDK\Normalizer\ContactResponseListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Coordinates::class => \Jlonom\AllegroSDK\Normalizer\CoordinatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoriesResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoriesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryBasic::class => \Jlonom\AllegroSDK\Normalizer\DeliveryBasicNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryFull::class => \Jlonom\AllegroSDK\Normalizer\DeliveryFullNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescriptionSection::class => \Jlonom\AllegroSDK\Normalizer\DescriptionSectionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescriptionSectionItem::class => \Jlonom\AllegroSDK\Normalizer\DescriptionSectionItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescriptionSectionItemText::class => \Jlonom\AllegroSDK\Normalizer\DescriptionSectionItemTextNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescriptionSectionItemImage::class => \Jlonom\AllegroSDK\Normalizer\DescriptionSectionItemImageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\EmailRequest::class => \Jlonom\AllegroSDK\Normalizer\EmailRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\EmailResponse::class => \Jlonom\AllegroSDK\Normalizer\EmailResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error::class => \Jlonom\AllegroSDK\Normalizer\ErrorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ErrorsHolder::class => \Jlonom\AllegroSDK\Normalizer\ErrorsHolderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AuthError::class => \Jlonom\AllegroSDK\Normalizer\AuthErrorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Fee::class => \Jlonom\AllegroSDK\Normalizer\FeeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoryResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDefinitionResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoryDefinitionResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryDefinitionDescriptionResponse::class => \Jlonom\AllegroSDK\Normalizer\CategoryDefinitionDescriptionResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FeePreviewResponse::class => \Jlonom\AllegroSDK\Normalizer\FeePreviewResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CommissionResponse::class => \Jlonom\AllegroSDK\Normalizer\CommissionResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\QuoteResponse::class => \Jlonom\AllegroSDK\Normalizer\QuoteResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\GeneralReport::class => \Jlonom\AllegroSDK\Normalizer\GeneralReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Header::class => \Jlonom\AllegroSDK\Normalizer\HeaderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImageUrl::class => \Jlonom\AllegroSDK\Normalizer\ImageUrlNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarrantyBasic::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantyBasicNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\JustId::class => \Jlonom\AllegroSDK\Normalizer\JustIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ExternalId::class => \Jlonom\AllegroSDK\Normalizer\ExternalIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Location::class => \Jlonom\AllegroSDK\Normalizer\LocationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Modification::class => \Jlonom\AllegroSDK\Normalizer\ModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationDelivery::class => \Jlonom\AllegroSDK\Normalizer\ModificationDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationDiscounts::class => \Jlonom\AllegroSDK\Normalizer\ModificationDiscountsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationDiscountsWholesalePriceList::class => \Jlonom\AllegroSDK\Normalizer\ModificationDiscountsWholesalePriceListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationPublication::class => \Jlonom\AllegroSDK\Normalizer\ModificationPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationResponsiblePerson::class => \Jlonom\AllegroSDK\Normalizer\ModificationResponsiblePersonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationResponsibleProducer::class => \Jlonom\AllegroSDK\Normalizer\ModificationResponsibleProducerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ModificationSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationNoSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ModificationNoSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationAttachmentSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ModificationAttachmentSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationAttachmentSafetyInformationattachmentsItem::class => \Jlonom\AllegroSDK\Normalizer\ModificationAttachmentSafetyInformationattachmentsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationTextSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ModificationTextSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ModificationPayments::class => \Jlonom\AllegroSDK\Normalizer\ModificationPaymentsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTable::class => \Jlonom\AllegroSDK\Normalizer\SizeTableNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Contact::class => \Jlonom\AllegroSDK\Normalizer\ContactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferFundraisingCampaignRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferFundraisingCampaignRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferFundraisingCampaignResponse::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferFundraisingCampaignResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferAdditionalServicesRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferAdditionalServicesRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferAdditionalServicesResponse::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferAdditionalServicesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferAttachmentItem::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferAttachmentItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAttachment::class => \Jlonom\AllegroSDK\Normalizer\OfferAttachmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicOfferPreviewRequest::class => \Jlonom\AllegroSDK\Normalizer\PublicOfferPreviewRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedsPackages::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedsPackagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPackage::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedExtraPackage::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedExtraPackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAttachmentRequest::class => \Jlonom\AllegroSDK\Normalizer\OfferAttachmentRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AttachmentFile::class => \Jlonom\AllegroSDK\Normalizer\AttachmentFileNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AttachmentFileRequest::class => \Jlonom\AllegroSDK\Normalizer\AttachmentFileRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferImageLinkUploadRequest::class => \Jlonom\AllegroSDK\Normalizer\OfferImageLinkUploadRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferImageUploadResponse::class => \Jlonom\AllegroSDK\Normalizer\OfferImageUploadResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PricingOffer::class => \Jlonom\AllegroSDK\Normalizer\PricingOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferChangeCommand::class => \Jlonom\AllegroSDK\Normalizer\OfferChangeCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand::class => \Jlonom\AllegroSDK\Normalizer\OfferPriceChangeCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModification::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationFixedPrice::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationFixedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationValueChangeIncrease::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationValueChangeIncreaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationValueChangeDecrease::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationValueChangeDecreaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeIncrease::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationPercentageChangeIncreaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeDecrease::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationPercentageChangeDecreaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationFixedPriceHolder::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationFixedPriceHolderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceModificationValueChangeHolder::class => \Jlonom\AllegroSDK\Normalizer\PriceModificationValueChangeHolderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferQuantityChangeCommand::class => \Jlonom\AllegroSDK\Normalizer\OfferQuantityChangeCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\QuantityModification::class => \Jlonom\AllegroSDK\Normalizer\QuantityModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerRebateOfferCriterion::class => \Jlonom\AllegroSDK\Normalizer\SellerRebateOfferCriterionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerRebateOfferCriterionOffersItem::class => \Jlonom\AllegroSDK\Normalizer\SellerRebateOfferCriterionOffersItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferCriterium::class => \Jlonom\AllegroSDK\Normalizer\OfferCriteriumNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferId::class => \Jlonom\AllegroSDK\Normalizer\OfferIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferQuoteDto::class => \Jlonom\AllegroSDK\Normalizer\OfferQuoteDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferQuotesDto::class => \Jlonom\AllegroSDK\Normalizer\OfferQuotesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferStatsResponseDto::class => \Jlonom\AllegroSDK\Normalizer\OfferStatsResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerOfferStatsResponseDto::class => \Jlonom\AllegroSDK\Normalizer\SellerOfferStatsResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferStatResponseDto::class => \Jlonom\AllegroSDK\Normalizer\OfferStatResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferStatModelDto::class => \Jlonom\AllegroSDK\Normalizer\OfferStatModelDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedEventStat::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedEventStatNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedDailyEventStatResponseDto::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedDailyEventStatResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OpenHour::class => \Jlonom\AllegroSDK\Normalizer\OpenHourNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Order::class => \Jlonom\AllegroSDK\Normalizer\OrderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderOffersItem::class => \Jlonom\AllegroSDK\Normalizer\OrderOffersItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Parameter::class => \Jlonom\AllegroSDK\Normalizer\ParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameter::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryProductParameter::class => \Jlonom\AllegroSDK\Normalizer\CategoryProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameter::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryProductParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameterdictionaryItem::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryProductParameterdictionaryItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\IntegerCategoryProductParameter::class => \Jlonom\AllegroSDK\Normalizer\IntegerCategoryProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\IntegerCategoryProductParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\IntegerCategoryProductParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FloatCategoryProductParameter::class => \Jlonom\AllegroSDK\Normalizer\FloatCategoryProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\FloatCategoryProductParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StringCategoryProductParameter::class => \Jlonom\AllegroSDK\Normalizer\StringCategoryProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\StringCategoryProductParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterOptions::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterOptionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryParameter::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterdictionaryItem::class => \Jlonom\AllegroSDK\Normalizer\DictionaryCategoryParameterdictionaryItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\IntegerCategoryParameter::class => \Jlonom\AllegroSDK\Normalizer\IntegerCategoryParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\IntegerCategoryParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\IntegerCategoryParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FloatCategoryParameter::class => \Jlonom\AllegroSDK\Normalizer\FloatCategoryParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FloatCategoryParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\FloatCategoryParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StringCategoryParameter::class => \Jlonom\AllegroSDK\Normalizer\StringCategoryParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StringCategoryParameterrestrictions::class => \Jlonom\AllegroSDK\Normalizer\StringCategoryParameterrestrictionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParameterRangeValue::class => \Jlonom\AllegroSDK\Normalizer\ParameterRangeValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterRequirementConditions::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterRequirementConditionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterDisplayConditions::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterDisplayConditionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterWithValue::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterWithValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterWithoutValue::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterWithoutValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryParameterList::class => \Jlonom\AllegroSDK\Normalizer\CategoryParameterListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryProductParameterList::class => \Jlonom\AllegroSDK\Normalizer\CategoryProductParameterListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Payment::class => \Jlonom\AllegroSDK\Normalizer\PaymentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Payments::class => \Jlonom\AllegroSDK\Normalizer\PaymentsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PhonesRequest::class => \Jlonom\AllegroSDK\Normalizer\PhonesRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PhonesResponse::class => \Jlonom\AllegroSDK\Normalizer\PhonesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Pos::class => \Jlonom\AllegroSDK\Normalizer\PosNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PosLocation::class => \Jlonom\AllegroSDK\Normalizer\PosLocationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Price::class => \Jlonom\AllegroSDK\Normalizer\PriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Promotion::class => \Jlonom\AllegroSDK\Normalizer\PromotionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicTableDto::class => \Jlonom\AllegroSDK\Normalizer\PublicTableDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicTablesDto::class => \Jlonom\AllegroSDK\Normalizer\PublicTablesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTableTemplateImageResponse::class => \Jlonom\AllegroSDK\Normalizer\SizeTableTemplateImageResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTableTemplateResponse::class => \Jlonom\AllegroSDK\Normalizer\SizeTableTemplateResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTableTemplatesResponse::class => \Jlonom\AllegroSDK\Normalizer\SizeTableTemplatesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTablePostRequest::class => \Jlonom\AllegroSDK\Normalizer\SizeTablePostRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SizeTablePutRequest::class => \Jlonom\AllegroSDK\Normalizer\SizeTablePutRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PricingPublication::class => \Jlonom\AllegroSDK\Normalizer\PricingPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicationRequest::class => \Jlonom\AllegroSDK\Normalizer\PublicationRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Publication::class => \Jlonom\AllegroSDK\Normalizer\PublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto::class => \Jlonom\AllegroSDK\Normalizer\PublicationChangeCommandDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Rates::class => \Jlonom\AllegroSDK\Normalizer\RatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Reference::class => \Jlonom\AllegroSDK\Normalizer\ReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalesQualityHistoryResponse::class => \Jlonom\AllegroSDK\Normalizer\SalesQualityHistoryResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalesQualityForDay::class => \Jlonom\AllegroSDK\Normalizer\SalesQualityForDayNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalesQualityMetric::class => \Jlonom\AllegroSDK\Normalizer\SalesQualityMetricNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Removal::class => \Jlonom\AllegroSDK\Normalizer\RemovalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RemovalRequest::class => \Jlonom\AllegroSDK\Normalizer\RemovalRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest::class => \Jlonom\AllegroSDK\Normalizer\UserRatingRemovalRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingRemovalRequestRequest::class => \Jlonom\AllegroSDK\Normalizer\UserRatingRemovalRequestRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SearchResult::class => \Jlonom\AllegroSDK\Normalizer\SearchResultNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Seller::class => \Jlonom\AllegroSDK\Normalizer\SellerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateOfferBundleDTO::class => \Jlonom\AllegroSDK\Normalizer\CreateOfferBundleDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BundledOfferDTO::class => \Jlonom\AllegroSDK\Normalizer\BundledOfferDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BundleDiscountDTO::class => \Jlonom\AllegroSDK\Normalizer\BundleDiscountDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBundleDTO::class => \Jlonom\AllegroSDK\Normalizer\OfferBundleDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBundleDTOPublication::class => \Jlonom\AllegroSDK\Normalizer\OfferBundleDTOPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBundlesDTO::class => \Jlonom\AllegroSDK\Normalizer\OfferBundlesDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBundlesDTONextPage::class => \Jlonom\AllegroSDK\Normalizer\OfferBundlesDTONextPageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BundleMarketplaceDTO::class => \Jlonom\AllegroSDK\Normalizer\BundleMarketplaceDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO::class => \Jlonom\AllegroSDK\Normalizer\UpdateOfferBundleDiscountDTONormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto::class => \Jlonom\AllegroSDK\Normalizer\SellerCreateRebateRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerRebateDto::class => \Jlonom\AllegroSDK\Normalizer\SellerRebateDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerRebatesDto::class => \Jlonom\AllegroSDK\Normalizer\SellerRebatesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRate::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRateDeliveryMethod::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateDeliveryMethodNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRateMaxPackageWeight::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateMaxPackageWeightNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRateFirstItemRate::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateFirstItemRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRateNextItemRate::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateNextItemRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRateShippingTime::class => \Jlonom\AllegroSDK\Normalizer\ShippingRateShippingTimeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRates::class => \Jlonom\AllegroSDK\Normalizer\ShippingRatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferShippingRates::class => \Jlonom\AllegroSDK\Normalizer\OfferShippingRatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingRatesSet::class => \Jlonom\AllegroSDK\Normalizer\ShippingRatesSetNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponse::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponseMarketplace::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponseFreeDelivery::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseFreeDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponseAbroadFreeDelivery::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseAbroadFreeDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponseJoinPolicy::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseJoinPolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsResponseCustomCost::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsResponseCustomCostNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequest::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequestMarketplace::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequestFreeDelivery::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestFreeDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequestAbroadFreeDelivery::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestAbroadFreeDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequestJoinPolicy::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestJoinPolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliverySettingsRequestCustomCost::class => \Jlonom\AllegroSDK\Normalizer\DeliverySettingsRequestCustomCostNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StandardizedDescription::class => \Jlonom\AllegroSDK\Normalizer\StandardizedDescriptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Discounts::class => \Jlonom\AllegroSDK\Normalizer\DiscountsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DiscountsWholesalePriceList::class => \Jlonom\AllegroSDK\Normalizer\DiscountsWholesalePriceListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Stock::class => \Jlonom\AllegroSDK\Normalizer\StockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaskCount::class => \Jlonom\AllegroSDK\Normalizer\TaskCountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaskReport::class => \Jlonom\AllegroSDK\Normalizer\TaskReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\User::class => \Jlonom\AllegroSDK\Normalizer\UserNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRating::class => \Jlonom\AllegroSDK\Normalizer\UserRatingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingListResponse::class => \Jlonom\AllegroSDK\Normalizer\UserRatingListResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponse::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseNotRecommended::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseNotRecommendedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseRecommended::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseRecommendedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Recommended::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2RecommendedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2NotRecommended::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2NotRecommendedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2StatisticsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsReceived::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2StatisticsReceivedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsExcluded::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2StatisticsExcludedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsRemoved::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2StatisticsRemovedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2User::class => \Jlonom\AllegroSDK\Normalizer\UserRatingSummaryResponseV2UserNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Validation::class => \Jlonom\AllegroSDK\Normalizer\ValidationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ValidationError::class => \Jlonom\AllegroSDK\Normalizer\ValidationErrorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ValidationWarning::class => \Jlonom\AllegroSDK\Normalizer\ValidationWarningNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantyBasic::class => \Jlonom\AllegroSDK\Normalizer\WarrantyBasicNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescribesListingFee::class => \Jlonom\AllegroSDK\Normalizer\DescribesListingFeeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DescribesSuccessCommissionFee::class => \Jlonom\AllegroSDK\Normalizer\DescribesSuccessCommissionFeeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ImpliedWarrantiesListImpliedWarrantyBasic::class => \Jlonom\AllegroSDK\Normalizer\ImpliedWarrantiesListImpliedWarrantyBasicNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParametersForPreviewPrice::class => \Jlonom\AllegroSDK\Normalizer\ParametersForPreviewPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicationModification::class => \Jlonom\AllegroSDK\Normalizer\PublicationModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReturnPoliciesListReturnPolicy::class => \Jlonom\AllegroSDK\Normalizer\ReturnPoliciesListReturnPolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WarrantiesListWarrantyBasic::class => \Jlonom\AllegroSDK\Normalizer\WarrantiesListWarrantyBasicNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WrapperTypeForPreviewConditions::class => \Jlonom\AllegroSDK\Normalizer\WrapperTypeForPreviewConditionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WrapsListingAndCommissionsFees::class => \Jlonom\AllegroSDK\Normalizer\WrapsListingAndCommissionsFeesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSet::class => \Jlonom\AllegroSDK\Normalizer\VariantSetNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSetResponse::class => \Jlonom\AllegroSDK\Normalizer\VariantSetResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSetOffer::class => \Jlonom\AllegroSDK\Normalizer\VariantSetOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSetParameter::class => \Jlonom\AllegroSDK\Normalizer\VariantSetParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSets::class => \Jlonom\AllegroSDK\Normalizer\VariantSetsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VariantSetsVariantSet::class => \Jlonom\AllegroSDK\Normalizer\VariantSetsVariantSetNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingOffer::class => \Jlonom\AllegroSDK\Normalizer\ListingOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingCategoryWithCount::class => \Jlonom\AllegroSDK\Normalizer\ListingCategoryWithCountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingCategory::class => \Jlonom\AllegroSDK\Normalizer\ListingCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponse::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferSeller::class => \Jlonom\AllegroSDK\Normalizer\OfferSellerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferStock::class => \Jlonom\AllegroSDK\Normalizer\OfferStockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPromotion::class => \Jlonom\AllegroSDK\Normalizer\OfferPromotionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferLowestPrice::class => \Jlonom\AllegroSDK\Normalizer\OfferLowestPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPrice::class => \Jlonom\AllegroSDK\Normalizer\OfferPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferFixedPrice::class => \Jlonom\AllegroSDK\Normalizer\OfferFixedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferDelivery::class => \Jlonom\AllegroSDK\Normalizer\OfferDeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferImages::class => \Jlonom\AllegroSDK\Normalizer\OfferImagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferSellingMode::class => \Jlonom\AllegroSDK\Normalizer\OfferSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferVendor::class => \Jlonom\AllegroSDK\Normalizer\OfferVendorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPublication::class => \Jlonom\AllegroSDK\Normalizer\OfferPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseOffers::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseOffersNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseCategories::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseCategoriesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseFiltersValues::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseFiltersValuesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseFilters::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseFiltersNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseSearchMeta::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseSearchMetaNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ListingResponseSort::class => \Jlonom\AllegroSDK\Normalizer\ListingResponseSortNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferAdditionalServices::class => \Jlonom\AllegroSDK\Normalizer\OfferAdditionalServicesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OffersSearchResultDto::class => \Jlonom\AllegroSDK\Normalizer\OffersSearchResultDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDto::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoImage::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoImageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellingMode::class => \Jlonom\AllegroSDK\Normalizer\SellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellingModeWithNetPrice::class => \Jlonom\AllegroSDK\Normalizer\SellingModeWithNetPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BuyNowPrice::class => \Jlonom\AllegroSDK\Normalizer\BuyNowPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MinimalPrice::class => \Jlonom\AllegroSDK\Normalizer\MinimalPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StartingPrice::class => \Jlonom\AllegroSDK\Normalizer\StartingPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NetPrice::class => \Jlonom\AllegroSDK\Normalizer\NetPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CurrentPrice::class => \Jlonom\AllegroSDK\Normalizer\CurrentPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MaxPrice::class => \Jlonom\AllegroSDK\Normalizer\MaxPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceAutomation::class => \Jlonom\AllegroSDK\Normalizer\PriceAutomationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PriceAutomationRule::class => \Jlonom\AllegroSDK\Normalizer\PriceAutomationRuleNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Tax::class => \Jlonom\AllegroSDK\Normalizer\TaxNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTaxSettings::class => \Jlonom\AllegroSDK\Normalizer\OfferTaxSettingsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTaxRate::class => \Jlonom\AllegroSDK\Normalizer\OfferTaxRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1B2b::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1B2bNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1Delivery::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1DeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1SellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1SaleInfo::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1SaleInfoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stock::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1StockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stats::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1StatsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1Publication::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1PublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1PublicationMarketplaces::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1PublicationMarketplacesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1PublicationMarketplacesBase::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1PublicationMarketplacesBaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceReference::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplacePublication::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplacePublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceSellingMode::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplaceSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStats::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplaceStatsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStock::class => \Jlonom\AllegroSDK\Normalizer\OfferListingDtoV1AdditionalMarketplaceStockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderEventsList::class => \Jlonom\AllegroSDK\Normalizer\OrderEventsListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderEvent::class => \Jlonom\AllegroSDK\Normalizer\OrderEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderEventData::class => \Jlonom\AllegroSDK\Normalizer\OrderEventDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerReference::class => \Jlonom\AllegroSDK\Normalizer\SellerReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferReference::class => \Jlonom\AllegroSDK\Normalizer\OfferReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferProductSetReference::class => \Jlonom\AllegroSDK\Normalizer\OfferProductSetReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferProductSetProductReference::class => \Jlonom\AllegroSDK\Normalizer\OfferProductSetProductReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BuyerReference::class => \Jlonom\AllegroSDK\Normalizer\BuyerReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BuyerPreferencesReference::class => \Jlonom\AllegroSDK\Normalizer\BuyerPreferencesReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderLineItem::class => \Jlonom\AllegroSDK\Normalizer\OrderLineItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderLineItemOfferReference::class => \Jlonom\AllegroSDK\Normalizer\OrderLineItemOfferReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderEventStats::class => \Jlonom\AllegroSDK\Normalizer\OrderEventStatsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LatestOrderEvent::class => \Jlonom\AllegroSDK\Normalizer\LatestOrderEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderMarketplace::class => \Jlonom\AllegroSDK\Normalizer\OrderMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutForms::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutForm::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormBuyerReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormBuyerReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormBuyerAddressReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormBuyerAddressReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormPaymentReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormFulfillmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormFulfillmentShipmentSummary::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormFulfillmentShipmentSummaryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryAddress::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryMethod::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryMethodNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryPickupPoint::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryPickupPointNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryPickupPointAddress::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryPickupPointAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryTimeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeGuaranteed::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryTimeGuaranteedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeDispatch::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryTimeDispatchNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryCancellation::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDeliveryCancellationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceInfo::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormInvoiceInfoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddress::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormInvoiceAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressCompany::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormInvoiceAddressCompanyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressCompanyId::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormInvoiceAddressCompanyIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressNaturalPerson::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormInvoiceAddressNaturalPersonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormLineItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LineItemReconciliation::class => \Jlonom\AllegroSDK\Normalizer\LineItemReconciliationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormAdditionalService::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormAdditionalServiceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LineItemVoucher::class => \Jlonom\AllegroSDK\Normalizer\LineItemVoucherNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LineItemVoucherValue::class => \Jlonom\AllegroSDK\Normalizer\LineItemVoucherValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormLineItemTax::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormLineItemTaxNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LineItemDiscount::class => \Jlonom\AllegroSDK\Normalizer\LineItemDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormDiscount::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormNoteReference::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormNoteReferenceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormMarketplace::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormSummary::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormSummaryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormSummaryTotalToPay::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormSummaryTotalToPayNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoices::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormsOrderInvoicesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoice::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormsOrderInvoiceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoiceFile::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormsOrderInvoiceFileNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoiceFileSecurityVerification::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormsOrderInvoiceFileSecurityVerificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoice::class => \Jlonom\AllegroSDK\Normalizer\CheckFormsNewOrderInvoiceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoiceFile::class => \Jlonom\AllegroSDK\Normalizer\CheckFormsNewOrderInvoiceFileNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoiceId::class => \Jlonom\AllegroSDK\Normalizer\CheckFormsNewOrderInvoiceIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeListResponse::class => \Jlonom\AllegroSDK\Normalizer\DisputeListResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Dispute::class => \Jlonom\AllegroSDK\Normalizer\DisputeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Subject::class => \Jlonom\AllegroSDK\Normalizer\SubjectNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeClaim::class => \Jlonom\AllegroSDK\Normalizer\DisputeClaimNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeUser::class => \Jlonom\AllegroSDK\Normalizer\DisputeUserNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeMessageList::class => \Jlonom\AllegroSDK\Normalizer\DisputeMessageListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeFirstMessage::class => \Jlonom\AllegroSDK\Normalizer\DisputeFirstMessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeMessage::class => \Jlonom\AllegroSDK\Normalizer\DisputeMessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeMessageAuthor::class => \Jlonom\AllegroSDK\Normalizer\DisputeMessageAuthorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeAttachment::class => \Jlonom\AllegroSDK\Normalizer\DisputeAttachmentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeAttachmentId::class => \Jlonom\AllegroSDK\Normalizer\DisputeAttachmentIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AttachmentDeclaration::class => \Jlonom\AllegroSDK\Normalizer\AttachmentDeclarationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeCheckoutForm::class => \Jlonom\AllegroSDK\Normalizer\DisputeCheckoutFormNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DisputeAuthor::class => \Jlonom\AllegroSDK\Normalizer\DisputeAuthorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageRequest::class => \Jlonom\AllegroSDK\Normalizer\MessageRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TagRequest::class => \Jlonom\AllegroSDK\Normalizer\TagRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TagId::class => \Jlonom\AllegroSDK\Normalizer\TagIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TagResponse::class => \Jlonom\AllegroSDK\Normalizer\TagResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TagListResponse::class => \Jlonom\AllegroSDK\Normalizer\TagListResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TagIdsRequest::class => \Jlonom\AllegroSDK\Normalizer\TagIdsRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromotionResponseDto::class => \Jlonom\AllegroSDK\Normalizer\PromotionResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CampaignResponseDto::class => \Jlonom\AllegroSDK\Normalizer\CampaignResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SinglePromotionCampaignResponseDto::class => \Jlonom\AllegroSDK\Normalizer\SinglePromotionCampaignResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromotionCampaignsResponseDto::class => \Jlonom\AllegroSDK\Normalizer\PromotionCampaignsResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromotionCampaignResponseDto::class => \Jlonom\AllegroSDK\Normalizer\PromotionCampaignResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CampaignRequestDto::class => \Jlonom\AllegroSDK\Normalizer\CampaignRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromotionRequestDto::class => \Jlonom\AllegroSDK\Normalizer\PromotionRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequest::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormAddWaybillRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequestLineItemsItem::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormAddWaybillRequestLineItemsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrdersShippingCarrier::class => \Jlonom\AllegroSDK\Normalizer\OrdersShippingCarrierNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillCreated::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormAddWaybillCreatedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrdersShippingCarriersResponse::class => \Jlonom\AllegroSDK\Normalizer\OrdersShippingCarriersResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CheckoutFormOrderWaybillResponse::class => \Jlonom\AllegroSDK\Normalizer\CheckoutFormOrderWaybillResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointsResponse::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CarrierParcelTrackingResponse::class => \Jlonom\AllegroSDK\Normalizer\CarrierParcelTrackingResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\GetSaleProductsResponse::class => \Jlonom\AllegroSDK\Normalizer\GetSaleProductsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\GetSaleProductsResponseNextPage::class => \Jlonom\AllegroSDK\Normalizer\GetSaleProductsResponseNextPageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductProposalsRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductProposalsRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductChangeProposalDto::class => \Jlonom\AllegroSDK\Normalizer\ProductChangeProposalDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductImageProposal::class => \Jlonom\AllegroSDK\Normalizer\ProductImageProposalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductNameProposal::class => \Jlonom\AllegroSDK\Normalizer\ProductNameProposalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductCategoryProposal::class => \Jlonom\AllegroSDK\Normalizer\ProductCategoryProposalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameterProposal::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterProposalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameterValueProposal::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterValueProposalNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductChangeProposalRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductChangesResponse::class => \Jlonom\AllegroSDK\Normalizer\ProductChangesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductChangeDto::class => \Jlonom\AllegroSDK\Normalizer\ProductChangeDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductChangeDtoProduct::class => \Jlonom\AllegroSDK\Normalizer\ProductChangeDtoProductNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ChangedParameterDto::class => \Jlonom\AllegroSDK\Normalizer\ChangedParameterDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductDto::class => \Jlonom\AllegroSDK\Normalizer\SaleProductDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductDtoPublication::class => \Jlonom\AllegroSDK\Normalizer\SaleProductDtoPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductProposalsResponse::class => \Jlonom\AllegroSDK\Normalizer\ProductProposalsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductProposalsResponseCategory::class => \Jlonom\AllegroSDK\Normalizer\ProductProposalsResponseCategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductProposalsResponseCategorysimilarItem::class => \Jlonom\AllegroSDK\Normalizer\ProductProposalsResponseCategorysimilarItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductProposalsResponsePublication::class => \Jlonom\AllegroSDK\Normalizer\ProductProposalsResponsePublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BaseSaleProductResponseDto::class => \Jlonom\AllegroSDK\Normalizer\BaseSaleProductResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BaseSaleProductResponseDtoPublication::class => \Jlonom\AllegroSDK\Normalizer\BaseSaleProductResponseDtoPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSafetyDto::class => \Jlonom\AllegroSDK\Normalizer\ProductSafetyDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSafetyDtoSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ProductSafetyDtoSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductCategoryWithPath::class => \Jlonom\AllegroSDK\Normalizer\ProductCategoryWithPathNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSimilarCategoryWithPath::class => \Jlonom\AllegroSDK\Normalizer\ProductSimilarCategoryWithPathNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductCompatibilityList::class => \Jlonom\AllegroSDK\Normalizer\SaleProductCompatibilityListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class => \Jlonom\AllegroSDK\Normalizer\SaleProductResponseCategoriesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductsCategorySubcategories::class => \Jlonom\AllegroSDK\Normalizer\ProductsCategorySubcategoriesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductsCategoryPath::class => \Jlonom\AllegroSDK\Normalizer\ProductsCategoryPathNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameter::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameterOptions::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterOptionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SupplierDto::class => \Jlonom\AllegroSDK\Normalizer\SupplierDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NewProductParameterDto::class => \Jlonom\AllegroSDK\Normalizer\NewProductParameterDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameterDto::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class => \Jlonom\AllegroSDK\Normalizer\ProductParameterDtoOptionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AiCoCreatedContent::class => \Jlonom\AllegroSDK\Normalizer\AiCoCreatedContentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TrustedContent::class => \Jlonom\AllegroSDK\Normalizer\TrustedContentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOffer::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecategory::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBasecategoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasepublication::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBasepublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasedelivery::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBasedeliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasesizeTable::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBasesizeTableNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecontact::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestBasecontactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOffersRequestStock::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOffersRequestStockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestV1Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1productSetItem::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestV1productSetItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1delivery::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestV1deliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1compatibilityList::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferRequestV1compatibilityListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPatchRequestV1Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1productSetItem::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPatchRequestV1productSetItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1compatibilityList::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPatchRequestV1compatibilityListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1delivery::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPatchRequestV1deliveryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1productSetItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemproduct::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1productSetItemproductNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsiblePerson::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1productSetItemresponsiblePersonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsibleProducer::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1productSetItemresponsibleProducerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1contact::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferResponseV1contactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\SalePartialProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseStock::class => \Jlonom\AllegroSDK\Normalizer\SalePartialProductOfferResponseStockNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseSellingMode::class => \Jlonom\AllegroSDK\Normalizer\SalePartialProductOfferResponseSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\SalePartialProductOfferResponseAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode::class => \Jlonom\AllegroSDK\Normalizer\SalePartialProductOfferResponseAdditionalMarketplacesItemSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferStatusResponse::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferStatusResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferStatusResponseOperation::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferStatusResponseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferBase::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferBaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOffer::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElement::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementQuantity::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementQuantityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementQuantityQuantity::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementQuantityQuantityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsiblePersonRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsiblePersonRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsiblePersonRequestResponsiblePerson::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsiblePersonRequestResponsiblePersonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerRequestWrapper::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsibleProducerRequestWrapperNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsibleProducerRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerIdRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsibleProducerIdRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerNameRequest::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementResponsibleProducerNameRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementSafetyInformationWrapper::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementSafetyInformationWrapperNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementNoSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementNoSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementAttachmentSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementAttachmentSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementAttachmentSafetyInformationattachmentsItem::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementAttachmentSafetyInformationattachmentsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSetElementTextSafetyInformation::class => \Jlonom\AllegroSDK\Normalizer\ProductSetElementTextSafetyInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketedBeforeGPSRObligation::class => \Jlonom\AllegroSDK\Normalizer\MarketedBeforeGPSRObligationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductOfferResponsePublication::class => \Jlonom\AllegroSDK\Normalizer\ProductOfferResponsePublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequest::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesProductOfferRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestImpliedWarranty::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesProductOfferRequestImpliedWarrantyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestReturnPolicy::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesProductOfferRequestReturnPolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestWarranty::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServicesProductOfferRequestWarrantyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryProductOfferRequest::class => \Jlonom\AllegroSDK\Normalizer\DeliveryProductOfferRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryProductOfferRequestShippingRates::class => \Jlonom\AllegroSDK\Normalizer\DeliveryProductOfferRequestShippingRatesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\DeliveryProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationMarketplacesResponse::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPublicationMarketplacesResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationMarketplacesResponseBase::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPublicationMarketplacesResponseBaseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationRequest::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPublicationRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOfferPublicationResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItem::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesRequestItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItemSellingMode::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesRequestItemSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItemSellingModePrice::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesRequestItemSellingModePriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItem::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesResponseItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItemSellingMode::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesResponseItemSellingModeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItemPublication::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesResponseItemPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRefusalReasonResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesRefusalReasonResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParameterProductOfferRequest::class => \Jlonom\AllegroSDK\Normalizer\ParameterProductOfferRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParameterProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\ParameterProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequest::class => \Jlonom\AllegroSDK\Normalizer\DiscountsProductOfferRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequestWholesalePriceList::class => \Jlonom\AllegroSDK\Normalizer\DiscountsProductOfferRequestWholesalePriceListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DiscountsProductOfferResponse::class => \Jlonom\AllegroSDK\Normalizer\DiscountsProductOfferResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRequirements::class => \Jlonom\AllegroSDK\Normalizer\OfferRequirementsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalEmailsResponse::class => \Jlonom\AllegroSDK\Normalizer\AdditionalEmailsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalEmail::class => \Jlonom\AllegroSDK\Normalizer\AdditionalEmailNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalEmailRequest::class => \Jlonom\AllegroSDK\Normalizer\AdditionalEmailRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPackages::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPackagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedResponse::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedExtension::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedExtensionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPackageConfig::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPackageConfigNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPackageConfigs::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPackageConfigsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPromotion::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPromotionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ClassifiedPublication::class => \Jlonom\AllegroSDK\Normalizer\ClassifiedPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PaymentOperations::class => \Jlonom\AllegroSDK\Normalizer\PaymentOperationsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BaseOperation::class => \Jlonom\AllegroSDK\Normalizer\BaseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Wallet::class => \Jlonom\AllegroSDK\Normalizer\WalletNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WalletBalance::class => \Jlonom\AllegroSDK\Normalizer\WalletBalanceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OperationValue::class => \Jlonom\AllegroSDK\Normalizer\OperationValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundDeliveryValue::class => \Jlonom\AllegroSDK\Normalizer\RefundDeliveryValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundOverpaidValue::class => \Jlonom\AllegroSDK\Normalizer\RefundOverpaidValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundAdditionalServicesValue::class => \Jlonom\AllegroSDK\Normalizer\RefundAdditionalServicesValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundSurchargeValue::class => \Jlonom\AllegroSDK\Normalizer\RefundSurchargeValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundTotalValue::class => \Jlonom\AllegroSDK\Normalizer\RefundTotalValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CorrectionOperation::class => \Jlonom\AllegroSDK\Normalizer\CorrectionOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ContributionOperation::class => \Jlonom\AllegroSDK\Normalizer\ContributionOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PayoutOperation::class => \Jlonom\AllegroSDK\Normalizer\PayoutOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PayoutOperationCancel::class => \Jlonom\AllegroSDK\Normalizer\PayoutOperationCancelNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundIncreaseOperation::class => \Jlonom\AllegroSDK\Normalizer\RefundIncreaseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundCancelOperation::class => \Jlonom\AllegroSDK\Normalizer\RefundCancelOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefundChargeOperation::class => \Jlonom\AllegroSDK\Normalizer\RefundChargeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SurchargeOperation::class => \Jlonom\AllegroSDK\Normalizer\SurchargeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeductionChargeOperation::class => \Jlonom\AllegroSDK\Normalizer\DeductionChargeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeductionIncreaseOperation::class => \Jlonom\AllegroSDK\Normalizer\DeductionIncreaseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BlockadeOperation::class => \Jlonom\AllegroSDK\Normalizer\BlockadeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BlockadeReleaseOperation::class => \Jlonom\AllegroSDK\Normalizer\BlockadeReleaseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProviderRefundTransferIncreaseOperation::class => \Jlonom\AllegroSDK\Normalizer\ProviderRefundTransferIncreaseOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProviderRefundTransferChargeOperation::class => \Jlonom\AllegroSDK\Normalizer\ProviderRefundTransferChargeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CompensationOperation::class => \Jlonom\AllegroSDK\Normalizer\CompensationOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OperationPayment::class => \Jlonom\AllegroSDK\Normalizer\OperationPaymentNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Participant::class => \Jlonom\AllegroSDK\Normalizer\ParticipantNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerParticipant::class => \Jlonom\AllegroSDK\Normalizer\SellerParticipantNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BuyerParticipant::class => \Jlonom\AllegroSDK\Normalizer\BuyerParticipantNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OperationParticipantAddress::class => \Jlonom\AllegroSDK\Normalizer\OperationParticipantAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Payout::class => \Jlonom\AllegroSDK\Normalizer\PayoutNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Surcharge::class => \Jlonom\AllegroSDK\Normalizer\SurchargeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Deduction::class => \Jlonom\AllegroSDK\Normalizer\DeductionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TecdocSpecification::class => \Jlonom\AllegroSDK\Normalizer\TecdocSpecificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TecdocSpecificationItem::class => \Jlonom\AllegroSDK\Normalizer\TecdocSpecificationItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MeResponse::class => \Jlonom\AllegroSDK\Normalizer\MeResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MeResponseBaseMarketplace::class => \Jlonom\AllegroSDK\Normalizer\MeResponseBaseMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Company::class => \Jlonom\AllegroSDK\Normalizer\CompanyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MyBidResponse::class => \Jlonom\AllegroSDK\Normalizer\MyBidResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MyBidResponseAuction::class => \Jlonom\AllegroSDK\Normalizer\MyBidResponseAuctionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerOfferEventsResponse::class => \Jlonom\AllegroSDK\Normalizer\SellerOfferEventsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SellerOfferBaseEvent::class => \Jlonom\AllegroSDK\Normalizer\SellerOfferBaseEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferActivatedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferActivatedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferChangedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferChangedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEndedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferEndedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferStockChangedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferStockChangedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPriceChangedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferPriceChangedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferArchivedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferArchivedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBidPlacedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferBidPlacedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBidCanceledEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferBidCanceledEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTranslationUpdatedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferTranslationUpdatedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ChangedTranslation::class => \Jlonom\AllegroSDK\Normalizer\ChangedTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferVisibilityChangedEvent::class => \Jlonom\AllegroSDK\Normalizer\OfferVisibilityChangedEventNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventBaseOffer::class => \Jlonom\AllegroSDK\Normalizer\OfferEventBaseOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventExternalOffer::class => \Jlonom\AllegroSDK\Normalizer\OfferEventExternalOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventExternalOfferWithPublication::class => \Jlonom\AllegroSDK\Normalizer\OfferEventExternalOfferWithPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventExternalOfferForPriceChanges::class => \Jlonom\AllegroSDK\Normalizer\OfferEventExternalOfferForPriceChangesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferMarketplacesPriceChanges::class => \Jlonom\AllegroSDK\Normalizer\OfferMarketplacesPriceChangesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferMarketplacesPublication::class => \Jlonom\AllegroSDK\Normalizer\OfferMarketplacesPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplacesVisibility::class => \Jlonom\AllegroSDK\Normalizer\MarketplacesVisibilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacesVisibility::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacesVisibilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefusalReason::class => \Jlonom\AllegroSDK\Normalizer\RefusalReasonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RelatedReason::class => \Jlonom\AllegroSDK\Normalizer\RelatedReasonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventEndedOffer::class => \Jlonom\AllegroSDK\Normalizer\OfferEventEndedOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferEventEndedOfferpublication::class => \Jlonom\AllegroSDK\Normalizer\OfferEventEndedOfferpublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\GetBadgeCampaignsList::class => \Jlonom\AllegroSDK\Normalizer\GetBadgeCampaignsListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeCampaign::class => \Jlonom\AllegroSDK\Normalizer\BadgeCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UserCampaignEligibility::class => \Jlonom\AllegroSDK\Normalizer\UserCampaignEligibilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CampaignRefusalReason::class => \Jlonom\AllegroSDK\Normalizer\CampaignRefusalReasonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\RefusalMessage::class => \Jlonom\AllegroSDK\Normalizer\RefusalMessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ApplicationTimePolicy::class => \Jlonom\AllegroSDK\Normalizer\ApplicationTimePolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\VisibilityTimePolicy::class => \Jlonom\AllegroSDK\Normalizer\VisibilityTimePolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PublicationTimePolicy::class => \Jlonom\AllegroSDK\Normalizer\PublicationTimePolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePublicationTimePolicy::class => \Jlonom\AllegroSDK\Normalizer\BadgePublicationTimePolicyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationRequest::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationCampaign::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferBadgeCampaign::class => \Jlonom\AllegroSDK\Normalizer\OfferBadgeCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationOffer::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePrices::class => \Jlonom\AllegroSDK\Normalizer\BadgePricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationPrices::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationPricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePatchProcess::class => \Jlonom\AllegroSDK\Normalizer\BadgePatchProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePatchProcessProcess::class => \Jlonom\AllegroSDK\Normalizer\BadgePatchProcessProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePatchPrices::class => \Jlonom\AllegroSDK\Normalizer\BadgePatchPricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePatchPricesPrices::class => \Jlonom\AllegroSDK\Normalizer\BadgePatchPricesPricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgePatchPricesPricesBargain::class => \Jlonom\AllegroSDK\Normalizer\BadgePatchPricesPricesBargainNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeMarketPrice::class => \Jlonom\AllegroSDK\Normalizer\BadgeMarketPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationBargainPrice::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationBargainPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class => \Jlonom\AllegroSDK\Normalizer\BadgeSubsidyPricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidyTargetPrice::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationSubsidyTargetPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidySellerPrice::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationSubsidySellerPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraints::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationPurchaseConstraintsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraintsLimit::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationPurchaseConstraintsLimitNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraintsLimitPerUser::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationPurchaseConstraintsLimitPerUserNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplications::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplication::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationProcess::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationRejectionReason::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationRejectionReasonNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeApplicationRejectionReasonMessage::class => \Jlonom\AllegroSDK\Normalizer\BadgeApplicationRejectionReasonMessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgesList::class => \Jlonom\AllegroSDK\Normalizer\BadgesListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Badge::class => \Jlonom\AllegroSDK\Normalizer\BadgeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeProcess::class => \Jlonom\AllegroSDK\Normalizer\BadgeProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeOperation::class => \Jlonom\AllegroSDK\Normalizer\BadgeOperationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\BadgeOperationProcess::class => \Jlonom\AllegroSDK\Normalizer\BadgeOperationProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRating::class => \Jlonom\AllegroSDK\Normalizer\OfferRatingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRatingScoreDistributionItem::class => \Jlonom\AllegroSDK\Normalizer\OfferRatingScoreDistributionItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferRatingSizeFeedbackItem::class => \Jlonom\AllegroSDK\Normalizer\OfferRatingSizeFeedbackItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FundraisingCampaigns::class => \Jlonom\AllegroSDK\Normalizer\FundraisingCampaignsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FundraisingCampaign::class => \Jlonom\AllegroSDK\Normalizer\FundraisingCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CharityOrganization::class => \Jlonom\AllegroSDK\Normalizer\CharityOrganizationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesAvailability::class => \Jlonom\AllegroSDK\Normalizer\ParcelAdditionalServicesAvailabilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesCashOnDeliveryAvailability::class => \Jlonom\AllegroSDK\Normalizer\ParcelAdditionalServicesCashOnDeliveryAvailabilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesOptionAvailability::class => \Jlonom\AllegroSDK\Normalizer\ParcelAdditionalServicesOptionAvailabilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelCreationAddress::class => \Jlonom\AllegroSDK\Normalizer\ParcelCreationAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelCreationAddressWithMandatoryPlace::class => \Jlonom\AllegroSDK\Normalizer\ParcelCreationAddressWithMandatoryPlaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error200::class => \Jlonom\AllegroSDK\Normalizer\Error200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error400::class => \Jlonom\AllegroSDK\Normalizer\Error400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error403::class => \Jlonom\AllegroSDK\Normalizer\Error403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error404::class => \Jlonom\AllegroSDK\Normalizer\Error404Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\Error504::class => \Jlonom\AllegroSDK\Normalizer\Error504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\AvailablePromotionPackages::class => \Jlonom\AllegroSDK\Normalizer\AvailablePromotionPackagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceAvailablePromotionPackages::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceAvailablePromotionPackagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AvailablePromotionPackage::class => \Jlonom\AllegroSDK\Normalizer\AvailablePromotionPackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsModifications::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsModificationsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsModification::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsModification::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacePromoOptionsModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPromoOptionsForSeller::class => \Jlonom\AllegroSDK\Normalizer\OfferPromoOptionsForSellerNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPromoOptions::class => \Jlonom\AllegroSDK\Normalizer\OfferPromoOptionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceOfferPromoOption::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceOfferPromoOptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPromoOption::class => \Jlonom\AllegroSDK\Normalizer\OfferPromoOptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferPromoOptionsPendingChanges::class => \Jlonom\AllegroSDK\Normalizer\OfferPromoOptionsPendingChangesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsCommand::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsCommandModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationBasePackage::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsCommandModificationBasePackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsCommandModification::class => \Jlonom\AllegroSDK\Normalizer\AdditionalMarketplacePromoOptionsCommandModificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationPackage::class => \Jlonom\AllegroSDK\Normalizer\PromoOptionsCommandModificationPackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoGeneralReport::class => \Jlonom\AllegroSDK\Normalizer\PromoGeneralReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoModificationReport::class => \Jlonom\AllegroSDK\Normalizer\PromoModificationReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PromoModificationTask::class => \Jlonom\AllegroSDK\Normalizer\PromoModificationTaskNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointServicesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointServicesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointRestrictionsItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointRestrictionsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointPaymentsItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointPaymentsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointAddress::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointOpeningItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPickupDropOffPointOpeningItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroParcelTrackingHistory::class => \Jlonom\AllegroSDK\Normalizer\AllegroParcelTrackingHistoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroParcelTrackingHistoryTrackingDetails::class => \Jlonom\AllegroSDK\Normalizer\AllegroParcelTrackingHistoryTrackingDetailsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelTrackingHistory::class => \Jlonom\AllegroSDK\Normalizer\ParcelTrackingHistoryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelTrackingHistoryTrackingDetails::class => \Jlonom\AllegroSDK\Normalizer\ParcelTrackingHistoryTrackingDetailsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroParcelTrackingStatus::class => \Jlonom\AllegroSDK\Normalizer\AllegroParcelTrackingStatusNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ParcelTrackingStatus::class => \Jlonom\AllegroSDK\Normalizer\ParcelTrackingStatusNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CategoryTaxSettings::class => \Jlonom\AllegroSDK\Normalizer\CategoryTaxSettingsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxSubject::class => \Jlonom\AllegroSDK\Normalizer\TaxSubjectNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxRate::class => \Jlonom\AllegroSDK\Normalizer\TaxRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxRateValue::class => \Jlonom\AllegroSDK\Normalizer\TaxRateValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxExemption::class => \Jlonom\AllegroSDK\Normalizer\TaxExemptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequest::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesAccountChangeRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequestAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesAccountChangeRequestAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesAccountConsentChangeResponse::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesAccountConsentChangeResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequest::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesOfferChangeRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequestAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesOfferChangeRequestAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesOfferConsentChangeResponse::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesOfferConsentChangeResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesEligibilityResponse::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesEligibilityResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesEligibilityResponseAdditionalMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesEligibilityResponseAdditionalMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroPricesQualificationResponse::class => \Jlonom\AllegroSDK\Normalizer\AllegroPricesQualificationResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequest::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandRequestInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputOffer::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandRequestInputOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputCampaign::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandRequestInputCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputProposedPrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandRequestInputProposedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputOffer::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseInputOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputCampaign::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseInputCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputProposedPrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseInputProposedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseOutput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmitCommandResponseOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputOffer::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseInputOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputCampaign::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseInputCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputProposedPrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseInputProposedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseOutput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequest::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountWithdrawCommandRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequestInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountWithdrawCommandRequestInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountWithdrawCommandResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponseInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountWithdrawCommandResponseInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponseOutput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountWithdrawCommandResponseOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetWithdrawCommandResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseInput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetWithdrawCommandResponseInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseOutput::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetWithdrawCommandResponseOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListEligibleResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListEligibleResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoProduct::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoProductNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoBasePrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoBasePriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoAlleDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListSubmittedResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListSubmittedResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDto::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoOffer::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoCampaign::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoCampaignNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoPricesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoPricesProposedPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReductionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPriceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoProcess::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoProcessNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoProcessErrorsItem::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountSubmittedOfferDtoProcessErrorsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponse::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibilityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublicationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplaceNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlleDiscountRequiredMerchantPriceDto::class => \Jlonom\AllegroSDK\Normalizer\AlleDiscountRequiredMerchantPriceDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Interlocutor::class => \Jlonom\AllegroSDK\Normalizer\InterlocutorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageAuthor::class => \Jlonom\AllegroSDK\Normalizer\MessageAuthorNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Thread::class => \Jlonom\AllegroSDK\Normalizer\ThreadNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ThreadId::class => \Jlonom\AllegroSDK\Normalizer\ThreadIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ThreadsList::class => \Jlonom\AllegroSDK\Normalizer\ThreadsListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ThreadReadFlag::class => \Jlonom\AllegroSDK\Normalizer\ThreadReadFlagNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageOffer::class => \Jlonom\AllegroSDK\Normalizer\MessageOfferNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageOrder::class => \Jlonom\AllegroSDK\Normalizer\MessageOrderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageRelatedObject::class => \Jlonom\AllegroSDK\Normalizer\MessageRelatedObjectNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageAdditionalInformation::class => \Jlonom\AllegroSDK\Normalizer\MessageAdditionalInformationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageAttachmentInfo::class => \Jlonom\AllegroSDK\Normalizer\MessageAttachmentInfoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Message::class => \Jlonom\AllegroSDK\Normalizer\MessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessagesList::class => \Jlonom\AllegroSDK\Normalizer\MessagesListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageAttachmentId::class => \Jlonom\AllegroSDK\Normalizer\MessageAttachmentIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NewMessageInThread::class => \Jlonom\AllegroSDK\Normalizer\NewMessageInThreadNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Recipient::class => \Jlonom\AllegroSDK\Normalizer\RecipientNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NewMessage::class => \Jlonom\AllegroSDK\Normalizer\NewMessageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NewAttachmentDeclaration::class => \Jlonom\AllegroSDK\Normalizer\NewAttachmentDeclarationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\B2b::class => \Jlonom\AllegroSDK\Normalizer\B2bNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MessageToSellerSettings::class => \Jlonom\AllegroSDK\Normalizer\MessageToSellerSettingsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferDescriptionTranslation::class => \Jlonom\AllegroSDK\Normalizer\OfferDescriptionTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTitleTranslation::class => \Jlonom\AllegroSDK\Normalizer\OfferTitleTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferSafetyInformationTranslation::class => \Jlonom\AllegroSDK\Normalizer\OfferSafetyInformationTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductSafetyInformationDescription::class => \Jlonom\AllegroSDK\Normalizer\ProductSafetyInformationDescriptionNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ManualDescriptionTranslation::class => \Jlonom\AllegroSDK\Normalizer\ManualDescriptionTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ManualTitleTranslation::class => \Jlonom\AllegroSDK\Normalizer\ManualTitleTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ManualSafetyInformationTranslation::class => \Jlonom\AllegroSDK\Normalizer\ManualSafetyInformationTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ManualProductSafetyInformationDescriptionTranslation::class => \Jlonom\AllegroSDK\Normalizer\ManualProductSafetyInformationDescriptionTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ManualTranslationUpdateRequest::class => \Jlonom\AllegroSDK\Normalizer\ManualTranslationUpdateRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTranslation::class => \Jlonom\AllegroSDK\Normalizer\OfferTranslationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OfferTranslations::class => \Jlonom\AllegroSDK\Normalizer\OfferTranslationsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartDeliveryMethod::class => \Jlonom\AllegroSDK\Normalizer\SmartDeliveryMethodNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryMethodId::class => \Jlonom\AllegroSDK\Normalizer\DeliveryMethodIdNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartOfferClassificationReport::class => \Jlonom\AllegroSDK\Normalizer\SmartOfferClassificationReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportClassification::class => \Jlonom\AllegroSDK\Normalizer\SmartOfferClassificationReportClassificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem::class => \Jlonom\AllegroSDK\Normalizer\SmartOfferClassificationReportConditionsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartSellerClassificationReport::class => \Jlonom\AllegroSDK\Normalizer\SmartSellerClassificationReportNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportClassification::class => \Jlonom\AllegroSDK\Normalizer\SmartSellerClassificationReportClassificationNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportConditionsItem::class => \Jlonom\AllegroSDK\Normalizer\SmartSellerClassificationReportConditionsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdvanceShipNotice::class => \Jlonom\AllegroSDK\Normalizer\AdvanceShipNoticeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeRequest::class => \Jlonom\AllegroSDK\Normalizer\CreateAdvanceShipNoticeRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest::class => \Jlonom\AllegroSDK\Normalizer\UpdateSubmittedAdvanceShipNoticeRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateSubmittedHandlingUnitInput::class => \Jlonom\AllegroSDK\Normalizer\UpdateSubmittedHandlingUnitInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateSubmittedShippingInput::class => \Jlonom\AllegroSDK\Normalizer\UpdateSubmittedShippingInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse::class => \Jlonom\AllegroSDK\Normalizer\AdvanceShipNoticeResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeResponse::class => \Jlonom\AllegroSDK\Normalizer\CreateAdvanceShipNoticeResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdvanceShipNoticeList::class => \Jlonom\AllegroSDK\Normalizer\AdvanceShipNoticeListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitCommandInput::class => \Jlonom\AllegroSDK\Normalizer\SubmitCommandInputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitCommandOutput::class => \Jlonom\AllegroSDK\Normalizer\SubmitCommandOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitRunningCommandOutput::class => \Jlonom\AllegroSDK\Normalizer\SubmitRunningCommandOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitSuccessfulCommandOutput::class => \Jlonom\AllegroSDK\Normalizer\SubmitSuccessfulCommandOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitFailedCommandOutput::class => \Jlonom\AllegroSDK\Normalizer\SubmitFailedCommandOutputNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SubmitCommand::class => \Jlonom\AllegroSDK\Normalizer\SubmitCommandNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Product::class => \Jlonom\AllegroSDK\Normalizer\ProductNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ProductItem::class => \Jlonom\AllegroSDK\Normalizer\ProductItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\HandlingUnit::class => \Jlonom\AllegroSDK\Normalizer\HandlingUnitNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Labels::class => \Jlonom\AllegroSDK\Normalizer\LabelsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Shipping::class => \Jlonom\AllegroSDK\Normalizer\ShippingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShippingExtended::class => \Jlonom\AllegroSDK\Normalizer\ShippingExtendedNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\OwnTransportShipping::class => \Jlonom\AllegroSDK\Normalizer\OwnTransportShippingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CourierBySellerShipping::class => \Jlonom\AllegroSDK\Normalizer\CourierBySellerShippingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping::class => \Jlonom\AllegroSDK\Normalizer\ThirdPartyDeliveryShippingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AlreadyInWarehouseShipping::class => \Jlonom\AllegroSDK\Normalizer\AlreadyInWarehouseShippingNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ThirdParty::class => \Jlonom\AllegroSDK\Normalizer\ThirdPartyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\Courier::class => \Jlonom\AllegroSDK\Normalizer\CourierNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxIdRequest::class => \Jlonom\AllegroSDK\Normalizer\TaxIdRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TaxIdResponse::class => \Jlonom\AllegroSDK\Normalizer\TaxIdResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockProductList::class => \Jlonom\AllegroSDK\Normalizer\StockProductListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockProductItem::class => \Jlonom\AllegroSDK\Normalizer\StockProductItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockProduct::class => \Jlonom\AllegroSDK\Normalizer\StockProductNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockQuantity::class => \Jlonom\AllegroSDK\Normalizer\StockQuantityNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockSellingStats::class => \Jlonom\AllegroSDK\Normalizer\StockSellingStatsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockStorageFee::class => \Jlonom\AllegroSDK\Normalizer\StockStorageFeeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\StockStorageFeeDetails::class => \Jlonom\AllegroSDK\Normalizer\StockStorageFeeDetailsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReserveInfo::class => \Jlonom\AllegroSDK\Normalizer\ReserveInfoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AvailableProductsList::class => \Jlonom\AllegroSDK\Normalizer\AvailableProductsListNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AvailableProductResponse::class => \Jlonom\AllegroSDK\Normalizer\AvailableProductResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReceivingState::class => \Jlonom\AllegroSDK\Normalizer\ReceivingStateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReceivingEntry::class => \Jlonom\AllegroSDK\Normalizer\ReceivingEntryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReceivingStatus::class => \Jlonom\AllegroSDK\Normalizer\ReceivingStatusNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FulfillmentOrder::class => \Jlonom\AllegroSDK\Normalizer\FulfillmentOrderNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FulfillmentOrderParcel::class => \Jlonom\AllegroSDK\Normalizer\FulfillmentOrderParcelNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\FulfillmentOrderParcelItem::class => \Jlonom\AllegroSDK\Normalizer\FulfillmentOrderParcelItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AllegroMarketplaces::class => \Jlonom\AllegroSDK\Normalizer\AllegroMarketplacesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItem::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItemLanguages::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemLanguagesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItemCurrencies::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemCurrenciesNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItemLanguage::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemLanguageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItemCurrency::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemCurrencyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\MarketplaceItemShippingCountry::class => \Jlonom\AllegroSDK\Normalizer\MarketplaceItemShippingCountryNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ReceiverAddressDto::class => \Jlonom\AllegroSDK\Normalizer\ReceiverAddressDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentPickupAddressDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentPickupAddressDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SenderAddressDto::class => \Jlonom\AllegroSDK\Normalizer\SenderAddressDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupAddressDto::class => \Jlonom\AllegroSDK\Normalizer\PickupAddressDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AddressDto::class => \Jlonom\AllegroSDK\Normalizer\AddressDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentCreateCommandDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentCreateCommandDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CashOnDeliveryDto::class => \Jlonom\AllegroSDK\Normalizer\CashOnDeliveryDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\InsuranceDto::class => \Jlonom\AllegroSDK\Normalizer\InsuranceDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PackageRequestDto::class => \Jlonom\AllegroSDK\Normalizer\PackageRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentCreateRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentCancelCommandDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentCancelCommandDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentCancelRequestDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentCancelRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentIdsDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentIdsDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupCreateCommandDto::class => \Jlonom\AllegroSDK\Normalizer\PickupCreateCommandDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupCreateRequestDto::class => \Jlonom\AllegroSDK\Normalizer\PickupCreateRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupDateProposalDto::class => \Jlonom\AllegroSDK\Normalizer\PickupDateProposalDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupProposalsRequestDto::class => \Jlonom\AllegroSDK\Normalizer\PickupProposalsRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupDateProposalsDto::class => \Jlonom\AllegroSDK\Normalizer\PickupDateProposalsDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PickupProposalsResponseDto::class => \Jlonom\AllegroSDK\Normalizer\PickupProposalsResponseDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LabelRequestDto::class => \Jlonom\AllegroSDK\Normalizer\LabelRequestDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\PackageDto::class => \Jlonom\AllegroSDK\Normalizer\PackageDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentDto::class => \Jlonom\AllegroSDK\Normalizer\ShipmentDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateShipmentCommandStatusDto::class => \Jlonom\AllegroSDK\Normalizer\CreateShipmentCommandStatusDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CancelShipmentCommandStatusDto::class => \Jlonom\AllegroSDK\Normalizer\CancelShipmentCommandStatusDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreatePickupCommandStatusDto::class => \Jlonom\AllegroSDK\Normalizer\CreatePickupCommandStatusDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalServiceDto::class => \Jlonom\AllegroSDK\Normalizer\AdditionalServiceDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AdditionalPropertyDto::class => \Jlonom\AllegroSDK\Normalizer\AdditionalPropertyDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class => \Jlonom\AllegroSDK\Normalizer\CashOnDeliveryLimitDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryServiceDto::class => \Jlonom\AllegroSDK\Normalizer\DeliveryServiceDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryServiceIdDto::class => \Jlonom\AllegroSDK\Normalizer\DeliveryServiceIdDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DeliveryServicesDto::class => \Jlonom\AllegroSDK\Normalizer\DeliveryServicesDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\LimitWithCurrencyDto::class => \Jlonom\AllegroSDK\Normalizer\LimitWithCurrencyDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\WeightValue::class => \Jlonom\AllegroSDK\Normalizer\WeightValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\DimensionValue::class => \Jlonom\AllegroSDK\Normalizer\DimensionValueNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsiblePersonResponse::class => \Jlonom\AllegroSDK\Normalizer\ResponsiblePersonResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsiblePersonResponsePersonalData::class => \Jlonom\AllegroSDK\Normalizer\ResponsiblePersonResponsePersonalDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequest::class => \Jlonom\AllegroSDK\Normalizer\CreateResponsiblePersonRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequestPersonalData::class => \Jlonom\AllegroSDK\Normalizer\CreateResponsiblePersonRequestPersonalDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequest::class => \Jlonom\AllegroSDK\Normalizer\UpdateResponsiblePersonRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequestPersonalData::class => \Jlonom\AllegroSDK\Normalizer\UpdateResponsiblePersonRequestPersonalDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsiblePersonAddress::class => \Jlonom\AllegroSDK\Normalizer\ResponsiblePersonAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsiblePersonContact::class => \Jlonom\AllegroSDK\Normalizer\ResponsiblePersonContactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsibleProducerResponse::class => \Jlonom\AllegroSDK\Normalizer\ResponsibleProducerResponseNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsibleProducerResponseProducerData::class => \Jlonom\AllegroSDK\Normalizer\ResponsibleProducerResponseProducerDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequest::class => \Jlonom\AllegroSDK\Normalizer\CreateResponsibleProducerRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequestProducerData::class => \Jlonom\AllegroSDK\Normalizer\CreateResponsibleProducerRequestProducerDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequest::class => \Jlonom\AllegroSDK\Normalizer\UpdateResponsibleProducerRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequestProducerData::class => \Jlonom\AllegroSDK\Normalizer\UpdateResponsibleProducerRequestProducerDataNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsibleProducerAddress::class => \Jlonom\AllegroSDK\Normalizer\ResponsibleProducerAddressNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\ResponsibleProducerContact::class => \Jlonom\AllegroSDK\Normalizer\ResponsibleProducerContactNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountRequestNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\NullableTurnoverDiscountDto::class => \Jlonom\AllegroSDK\Normalizer\NullableTurnoverDiscountDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountDto::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountDefinitionDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountThresholdDtoNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoMinimumTurnover::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountThresholdDtoMinimumTurnoverNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoDiscount::class => \Jlonom\AllegroSDK\Normalizer\TurnoverDiscountThresholdDtoDiscountNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOffersPostResponse422::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOffersPostResponse422Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleProductOffersOfferIdPatchResponse422::class => \Jlonom\AllegroSDK\Normalizer\SaleProductOffersOfferIdPatchResponse422Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\SaleShippingRatesGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200ShippingRatesItem::class => \Jlonom\AllegroSDK\Normalizer\SaleShippingRatesGetResponse200ShippingRatesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem::class => \Jlonom\AllegroSDK\Normalizer\SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleResponsiblePersonsGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\SaleResponsiblePersonsGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleResponsibleProducersGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\SaleResponsibleProducersGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackageNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeightNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRateNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault::class => \Jlonom\AllegroSDK\Normalizer\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefaultNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody::class => \Jlonom\AllegroSDK\Normalizer\AfterSalesServiceConditionsAttachmentsPostBodyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleOffersOfferIdSmartGetResponse400::class => \Jlonom\AllegroSDK\Normalizer\SaleOffersOfferIdSmartGetResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleOffersOfferIdSmartGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\SaleOffersOfferIdSmartGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\BiddingOffersOfferIdBidPutBody::class => \Jlonom\AllegroSDK\Normalizer\BiddingOffersOfferIdBidPutBodyNormalizer::class,
        
        \Jlonom\AllegroSDK\Model\SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202::class => \Jlonom\AllegroSDK\Normalizer\SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\PaymentsRefundsGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\PaymentsRefundsGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\PaymentsRefundsGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\PaymentsRefundsGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\PaymentsRefundsPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\PaymentsRefundsPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\OrderRefundClaimsGetResponse200::class => \Jlonom\AllegroSDK\Normalizer\OrderRefundClaimsGetResponse200Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementDeliveryServicesGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementDeliveryServicesGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementDeliveryServicesGetResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementDeliveryServicesGetResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsPostResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCancelCommandsPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCancelCommandsPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsShipmentIdGetResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsShipmentIdGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse404::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsShipmentIdGetResponse404Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementShipmentsShipmentIdGetResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementLabelPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementLabelPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse404::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementLabelPostResponse404Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementLabelPostResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementProtocolPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementProtocolPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse404::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementProtocolPostResponse404Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementProtocolPostResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupProposalsPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupProposalsPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupProposalsPostResponse504Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsPostResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupsCreateCommandsPostResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsPostResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupsCreateCommandsPostResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403Normalizer::class,
        
        \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504::class => \Jlonom\AllegroSDK\Normalizer\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jlonom\AllegroSDK\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Jlonom\AllegroSDK\Model\BillingEntries::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntry::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryType::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryOffer::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryValue::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryTax::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryBalance::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryOrder::class => false,
            \Jlonom\AllegroSDK\Model\BillingEntryAdditionalInfoItem::class => false,
            \Jlonom\AllegroSDK\Model\BillingType::class => false,
            \Jlonom\AllegroSDK\Model\InitializeRefund::class => false,
            \Jlonom\AllegroSDK\Model\InitializeRefundDelivery::class => false,
            \Jlonom\AllegroSDK\Model\InitializeRefundOverpaid::class => false,
            \Jlonom\AllegroSDK\Model\InitializeRefundAdditionalServices::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaim::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimCommission::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimBuyer::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimLineItem::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimLineItemOffer::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimRequest::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimRequestLineItem::class => false,
            \Jlonom\AllegroSDK\Model\RefundClaimResponse::class => false,
            \Jlonom\AllegroSDK\Model\RefundDetails::class => false,
            \Jlonom\AllegroSDK\Model\RefundDetailsDelivery::class => false,
            \Jlonom\AllegroSDK\Model\RefundDetailsOverpaid::class => false,
            \Jlonom\AllegroSDK\Model\RefundDetailsAdditionalServices::class => false,
            \Jlonom\AllegroSDK\Model\RefundLineItem::class => false,
            \Jlonom\AllegroSDK\Model\RefundLineItemValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundPayment::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequest::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRefundRejectionRequestRejection::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnResponse::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturn::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRejection::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnBuyer::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnItem::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRefund::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnReturnParcel::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnItemReason::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRefundBankAccount::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnRefundBankAccountAddress::class => false,
            \Jlonom\AllegroSDK\Model\CustomerReturnParcelSender::class => false,
            \Jlonom\AllegroSDK\Model\PaymentsSurcharge::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceDefinitionRequest::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceRequest::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroup::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroupRequest::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroupResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroups::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationRequest::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationWrapper::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceTranslation::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslationResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslation::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServicesGroupTranslationWrapperWithType::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceGroupTranslationPatchResponse::class => false,
            \Jlonom\AllegroSDK\Model\Address::class => false,
            \Jlonom\AllegroSDK\Model\OfferAdditionalMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacePublication::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplaceSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServices::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesAttachment::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarranty::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicy::class => false,
            \Jlonom\AllegroSDK\Model\Warranty::class => false,
            \Jlonom\AllegroSDK\Model\WarrantyRequest::class => false,
            \Jlonom\AllegroSDK\Model\WarrantyResponse::class => false,
            \Jlonom\AllegroSDK\Model\WarrantyPeriod::class => false,
            \Jlonom\AllegroSDK\Model\WarrantyAttachment::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarrantyRequest::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarrantyResponse::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarrantyPeriod::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesAddress::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyAddress::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyRequest::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyResponse::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyAvailability::class => false,
            \Jlonom\AllegroSDK\Model\RestrictionCause::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyReturnCost::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyContact::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPolicyOptions::class => false,
            \Jlonom\AllegroSDK\Model\Attachment::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingAnswerRequest::class => false,
            \Jlonom\AllegroSDK\Model\Answer::class => false,
            \Jlonom\AllegroSDK\Model\AvailableConstraint::class => false,
            \Jlonom\AllegroSDK\Model\AverageRates::class => false,
            \Jlonom\AllegroSDK\Model\BasicDefinitionResponse::class => false,
            \Jlonom\AllegroSDK\Model\Benefit::class => false,
            \Jlonom\AllegroSDK\Model\BenefitSpecification::class => false,
            \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecification::class => false,
            \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItem::class => false,
            \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItemOrderValue::class => false,
            \Jlonom\AllegroSDK\Model\LargeOrderDiscountBenefitSpecificationthresholdsItemDiscount::class => false,
            \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecification::class => false,
            \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItem::class => false,
            \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItemQuantity::class => false,
            \Jlonom\AllegroSDK\Model\WholesalePriceListBenefitSpecificationthresholdsItemDiscount::class => false,
            \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecification::class => false,
            \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecificationconfiguration::class => false,
            \Jlonom\AllegroSDK\Model\MultiPackBenefitSpecificationtrigger::class => false,
            \Jlonom\AllegroSDK\Model\Caption::class => false,
            \Jlonom\AllegroSDK\Model\CategoriesDto::class => false,
            \Jlonom\AllegroSDK\Model\Category::class => false,
            \Jlonom\AllegroSDK\Model\OfferCategoryRequest::class => false,
            \Jlonom\AllegroSDK\Model\OfferCategory::class => false,
            \Jlonom\AllegroSDK\Model\ProductCategory::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDto::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDtoParent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryOptionsDto::class => false,
            \Jlonom\AllegroSDK\Model\CategorySuggestionCategoryNode::class => false,
            \Jlonom\AllegroSDK\Model\CategorySuggestionResponse::class => false,
            \Jlonom\AllegroSDK\Model\UnfilledParametersResponse::class => false,
            \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItem::class => false,
            \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItemParametersItem::class => false,
            \Jlonom\AllegroSDK\Model\UnfilledParametersResponseOffersItemCategory::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParametersScheduledChangesResponse::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChange::class => false,
            \Jlonom\AllegroSDK\Model\RequirementChange::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeCategory::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParametersScheduledBaseChangeParameter::class => false,
            \Jlonom\AllegroSDK\Model\CategoryEventsResponse::class => false,
            \Jlonom\AllegroSDK\Model\CategoryBaseEvent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryCreatedEvent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryRenamedEvent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryMovedEvent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDeletedEvent::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDeletedEventredirectCategory::class => false,
            \Jlonom\AllegroSDK\Model\CategoryEventBaseCategory::class => false,
            \Jlonom\AllegroSDK\Model\CategoryEventBaseCategoryParent::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDto::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductsGroupsDto::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductsGroupsDtoGroupsItem::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductsListDto::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductDto::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductDtoGroup::class => false,
            \Jlonom\AllegroSDK\Model\CompatibleProductDtoAttributesItem::class => false,
            \Jlonom\AllegroSDK\Model\Cells::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRulesResponse::class => false,
            \Jlonom\AllegroSDK\Model\OfferRules::class => false,
            \Jlonom\AllegroSDK\Model\OfferRulesRulesItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferRulesRulesItemMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\OfferRulesRulesItemRule::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingCommand::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSet::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationSetSetItemRule::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemove::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemoveRemoveItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferAutomaticPricingModificationRemoveRemoveItemMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleResponse::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmount::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByPercentage::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRuleConfigurationChangeByPercentageChangeByPercentage::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRulePostRequest::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingRulePutRequest::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfiguration::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRange::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMinPrice::class => false,
            \Jlonom\AllegroSDK\Model\AutomaticPricingOfferRuleConfigurationPriceRangeMaxPrice::class => false,
            \Jlonom\AllegroSDK\Model\ChangePrice::class => false,
            \Jlonom\AllegroSDK\Model\ChangePriceInput::class => false,
            \Jlonom\AllegroSDK\Model\ChangePriceWithoutOutput::class => false,
            \Jlonom\AllegroSDK\Model\CommandOutput::class => false,
            \Jlonom\AllegroSDK\Model\CommandTask::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityList::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListManual::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListManualType::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListProductBased::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListProductBasedProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListItem::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListItemProductBased::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListTextItem::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListIdItem::class => false,
            \Jlonom\AllegroSDK\Model\CompatibilityListIdItemAdditionalInfo::class => false,
            \Jlonom\AllegroSDK\Model\Configuration::class => false,
            \Jlonom\AllegroSDK\Model\ConstraintCriteria::class => false,
            \Jlonom\AllegroSDK\Model\ContactRequest::class => false,
            \Jlonom\AllegroSDK\Model\ContactResponse::class => false,
            \Jlonom\AllegroSDK\Model\ContactResponseList::class => false,
            \Jlonom\AllegroSDK\Model\Coordinates::class => false,
            \Jlonom\AllegroSDK\Model\CategoriesResponse::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryBasic::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryFull::class => false,
            \Jlonom\AllegroSDK\Model\DescriptionSection::class => false,
            \Jlonom\AllegroSDK\Model\DescriptionSectionItem::class => false,
            \Jlonom\AllegroSDK\Model\DescriptionSectionItemText::class => false,
            \Jlonom\AllegroSDK\Model\DescriptionSectionItemImage::class => false,
            \Jlonom\AllegroSDK\Model\EmailRequest::class => false,
            \Jlonom\AllegroSDK\Model\EmailResponse::class => false,
            \Jlonom\AllegroSDK\Model\Error::class => false,
            \Jlonom\AllegroSDK\Model\ErrorsHolder::class => false,
            \Jlonom\AllegroSDK\Model\AuthError::class => false,
            \Jlonom\AllegroSDK\Model\Fee::class => false,
            \Jlonom\AllegroSDK\Model\CategoryResponse::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDefinitionResponse::class => false,
            \Jlonom\AllegroSDK\Model\CategoryDefinitionDescriptionResponse::class => false,
            \Jlonom\AllegroSDK\Model\FeePreviewResponse::class => false,
            \Jlonom\AllegroSDK\Model\CommissionResponse::class => false,
            \Jlonom\AllegroSDK\Model\QuoteResponse::class => false,
            \Jlonom\AllegroSDK\Model\GeneralReport::class => false,
            \Jlonom\AllegroSDK\Model\Header::class => false,
            \Jlonom\AllegroSDK\Model\ImageUrl::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarrantyBasic::class => false,
            \Jlonom\AllegroSDK\Model\JustId::class => false,
            \Jlonom\AllegroSDK\Model\ExternalId::class => false,
            \Jlonom\AllegroSDK\Model\Location::class => false,
            \Jlonom\AllegroSDK\Model\Modification::class => false,
            \Jlonom\AllegroSDK\Model\ModificationDelivery::class => false,
            \Jlonom\AllegroSDK\Model\ModificationDiscounts::class => false,
            \Jlonom\AllegroSDK\Model\ModificationDiscountsWholesalePriceList::class => false,
            \Jlonom\AllegroSDK\Model\ModificationPublication::class => false,
            \Jlonom\AllegroSDK\Model\ModificationResponsiblePerson::class => false,
            \Jlonom\AllegroSDK\Model\ModificationResponsibleProducer::class => false,
            \Jlonom\AllegroSDK\Model\ModificationSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ModificationNoSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ModificationAttachmentSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ModificationAttachmentSafetyInformationattachmentsItem::class => false,
            \Jlonom\AllegroSDK\Model\ModificationTextSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ModificationPayments::class => false,
            \Jlonom\AllegroSDK\Model\SizeTable::class => false,
            \Jlonom\AllegroSDK\Model\Contact::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferFundraisingCampaignRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferFundraisingCampaignResponse::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferAdditionalServicesRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferAdditionalServicesResponse::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferAttachmentItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferAttachment::class => false,
            \Jlonom\AllegroSDK\Model\PublicOfferPreviewRequest::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedsPackages::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPackage::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedExtraPackage::class => false,
            \Jlonom\AllegroSDK\Model\OfferAttachmentRequest::class => false,
            \Jlonom\AllegroSDK\Model\AttachmentFile::class => false,
            \Jlonom\AllegroSDK\Model\AttachmentFileRequest::class => false,
            \Jlonom\AllegroSDK\Model\OfferImageLinkUploadRequest::class => false,
            \Jlonom\AllegroSDK\Model\OfferImageUploadResponse::class => false,
            \Jlonom\AllegroSDK\Model\PricingOffer::class => false,
            \Jlonom\AllegroSDK\Model\OfferChangeCommand::class => false,
            \Jlonom\AllegroSDK\Model\OfferPriceChangeCommand::class => false,
            \Jlonom\AllegroSDK\Model\PriceModification::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationFixedPrice::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationValueChangeIncrease::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationValueChangeDecrease::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeIncrease::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationPercentageChangeDecrease::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationFixedPriceHolder::class => false,
            \Jlonom\AllegroSDK\Model\PriceModificationValueChangeHolder::class => false,
            \Jlonom\AllegroSDK\Model\OfferQuantityChangeCommand::class => false,
            \Jlonom\AllegroSDK\Model\QuantityModification::class => false,
            \Jlonom\AllegroSDK\Model\SellerRebateOfferCriterion::class => false,
            \Jlonom\AllegroSDK\Model\SellerRebateOfferCriterionOffersItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferCriterium::class => false,
            \Jlonom\AllegroSDK\Model\OfferId::class => false,
            \Jlonom\AllegroSDK\Model\OfferQuoteDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferQuotesDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferStatsResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\SellerOfferStatsResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferStatResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferStatModelDto::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedEventStat::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedDailyEventStatResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\OpenHour::class => false,
            \Jlonom\AllegroSDK\Model\Order::class => false,
            \Jlonom\AllegroSDK\Model\OrderOffersItem::class => false,
            \Jlonom\AllegroSDK\Model\Parameter::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameter::class => false,
            \Jlonom\AllegroSDK\Model\CategoryProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryProductParameterdictionaryItem::class => false,
            \Jlonom\AllegroSDK\Model\IntegerCategoryProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\IntegerCategoryProductParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\FloatCategoryProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\FloatCategoryProductParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\StringCategoryProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\StringCategoryProductParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterOptions::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryParameter::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\DictionaryCategoryParameterdictionaryItem::class => false,
            \Jlonom\AllegroSDK\Model\IntegerCategoryParameter::class => false,
            \Jlonom\AllegroSDK\Model\IntegerCategoryParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\FloatCategoryParameter::class => false,
            \Jlonom\AllegroSDK\Model\FloatCategoryParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\StringCategoryParameter::class => false,
            \Jlonom\AllegroSDK\Model\StringCategoryParameterrestrictions::class => false,
            \Jlonom\AllegroSDK\Model\ParameterRangeValue::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterRequirementConditions::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterDisplayConditions::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterWithValue::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterWithoutValue::class => false,
            \Jlonom\AllegroSDK\Model\CategoryParameterList::class => false,
            \Jlonom\AllegroSDK\Model\CategoryProductParameterList::class => false,
            \Jlonom\AllegroSDK\Model\Payment::class => false,
            \Jlonom\AllegroSDK\Model\Payments::class => false,
            \Jlonom\AllegroSDK\Model\PhonesRequest::class => false,
            \Jlonom\AllegroSDK\Model\PhonesResponse::class => false,
            \Jlonom\AllegroSDK\Model\Pos::class => false,
            \Jlonom\AllegroSDK\Model\PosLocation::class => false,
            \Jlonom\AllegroSDK\Model\Price::class => false,
            \Jlonom\AllegroSDK\Model\Promotion::class => false,
            \Jlonom\AllegroSDK\Model\PublicTableDto::class => false,
            \Jlonom\AllegroSDK\Model\PublicTablesDto::class => false,
            \Jlonom\AllegroSDK\Model\SizeTableTemplateImageResponse::class => false,
            \Jlonom\AllegroSDK\Model\SizeTableTemplateResponse::class => false,
            \Jlonom\AllegroSDK\Model\SizeTableTemplatesResponse::class => false,
            \Jlonom\AllegroSDK\Model\SizeTablePostRequest::class => false,
            \Jlonom\AllegroSDK\Model\SizeTablePutRequest::class => false,
            \Jlonom\AllegroSDK\Model\PricingPublication::class => false,
            \Jlonom\AllegroSDK\Model\PublicationRequest::class => false,
            \Jlonom\AllegroSDK\Model\Publication::class => false,
            \Jlonom\AllegroSDK\Model\PublicationChangeCommandDto::class => false,
            \Jlonom\AllegroSDK\Model\Rates::class => false,
            \Jlonom\AllegroSDK\Model\Reference::class => false,
            \Jlonom\AllegroSDK\Model\SalesQualityHistoryResponse::class => false,
            \Jlonom\AllegroSDK\Model\SalesQualityForDay::class => false,
            \Jlonom\AllegroSDK\Model\SalesQualityMetric::class => false,
            \Jlonom\AllegroSDK\Model\Removal::class => false,
            \Jlonom\AllegroSDK\Model\RemovalRequest::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingRemovalRequest::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingRemovalRequestRequest::class => false,
            \Jlonom\AllegroSDK\Model\SearchResult::class => false,
            \Jlonom\AllegroSDK\Model\Seller::class => false,
            \Jlonom\AllegroSDK\Model\CreateOfferBundleDTO::class => false,
            \Jlonom\AllegroSDK\Model\BundledOfferDTO::class => false,
            \Jlonom\AllegroSDK\Model\BundleDiscountDTO::class => false,
            \Jlonom\AllegroSDK\Model\OfferBundleDTO::class => false,
            \Jlonom\AllegroSDK\Model\OfferBundleDTOPublication::class => false,
            \Jlonom\AllegroSDK\Model\OfferBundlesDTO::class => false,
            \Jlonom\AllegroSDK\Model\OfferBundlesDTONextPage::class => false,
            \Jlonom\AllegroSDK\Model\BundleMarketplaceDTO::class => false,
            \Jlonom\AllegroSDK\Model\UpdateOfferBundleDiscountDTO::class => false,
            \Jlonom\AllegroSDK\Model\SellerCreateRebateRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\SellerRebateDto::class => false,
            \Jlonom\AllegroSDK\Model\SellerRebatesDto::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRate::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRateDeliveryMethod::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRateMaxPackageWeight::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRateFirstItemRate::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRateNextItemRate::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRateShippingTime::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRates::class => false,
            \Jlonom\AllegroSDK\Model\OfferShippingRates::class => false,
            \Jlonom\AllegroSDK\Model\ShippingRatesSet::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponse::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponseMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponseFreeDelivery::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponseAbroadFreeDelivery::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponseJoinPolicy::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsResponseCustomCost::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequest::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequestMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequestFreeDelivery::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequestAbroadFreeDelivery::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequestJoinPolicy::class => false,
            \Jlonom\AllegroSDK\Model\DeliverySettingsRequestCustomCost::class => false,
            \Jlonom\AllegroSDK\Model\StandardizedDescription::class => false,
            \Jlonom\AllegroSDK\Model\Discounts::class => false,
            \Jlonom\AllegroSDK\Model\DiscountsWholesalePriceList::class => false,
            \Jlonom\AllegroSDK\Model\Stock::class => false,
            \Jlonom\AllegroSDK\Model\TaskCount::class => false,
            \Jlonom\AllegroSDK\Model\TaskReport::class => false,
            \Jlonom\AllegroSDK\Model\User::class => false,
            \Jlonom\AllegroSDK\Model\UserRating::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingListResponse::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponse::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseNotRecommended::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseRecommended::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Recommended::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2NotRecommended::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2Statistics::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsReceived::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsExcluded::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2StatisticsRemoved::class => false,
            \Jlonom\AllegroSDK\Model\UserRatingSummaryResponseV2User::class => false,
            \Jlonom\AllegroSDK\Model\Validation::class => false,
            \Jlonom\AllegroSDK\Model\ValidationError::class => false,
            \Jlonom\AllegroSDK\Model\ValidationWarning::class => false,
            \Jlonom\AllegroSDK\Model\WarrantyBasic::class => false,
            \Jlonom\AllegroSDK\Model\DescribesListingFee::class => false,
            \Jlonom\AllegroSDK\Model\DescribesSuccessCommissionFee::class => false,
            \Jlonom\AllegroSDK\Model\ImpliedWarrantiesListImpliedWarrantyBasic::class => false,
            \Jlonom\AllegroSDK\Model\ParametersForPreviewPrice::class => false,
            \Jlonom\AllegroSDK\Model\PublicationModification::class => false,
            \Jlonom\AllegroSDK\Model\ReturnPoliciesListReturnPolicy::class => false,
            \Jlonom\AllegroSDK\Model\WarrantiesListWarrantyBasic::class => false,
            \Jlonom\AllegroSDK\Model\WrapperTypeForPreviewConditions::class => false,
            \Jlonom\AllegroSDK\Model\WrapsListingAndCommissionsFees::class => false,
            \Jlonom\AllegroSDK\Model\VariantSet::class => false,
            \Jlonom\AllegroSDK\Model\VariantSetResponse::class => false,
            \Jlonom\AllegroSDK\Model\VariantSetOffer::class => false,
            \Jlonom\AllegroSDK\Model\VariantSetParameter::class => false,
            \Jlonom\AllegroSDK\Model\VariantSets::class => false,
            \Jlonom\AllegroSDK\Model\VariantSetsVariantSet::class => false,
            \Jlonom\AllegroSDK\Model\ListingOffer::class => false,
            \Jlonom\AllegroSDK\Model\ListingCategoryWithCount::class => false,
            \Jlonom\AllegroSDK\Model\ListingCategory::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponse::class => false,
            \Jlonom\AllegroSDK\Model\OfferSeller::class => false,
            \Jlonom\AllegroSDK\Model\OfferStock::class => false,
            \Jlonom\AllegroSDK\Model\OfferPromotion::class => false,
            \Jlonom\AllegroSDK\Model\OfferLowestPrice::class => false,
            \Jlonom\AllegroSDK\Model\OfferPrice::class => false,
            \Jlonom\AllegroSDK\Model\OfferFixedPrice::class => false,
            \Jlonom\AllegroSDK\Model\OfferDelivery::class => false,
            \Jlonom\AllegroSDK\Model\OfferImages::class => false,
            \Jlonom\AllegroSDK\Model\OfferSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\OfferVendor::class => false,
            \Jlonom\AllegroSDK\Model\OfferPublication::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseOffers::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseCategories::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseFiltersValues::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseFilters::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseSearchMeta::class => false,
            \Jlonom\AllegroSDK\Model\ListingResponseSort::class => false,
            \Jlonom\AllegroSDK\Model\OfferAdditionalServices::class => false,
            \Jlonom\AllegroSDK\Model\OffersSearchResultDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDto::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoImage::class => false,
            \Jlonom\AllegroSDK\Model\SellingMode::class => false,
            \Jlonom\AllegroSDK\Model\SellingModeWithNetPrice::class => false,
            \Jlonom\AllegroSDK\Model\BuyNowPrice::class => false,
            \Jlonom\AllegroSDK\Model\MinimalPrice::class => false,
            \Jlonom\AllegroSDK\Model\StartingPrice::class => false,
            \Jlonom\AllegroSDK\Model\NetPrice::class => false,
            \Jlonom\AllegroSDK\Model\CurrentPrice::class => false,
            \Jlonom\AllegroSDK\Model\MaxPrice::class => false,
            \Jlonom\AllegroSDK\Model\PriceAutomation::class => false,
            \Jlonom\AllegroSDK\Model\PriceAutomationRule::class => false,
            \Jlonom\AllegroSDK\Model\Tax::class => false,
            \Jlonom\AllegroSDK\Model\OfferTaxSettings::class => false,
            \Jlonom\AllegroSDK\Model\OfferTaxRate::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1B2b::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1Delivery::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1SellingMode::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1SaleInfo::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stock::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1Stats::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1Publication::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1PublicationMarketplaces::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1PublicationMarketplacesBase::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceReference::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplacePublication::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceSellingModePriceAutomation::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStats::class => false,
            \Jlonom\AllegroSDK\Model\OfferListingDtoV1AdditionalMarketplaceStock::class => false,
            \Jlonom\AllegroSDK\Model\OrderEventsList::class => false,
            \Jlonom\AllegroSDK\Model\OrderEvent::class => false,
            \Jlonom\AllegroSDK\Model\OrderEventData::class => false,
            \Jlonom\AllegroSDK\Model\SellerReference::class => false,
            \Jlonom\AllegroSDK\Model\OfferReference::class => false,
            \Jlonom\AllegroSDK\Model\OfferProductSetReference::class => false,
            \Jlonom\AllegroSDK\Model\OfferProductSetProductReference::class => false,
            \Jlonom\AllegroSDK\Model\BuyerReference::class => false,
            \Jlonom\AllegroSDK\Model\BuyerPreferencesReference::class => false,
            \Jlonom\AllegroSDK\Model\OrderLineItem::class => false,
            \Jlonom\AllegroSDK\Model\OrderLineItemOfferReference::class => false,
            \Jlonom\AllegroSDK\Model\OrderEventStats::class => false,
            \Jlonom\AllegroSDK\Model\LatestOrderEvent::class => false,
            \Jlonom\AllegroSDK\Model\OrderMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutForms::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutForm::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormBuyerReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormBuyerAddressReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormPaymentReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormFulfillment::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormFulfillmentShipmentSummary::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryAddress::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryMethod::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryPickupPoint::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryPickupPointAddress::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTime::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeGuaranteed::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryTimeDispatch::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDeliveryCancellation::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceInfo::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddress::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressCompany::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressCompanyId::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormInvoiceAddressNaturalPerson::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormLineItem::class => false,
            \Jlonom\AllegroSDK\Model\LineItemReconciliation::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormAdditionalService::class => false,
            \Jlonom\AllegroSDK\Model\LineItemVoucher::class => false,
            \Jlonom\AllegroSDK\Model\LineItemVoucherValue::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormLineItemTax::class => false,
            \Jlonom\AllegroSDK\Model\LineItemDiscount::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormDiscount::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormNoteReference::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormSummary::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormSummaryTotalToPay::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoices::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoice::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoiceFile::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormsOrderInvoiceFileSecurityVerification::class => false,
            \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoice::class => false,
            \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoiceFile::class => false,
            \Jlonom\AllegroSDK\Model\CheckFormsNewOrderInvoiceId::class => false,
            \Jlonom\AllegroSDK\Model\DisputeListResponse::class => false,
            \Jlonom\AllegroSDK\Model\Dispute::class => false,
            \Jlonom\AllegroSDK\Model\Subject::class => false,
            \Jlonom\AllegroSDK\Model\DisputeClaim::class => false,
            \Jlonom\AllegroSDK\Model\DisputeUser::class => false,
            \Jlonom\AllegroSDK\Model\DisputeMessageList::class => false,
            \Jlonom\AllegroSDK\Model\DisputeFirstMessage::class => false,
            \Jlonom\AllegroSDK\Model\DisputeMessage::class => false,
            \Jlonom\AllegroSDK\Model\DisputeMessageAuthor::class => false,
            \Jlonom\AllegroSDK\Model\DisputeAttachment::class => false,
            \Jlonom\AllegroSDK\Model\DisputeAttachmentId::class => false,
            \Jlonom\AllegroSDK\Model\AttachmentDeclaration::class => false,
            \Jlonom\AllegroSDK\Model\DisputeCheckoutForm::class => false,
            \Jlonom\AllegroSDK\Model\DisputeAuthor::class => false,
            \Jlonom\AllegroSDK\Model\MessageRequest::class => false,
            \Jlonom\AllegroSDK\Model\TagRequest::class => false,
            \Jlonom\AllegroSDK\Model\TagId::class => false,
            \Jlonom\AllegroSDK\Model\TagResponse::class => false,
            \Jlonom\AllegroSDK\Model\TagListResponse::class => false,
            \Jlonom\AllegroSDK\Model\TagIdsRequest::class => false,
            \Jlonom\AllegroSDK\Model\PromotionResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\CampaignResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\SinglePromotionCampaignResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\PromotionCampaignsResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\PromotionCampaignResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\CampaignRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\PromotionRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequest::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillRequestLineItemsItem::class => false,
            \Jlonom\AllegroSDK\Model\OrdersShippingCarrier::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormAddWaybillCreated::class => false,
            \Jlonom\AllegroSDK\Model\OrdersShippingCarriersResponse::class => false,
            \Jlonom\AllegroSDK\Model\CheckoutFormOrderWaybillResponse::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointsResponse::class => false,
            \Jlonom\AllegroSDK\Model\CarrierParcelTrackingResponse::class => false,
            \Jlonom\AllegroSDK\Model\GetSaleProductsResponse::class => false,
            \Jlonom\AllegroSDK\Model\GetSaleProductsResponseNextPage::class => false,
            \Jlonom\AllegroSDK\Model\ProductProposalsRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductChangeProposalDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductImageProposal::class => false,
            \Jlonom\AllegroSDK\Model\ProductNameProposal::class => false,
            \Jlonom\AllegroSDK\Model\ProductCategoryProposal::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameterProposal::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameterValueProposal::class => false,
            \Jlonom\AllegroSDK\Model\ProductChangeProposalRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductChangesResponse::class => false,
            \Jlonom\AllegroSDK\Model\ProductChangeDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductChangeDtoProduct::class => false,
            \Jlonom\AllegroSDK\Model\ChangedParameterDto::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductDto::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductDtoPublication::class => false,
            \Jlonom\AllegroSDK\Model\ProductProposalsResponse::class => false,
            \Jlonom\AllegroSDK\Model\ProductProposalsResponseCategory::class => false,
            \Jlonom\AllegroSDK\Model\ProductProposalsResponseCategorysimilarItem::class => false,
            \Jlonom\AllegroSDK\Model\ProductProposalsResponsePublication::class => false,
            \Jlonom\AllegroSDK\Model\BaseSaleProductResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\BaseSaleProductResponseDtoPublication::class => false,
            \Jlonom\AllegroSDK\Model\ProductSafetyDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductSafetyDtoSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ProductCategoryWithPath::class => false,
            \Jlonom\AllegroSDK\Model\ProductSimilarCategoryWithPath::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductCompatibilityList::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductResponseCategoriesDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductsCategorySubcategories::class => false,
            \Jlonom\AllegroSDK\Model\ProductsCategoryPath::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameter::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameterOptions::class => false,
            \Jlonom\AllegroSDK\Model\SupplierDto::class => false,
            \Jlonom\AllegroSDK\Model\NewProductParameterDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameterDto::class => false,
            \Jlonom\AllegroSDK\Model\ProductParameterDtoOptions::class => false,
            \Jlonom\AllegroSDK\Model\AiCoCreatedContent::class => false,
            \Jlonom\AllegroSDK\Model\TrustedContent::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOffer::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBase::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecategory::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasepublication::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasedelivery::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasesizeTable::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestBasecontact::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOffersRequestStock::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1productSetItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1delivery::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferRequestV1compatibilityList::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1productSetItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1compatibilityList::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPatchRequestV1delivery::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemproduct::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsiblePerson::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1productSetItemresponsibleProducer::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferResponseV1contact::class => false,
            \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseStock::class => false,
            \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\SalePartialProductOfferResponseAdditionalMarketplacesItemSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferStatusResponse::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferStatusResponseOperation::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferBase::class => false,
            \Jlonom\AllegroSDK\Model\ProductOffer::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElement::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementQuantity::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementQuantityQuantity::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsiblePersonRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsiblePersonRequestResponsiblePerson::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerRequestWrapper::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerIdRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementResponsibleProducerNameRequest::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementSafetyInformationWrapper::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementNoSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementAttachmentSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementAttachmentSafetyInformationattachmentsItem::class => false,
            \Jlonom\AllegroSDK\Model\ProductSetElementTextSafetyInformation::class => false,
            \Jlonom\AllegroSDK\Model\MarketedBeforeGPSRObligation::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\ProductOfferResponsePublication::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequest::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestImpliedWarranty::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestReturnPolicy::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServicesProductOfferRequestWarranty::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryProductOfferRequest::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryProductOfferRequestShippingRates::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationMarketplacesResponse::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationMarketplacesResponseBase::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationRequest::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOfferPublicationResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItem::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItemSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRequestItemSellingModePrice::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItem::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItemSellingMode::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesResponseItemPublication::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesRefusalReasonResponse::class => false,
            \Jlonom\AllegroSDK\Model\ParameterProductOfferRequest::class => false,
            \Jlonom\AllegroSDK\Model\ParameterProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequest::class => false,
            \Jlonom\AllegroSDK\Model\DiscountsProductOfferRequestWholesalePriceList::class => false,
            \Jlonom\AllegroSDK\Model\DiscountsProductOfferResponse::class => false,
            \Jlonom\AllegroSDK\Model\OfferRequirements::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalEmailsResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalEmail::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalEmailRequest::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPackages::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedResponse::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedExtension::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPackageConfig::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPackageConfigs::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPromotion::class => false,
            \Jlonom\AllegroSDK\Model\ClassifiedPublication::class => false,
            \Jlonom\AllegroSDK\Model\PaymentOperations::class => false,
            \Jlonom\AllegroSDK\Model\BaseOperation::class => false,
            \Jlonom\AllegroSDK\Model\Wallet::class => false,
            \Jlonom\AllegroSDK\Model\WalletBalance::class => false,
            \Jlonom\AllegroSDK\Model\OperationValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundDeliveryValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundOverpaidValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundAdditionalServicesValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundSurchargeValue::class => false,
            \Jlonom\AllegroSDK\Model\RefundTotalValue::class => false,
            \Jlonom\AllegroSDK\Model\CorrectionOperation::class => false,
            \Jlonom\AllegroSDK\Model\ContributionOperation::class => false,
            \Jlonom\AllegroSDK\Model\PayoutOperation::class => false,
            \Jlonom\AllegroSDK\Model\PayoutOperationCancel::class => false,
            \Jlonom\AllegroSDK\Model\RefundIncreaseOperation::class => false,
            \Jlonom\AllegroSDK\Model\RefundCancelOperation::class => false,
            \Jlonom\AllegroSDK\Model\RefundChargeOperation::class => false,
            \Jlonom\AllegroSDK\Model\SurchargeOperation::class => false,
            \Jlonom\AllegroSDK\Model\DeductionChargeOperation::class => false,
            \Jlonom\AllegroSDK\Model\DeductionIncreaseOperation::class => false,
            \Jlonom\AllegroSDK\Model\BlockadeOperation::class => false,
            \Jlonom\AllegroSDK\Model\BlockadeReleaseOperation::class => false,
            \Jlonom\AllegroSDK\Model\ProviderRefundTransferIncreaseOperation::class => false,
            \Jlonom\AllegroSDK\Model\ProviderRefundTransferChargeOperation::class => false,
            \Jlonom\AllegroSDK\Model\CompensationOperation::class => false,
            \Jlonom\AllegroSDK\Model\OperationPayment::class => false,
            \Jlonom\AllegroSDK\Model\Participant::class => false,
            \Jlonom\AllegroSDK\Model\SellerParticipant::class => false,
            \Jlonom\AllegroSDK\Model\BuyerParticipant::class => false,
            \Jlonom\AllegroSDK\Model\OperationParticipantAddress::class => false,
            \Jlonom\AllegroSDK\Model\Payout::class => false,
            \Jlonom\AllegroSDK\Model\Surcharge::class => false,
            \Jlonom\AllegroSDK\Model\Deduction::class => false,
            \Jlonom\AllegroSDK\Model\TecdocSpecification::class => false,
            \Jlonom\AllegroSDK\Model\TecdocSpecificationItem::class => false,
            \Jlonom\AllegroSDK\Model\MeResponse::class => false,
            \Jlonom\AllegroSDK\Model\MeResponseBaseMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\Company::class => false,
            \Jlonom\AllegroSDK\Model\MyBidResponse::class => false,
            \Jlonom\AllegroSDK\Model\MyBidResponseAuction::class => false,
            \Jlonom\AllegroSDK\Model\SellerOfferEventsResponse::class => false,
            \Jlonom\AllegroSDK\Model\SellerOfferBaseEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferActivatedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferChangedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferEndedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferStockChangedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferPriceChangedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferArchivedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferBidPlacedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferBidCanceledEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferTranslationUpdatedEvent::class => false,
            \Jlonom\AllegroSDK\Model\ChangedTranslation::class => false,
            \Jlonom\AllegroSDK\Model\OfferVisibilityChangedEvent::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventBaseOffer::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventExternalOffer::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventExternalOfferWithPublication::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventExternalOfferForPriceChanges::class => false,
            \Jlonom\AllegroSDK\Model\OfferMarketplacesPriceChanges::class => false,
            \Jlonom\AllegroSDK\Model\OfferMarketplacesPublication::class => false,
            \Jlonom\AllegroSDK\Model\MarketplacesVisibility::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacesVisibility::class => false,
            \Jlonom\AllegroSDK\Model\RefusalReason::class => false,
            \Jlonom\AllegroSDK\Model\RelatedReason::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventEndedOffer::class => false,
            \Jlonom\AllegroSDK\Model\OfferEventEndedOfferpublication::class => false,
            \Jlonom\AllegroSDK\Model\GetBadgeCampaignsList::class => false,
            \Jlonom\AllegroSDK\Model\BadgeCampaign::class => false,
            \Jlonom\AllegroSDK\Model\UserCampaignEligibility::class => false,
            \Jlonom\AllegroSDK\Model\CampaignRefusalReason::class => false,
            \Jlonom\AllegroSDK\Model\RefusalMessage::class => false,
            \Jlonom\AllegroSDK\Model\ApplicationTimePolicy::class => false,
            \Jlonom\AllegroSDK\Model\VisibilityTimePolicy::class => false,
            \Jlonom\AllegroSDK\Model\PublicationTimePolicy::class => false,
            \Jlonom\AllegroSDK\Model\BadgePublicationTimePolicy::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationRequest::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationCampaign::class => false,
            \Jlonom\AllegroSDK\Model\OfferBadgeCampaign::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationOffer::class => false,
            \Jlonom\AllegroSDK\Model\BadgePrices::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationPrices::class => false,
            \Jlonom\AllegroSDK\Model\BadgePatchProcess::class => false,
            \Jlonom\AllegroSDK\Model\BadgePatchProcessProcess::class => false,
            \Jlonom\AllegroSDK\Model\BadgePatchPrices::class => false,
            \Jlonom\AllegroSDK\Model\BadgePatchPricesPrices::class => false,
            \Jlonom\AllegroSDK\Model\BadgePatchPricesPricesBargain::class => false,
            \Jlonom\AllegroSDK\Model\BadgeMarketPrice::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationBargainPrice::class => false,
            \Jlonom\AllegroSDK\Model\BadgeSubsidyPrices::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidyTargetPrice::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationSubsidySellerPrice::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraints::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraintsLimit::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationPurchaseConstraintsLimitPerUser::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplications::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplication::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationProcess::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationRejectionReason::class => false,
            \Jlonom\AllegroSDK\Model\BadgeApplicationRejectionReasonMessage::class => false,
            \Jlonom\AllegroSDK\Model\BadgesList::class => false,
            \Jlonom\AllegroSDK\Model\Badge::class => false,
            \Jlonom\AllegroSDK\Model\BadgeProcess::class => false,
            \Jlonom\AllegroSDK\Model\BadgeOperation::class => false,
            \Jlonom\AllegroSDK\Model\BadgeOperationProcess::class => false,
            \Jlonom\AllegroSDK\Model\OfferRating::class => false,
            \Jlonom\AllegroSDK\Model\OfferRatingScoreDistributionItem::class => false,
            \Jlonom\AllegroSDK\Model\OfferRatingSizeFeedbackItem::class => false,
            \Jlonom\AllegroSDK\Model\FundraisingCampaigns::class => false,
            \Jlonom\AllegroSDK\Model\FundraisingCampaign::class => false,
            \Jlonom\AllegroSDK\Model\CharityOrganization::class => false,
            \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesAvailability::class => false,
            \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesCashOnDeliveryAvailability::class => false,
            \Jlonom\AllegroSDK\Model\ParcelAdditionalServicesOptionAvailability::class => false,
            \Jlonom\AllegroSDK\Model\ParcelCreationAddress::class => false,
            \Jlonom\AllegroSDK\Model\ParcelCreationAddressWithMandatoryPlace::class => false,
            \Jlonom\AllegroSDK\Model\Error200::class => false,
            \Jlonom\AllegroSDK\Model\Error400::class => false,
            \Jlonom\AllegroSDK\Model\Error403::class => false,
            \Jlonom\AllegroSDK\Model\Error404::class => false,
            \Jlonom\AllegroSDK\Model\Error504::class => false,
            \Jlonom\AllegroSDK\Model\AvailablePromotionPackages::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceAvailablePromotionPackages::class => false,
            \Jlonom\AllegroSDK\Model\AvailablePromotionPackage::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsModifications::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsModification::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsModification::class => false,
            \Jlonom\AllegroSDK\Model\OfferPromoOptionsForSeller::class => false,
            \Jlonom\AllegroSDK\Model\OfferPromoOptions::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceOfferPromoOption::class => false,
            \Jlonom\AllegroSDK\Model\OfferPromoOption::class => false,
            \Jlonom\AllegroSDK\Model\OfferPromoOptionsPendingChanges::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsCommand::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsCommandModification::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationBasePackage::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalMarketplacePromoOptionsCommandModification::class => false,
            \Jlonom\AllegroSDK\Model\PromoOptionsCommandModificationPackage::class => false,
            \Jlonom\AllegroSDK\Model\PromoGeneralReport::class => false,
            \Jlonom\AllegroSDK\Model\PromoModificationReport::class => false,
            \Jlonom\AllegroSDK\Model\PromoModificationTask::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPoint::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointServicesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointRestrictionsItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointPaymentsItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointAddress::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPickupDropOffPointOpeningItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroParcelTrackingHistory::class => false,
            \Jlonom\AllegroSDK\Model\AllegroParcelTrackingHistoryTrackingDetails::class => false,
            \Jlonom\AllegroSDK\Model\ParcelTrackingHistory::class => false,
            \Jlonom\AllegroSDK\Model\ParcelTrackingHistoryTrackingDetails::class => false,
            \Jlonom\AllegroSDK\Model\AllegroParcelTrackingStatus::class => false,
            \Jlonom\AllegroSDK\Model\ParcelTrackingStatus::class => false,
            \Jlonom\AllegroSDK\Model\CategoryTaxSettings::class => false,
            \Jlonom\AllegroSDK\Model\TaxSubject::class => false,
            \Jlonom\AllegroSDK\Model\TaxRate::class => false,
            \Jlonom\AllegroSDK\Model\TaxRateValue::class => false,
            \Jlonom\AllegroSDK\Model\TaxExemption::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequest::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesAccountChangeRequestAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesAccountConsentChangeResponse::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesAccountConsentChangeResponseAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequest::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesOfferChangeRequestAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesOfferConsentChangeResponse::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesEligibilityResponse::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesEligibilityResponseAdditionalMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroPricesQualificationResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequest::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputOffer::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputCampaign::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandRequestInputProposedPrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputOffer::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputCampaign::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseInputProposedPrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmitCommandResponseOutput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputOffer::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputCampaign::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseInputProposedPrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseOutput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequest::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandRequestInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponseInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountWithdrawCommandResponseOutput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseInput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseOutput::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListEligibleResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDto::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoProduct::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoBasePrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscount::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsItem::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListSubmittedResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDto::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoOffer::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoCampaign::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPrices::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesProposedPrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoProcess::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountSubmittedOfferDtoProcessErrorsItem::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponse::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace::class => false,
            \Jlonom\AllegroSDK\Model\AlleDiscountRequiredMerchantPriceDto::class => false,
            \Jlonom\AllegroSDK\Model\Interlocutor::class => false,
            \Jlonom\AllegroSDK\Model\MessageAuthor::class => false,
            \Jlonom\AllegroSDK\Model\Thread::class => false,
            \Jlonom\AllegroSDK\Model\ThreadId::class => false,
            \Jlonom\AllegroSDK\Model\ThreadsList::class => false,
            \Jlonom\AllegroSDK\Model\ThreadReadFlag::class => false,
            \Jlonom\AllegroSDK\Model\MessageOffer::class => false,
            \Jlonom\AllegroSDK\Model\MessageOrder::class => false,
            \Jlonom\AllegroSDK\Model\MessageRelatedObject::class => false,
            \Jlonom\AllegroSDK\Model\MessageAdditionalInformation::class => false,
            \Jlonom\AllegroSDK\Model\MessageAttachmentInfo::class => false,
            \Jlonom\AllegroSDK\Model\Message::class => false,
            \Jlonom\AllegroSDK\Model\MessagesList::class => false,
            \Jlonom\AllegroSDK\Model\MessageAttachmentId::class => false,
            \Jlonom\AllegroSDK\Model\NewMessageInThread::class => false,
            \Jlonom\AllegroSDK\Model\Recipient::class => false,
            \Jlonom\AllegroSDK\Model\NewMessage::class => false,
            \Jlonom\AllegroSDK\Model\NewAttachmentDeclaration::class => false,
            \Jlonom\AllegroSDK\Model\B2b::class => false,
            \Jlonom\AllegroSDK\Model\MessageToSellerSettings::class => false,
            \Jlonom\AllegroSDK\Model\OfferDescriptionTranslation::class => false,
            \Jlonom\AllegroSDK\Model\OfferTitleTranslation::class => false,
            \Jlonom\AllegroSDK\Model\OfferSafetyInformationTranslation::class => false,
            \Jlonom\AllegroSDK\Model\ProductSafetyInformationDescription::class => false,
            \Jlonom\AllegroSDK\Model\ManualDescriptionTranslation::class => false,
            \Jlonom\AllegroSDK\Model\ManualTitleTranslation::class => false,
            \Jlonom\AllegroSDK\Model\ManualSafetyInformationTranslation::class => false,
            \Jlonom\AllegroSDK\Model\ManualProductSafetyInformationDescriptionTranslation::class => false,
            \Jlonom\AllegroSDK\Model\ManualTranslationUpdateRequest::class => false,
            \Jlonom\AllegroSDK\Model\OfferTranslation::class => false,
            \Jlonom\AllegroSDK\Model\OfferTranslations::class => false,
            \Jlonom\AllegroSDK\Model\SmartDeliveryMethod::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryMethodId::class => false,
            \Jlonom\AllegroSDK\Model\SmartOfferClassificationReport::class => false,
            \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportClassification::class => false,
            \Jlonom\AllegroSDK\Model\SmartOfferClassificationReportConditionsItem::class => false,
            \Jlonom\AllegroSDK\Model\SmartSellerClassificationReport::class => false,
            \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportClassification::class => false,
            \Jlonom\AllegroSDK\Model\SmartSellerClassificationReportConditionsItem::class => false,
            \Jlonom\AllegroSDK\Model\AdvanceShipNotice::class => false,
            \Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeRequest::class => false,
            \Jlonom\AllegroSDK\Model\UpdateSubmittedAdvanceShipNoticeRequest::class => false,
            \Jlonom\AllegroSDK\Model\UpdateSubmittedHandlingUnitInput::class => false,
            \Jlonom\AllegroSDK\Model\UpdateSubmittedShippingInput::class => false,
            \Jlonom\AllegroSDK\Model\AdvanceShipNoticeResponse::class => false,
            \Jlonom\AllegroSDK\Model\CreateAdvanceShipNoticeResponse::class => false,
            \Jlonom\AllegroSDK\Model\AdvanceShipNoticeList::class => false,
            \Jlonom\AllegroSDK\Model\SubmitCommandInput::class => false,
            \Jlonom\AllegroSDK\Model\SubmitCommandOutput::class => false,
            \Jlonom\AllegroSDK\Model\SubmitRunningCommandOutput::class => false,
            \Jlonom\AllegroSDK\Model\SubmitSuccessfulCommandOutput::class => false,
            \Jlonom\AllegroSDK\Model\SubmitFailedCommandOutput::class => false,
            \Jlonom\AllegroSDK\Model\SubmitCommand::class => false,
            \Jlonom\AllegroSDK\Model\Product::class => false,
            \Jlonom\AllegroSDK\Model\ProductItem::class => false,
            \Jlonom\AllegroSDK\Model\HandlingUnit::class => false,
            \Jlonom\AllegroSDK\Model\Labels::class => false,
            \Jlonom\AllegroSDK\Model\Shipping::class => false,
            \Jlonom\AllegroSDK\Model\ShippingExtended::class => false,
            \Jlonom\AllegroSDK\Model\OwnTransportShipping::class => false,
            \Jlonom\AllegroSDK\Model\CourierBySellerShipping::class => false,
            \Jlonom\AllegroSDK\Model\ThirdPartyDeliveryShipping::class => false,
            \Jlonom\AllegroSDK\Model\AlreadyInWarehouseShipping::class => false,
            \Jlonom\AllegroSDK\Model\ThirdParty::class => false,
            \Jlonom\AllegroSDK\Model\Courier::class => false,
            \Jlonom\AllegroSDK\Model\TaxIdRequest::class => false,
            \Jlonom\AllegroSDK\Model\TaxIdResponse::class => false,
            \Jlonom\AllegroSDK\Model\StockProductList::class => false,
            \Jlonom\AllegroSDK\Model\StockProductItem::class => false,
            \Jlonom\AllegroSDK\Model\StockProduct::class => false,
            \Jlonom\AllegroSDK\Model\StockQuantity::class => false,
            \Jlonom\AllegroSDK\Model\StockSellingStats::class => false,
            \Jlonom\AllegroSDK\Model\StockStorageFee::class => false,
            \Jlonom\AllegroSDK\Model\StockStorageFeeDetails::class => false,
            \Jlonom\AllegroSDK\Model\ReserveInfo::class => false,
            \Jlonom\AllegroSDK\Model\AvailableProductsList::class => false,
            \Jlonom\AllegroSDK\Model\AvailableProductResponse::class => false,
            \Jlonom\AllegroSDK\Model\ReceivingState::class => false,
            \Jlonom\AllegroSDK\Model\ReceivingEntry::class => false,
            \Jlonom\AllegroSDK\Model\ReceivingStatus::class => false,
            \Jlonom\AllegroSDK\Model\FulfillmentOrder::class => false,
            \Jlonom\AllegroSDK\Model\FulfillmentOrderParcel::class => false,
            \Jlonom\AllegroSDK\Model\FulfillmentOrderParcelItem::class => false,
            \Jlonom\AllegroSDK\Model\AllegroMarketplaces::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItem::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItemLanguages::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItemCurrencies::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItemLanguage::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItemCurrency::class => false,
            \Jlonom\AllegroSDK\Model\MarketplaceItemShippingCountry::class => false,
            \Jlonom\AllegroSDK\Model\ReceiverAddressDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentPickupAddressDto::class => false,
            \Jlonom\AllegroSDK\Model\SenderAddressDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupAddressDto::class => false,
            \Jlonom\AllegroSDK\Model\AddressDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentCreateCommandDto::class => false,
            \Jlonom\AllegroSDK\Model\CashOnDeliveryDto::class => false,
            \Jlonom\AllegroSDK\Model\InsuranceDto::class => false,
            \Jlonom\AllegroSDK\Model\PackageRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentCreateRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentCancelCommandDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentCancelRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentIdsDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupCreateCommandDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupCreateRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupDateProposalDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupProposalsRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupDateProposalsDto::class => false,
            \Jlonom\AllegroSDK\Model\PickupProposalsResponseDto::class => false,
            \Jlonom\AllegroSDK\Model\LabelRequestDto::class => false,
            \Jlonom\AllegroSDK\Model\PackageDto::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentDto::class => false,
            \Jlonom\AllegroSDK\Model\CreateShipmentCommandStatusDto::class => false,
            \Jlonom\AllegroSDK\Model\CancelShipmentCommandStatusDto::class => false,
            \Jlonom\AllegroSDK\Model\CreatePickupCommandStatusDto::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalServiceDto::class => false,
            \Jlonom\AllegroSDK\Model\AdditionalPropertyDto::class => false,
            \Jlonom\AllegroSDK\Model\CashOnDeliveryLimitDto::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryServiceDto::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryServiceIdDto::class => false,
            \Jlonom\AllegroSDK\Model\DeliveryServicesDto::class => false,
            \Jlonom\AllegroSDK\Model\LimitWithCurrencyDto::class => false,
            \Jlonom\AllegroSDK\Model\WeightValue::class => false,
            \Jlonom\AllegroSDK\Model\DimensionValue::class => false,
            \Jlonom\AllegroSDK\Model\ResponsiblePersonResponse::class => false,
            \Jlonom\AllegroSDK\Model\ResponsiblePersonResponsePersonalData::class => false,
            \Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequest::class => false,
            \Jlonom\AllegroSDK\Model\CreateResponsiblePersonRequestPersonalData::class => false,
            \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequest::class => false,
            \Jlonom\AllegroSDK\Model\UpdateResponsiblePersonRequestPersonalData::class => false,
            \Jlonom\AllegroSDK\Model\ResponsiblePersonAddress::class => false,
            \Jlonom\AllegroSDK\Model\ResponsiblePersonContact::class => false,
            \Jlonom\AllegroSDK\Model\ResponsibleProducerResponse::class => false,
            \Jlonom\AllegroSDK\Model\ResponsibleProducerResponseProducerData::class => false,
            \Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequest::class => false,
            \Jlonom\AllegroSDK\Model\CreateResponsibleProducerRequestProducerData::class => false,
            \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequest::class => false,
            \Jlonom\AllegroSDK\Model\UpdateResponsibleProducerRequestProducerData::class => false,
            \Jlonom\AllegroSDK\Model\ResponsibleProducerAddress::class => false,
            \Jlonom\AllegroSDK\Model\ResponsibleProducerContact::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountRequest::class => false,
            \Jlonom\AllegroSDK\Model\NullableTurnoverDiscountDto::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountDto::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountDefinitionDto::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDto::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoMinimumTurnover::class => false,
            \Jlonom\AllegroSDK\Model\TurnoverDiscountThresholdDtoDiscount::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOffersPostResponse422::class => false,
            \Jlonom\AllegroSDK\Model\SaleProductOffersOfferIdPatchResponse422::class => false,
            \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200ShippingRatesItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleResponsiblePersonsGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\SaleResponsibleProducersGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItem::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime::class => false,
            \Jlonom\AllegroSDK\Model\SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault::class => false,
            \Jlonom\AllegroSDK\Model\AfterSalesServiceConditionsAttachmentsPostBody::class => false,
            \Jlonom\AllegroSDK\Model\SaleOffersOfferIdSmartGetResponse400::class => false,
            \Jlonom\AllegroSDK\Model\SaleOffersOfferIdSmartGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\BiddingOffersOfferIdBidPutBody::class => false,
            \Jlonom\AllegroSDK\Model\SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202::class => false,
            \Jlonom\AllegroSDK\Model\PaymentsRefundsGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\PaymentsRefundsGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\PaymentsRefundsPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\OrderRefundClaimsGetResponse200::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementDeliveryServicesGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementDeliveryServicesGetResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse404::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementShipmentsShipmentIdGetResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse404::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementLabelPostResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse404::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementProtocolPostResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupProposalsPostResponse504::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsPostResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsPostResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403::class => false,
            \Jlonom\AllegroSDK\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}