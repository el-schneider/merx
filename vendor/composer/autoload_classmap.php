<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'PayPalCheckoutSdk\\Core\\AccessToken' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/AccessToken.php',
    'PayPalCheckoutSdk\\Core\\AccessTokenRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/AccessTokenRequest.php',
    'PayPalCheckoutSdk\\Core\\AuthorizationInjector' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/AuthorizationInjector.php',
    'PayPalCheckoutSdk\\Core\\FPTIInstrumentationInjector' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/FPTIInstrumentationInjector.php',
    'PayPalCheckoutSdk\\Core\\GzipInjector' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/GzipInjector.php',
    'PayPalCheckoutSdk\\Core\\PayPalEnvironment' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/PayPalEnvironment.php',
    'PayPalCheckoutSdk\\Core\\PayPalHttpClient' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/PayPalHttpClient.php',
    'PayPalCheckoutSdk\\Core\\ProductionEnvironment' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/ProductionEnvironment.php',
    'PayPalCheckoutSdk\\Core\\RefreshTokenRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/RefreshTokenRequest.php',
    'PayPalCheckoutSdk\\Core\\SandboxEnvironment' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/SandboxEnvironment.php',
    'PayPalCheckoutSdk\\Core\\UserAgent' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/UserAgent.php',
    'PayPalCheckoutSdk\\Core\\Version' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Core/Version.php',
    'PayPalCheckoutSdk\\Orders\\OrdersAuthorizeRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersAuthorizeRequest.php',
    'PayPalCheckoutSdk\\Orders\\OrdersCaptureRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersCaptureRequest.php',
    'PayPalCheckoutSdk\\Orders\\OrdersCreateRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersCreateRequest.php',
    'PayPalCheckoutSdk\\Orders\\OrdersGetRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersGetRequest.php',
    'PayPalCheckoutSdk\\Orders\\OrdersPatchRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersPatchRequest.php',
    'PayPalCheckoutSdk\\Orders\\OrdersValidateRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Orders/OrdersValidateRequest.php',
    'PayPalCheckoutSdk\\Payments\\AuthorizationsCaptureRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/AuthorizationsCaptureRequest.php',
    'PayPalCheckoutSdk\\Payments\\AuthorizationsGetRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/AuthorizationsGetRequest.php',
    'PayPalCheckoutSdk\\Payments\\AuthorizationsReauthorizeRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/AuthorizationsReauthorizeRequest.php',
    'PayPalCheckoutSdk\\Payments\\AuthorizationsVoidRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/AuthorizationsVoidRequest.php',
    'PayPalCheckoutSdk\\Payments\\CapturesGetRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/CapturesGetRequest.php',
    'PayPalCheckoutSdk\\Payments\\CapturesRefundRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/CapturesRefundRequest.php',
    'PayPalCheckoutSdk\\Payments\\RefundsGetRequest' => $vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk/Payments/RefundsGetRequest.php',
    'PayPalHttp\\Curl' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Curl.php',
    'PayPalHttp\\Encoder' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Encoder.php',
    'PayPalHttp\\Environment' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Environment.php',
    'PayPalHttp\\HttpClient' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/HttpClient.php',
    'PayPalHttp\\HttpException' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/HttpException.php',
    'PayPalHttp\\HttpRequest' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/HttpRequest.php',
    'PayPalHttp\\HttpResponse' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/HttpResponse.php',
    'PayPalHttp\\IOException' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/IOException.php',
    'PayPalHttp\\Injector' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Injector.php',
    'PayPalHttp\\Serializer' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer.php',
    'PayPalHttp\\Serializer\\Form' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer/Form.php',
    'PayPalHttp\\Serializer\\FormPart' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer/FormPart.php',
    'PayPalHttp\\Serializer\\Json' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer/Json.php',
    'PayPalHttp\\Serializer\\Multipart' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer/Multipart.php',
    'PayPalHttp\\Serializer\\Text' => $vendorDir . '/paypal/paypalhttp/lib/PayPalHttp/Serializer/Text.php',
    'Sample\\AuthorizeIntentExamples\\AuthorizeOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/AuthorizeIntentExamples/AuthorizeOrder.php',
    'Sample\\AuthorizeIntentExamples\\CaptureOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/AuthorizeIntentExamples/CaptureOrder.php',
    'Sample\\AuthorizeIntentExamples\\CreateOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/AuthorizeIntentExamples/CreateOrder.php',
    'Sample\\CaptureIntentExamples\\CaptureOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/CaptureIntentExamples/CaptureOrder.php',
    'Sample\\CaptureIntentExamples\\CreateOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/CaptureIntentExamples/CreateOrder.php',
    'Sample\\GetOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/GetOrder.php',
    'Sample\\PatchOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/PatchOrder.php',
    'Sample\\PayPalClient' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/PayPalClient.php',
    'Sample\\RefundOrder' => $vendorDir . '/paypal/paypal-checkout-sdk/samples/RefundOrder.php',
    'Stripe\\Account' => $vendorDir . '/stripe/stripe-php/lib/Account.php',
    'Stripe\\AccountLink' => $vendorDir . '/stripe/stripe-php/lib/AccountLink.php',
    'Stripe\\AlipayAccount' => $vendorDir . '/stripe/stripe-php/lib/AlipayAccount.php',
    'Stripe\\ApiOperations\\All' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/All.php',
    'Stripe\\ApiOperations\\Create' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/Create.php',
    'Stripe\\ApiOperations\\Delete' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/Delete.php',
    'Stripe\\ApiOperations\\NestedResource' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/NestedResource.php',
    'Stripe\\ApiOperations\\Request' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/Request.php',
    'Stripe\\ApiOperations\\Retrieve' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/Retrieve.php',
    'Stripe\\ApiOperations\\Update' => $vendorDir . '/stripe/stripe-php/lib/ApiOperations/Update.php',
    'Stripe\\ApiRequestor' => $vendorDir . '/stripe/stripe-php/lib/ApiRequestor.php',
    'Stripe\\ApiResource' => $vendorDir . '/stripe/stripe-php/lib/ApiResource.php',
    'Stripe\\ApiResponse' => $vendorDir . '/stripe/stripe-php/lib/ApiResponse.php',
    'Stripe\\ApplePayDomain' => $vendorDir . '/stripe/stripe-php/lib/ApplePayDomain.php',
    'Stripe\\ApplicationFee' => $vendorDir . '/stripe/stripe-php/lib/ApplicationFee.php',
    'Stripe\\ApplicationFeeRefund' => $vendorDir . '/stripe/stripe-php/lib/ApplicationFeeRefund.php',
    'Stripe\\Balance' => $vendorDir . '/stripe/stripe-php/lib/Balance.php',
    'Stripe\\BalanceTransaction' => $vendorDir . '/stripe/stripe-php/lib/BalanceTransaction.php',
    'Stripe\\BankAccount' => $vendorDir . '/stripe/stripe-php/lib/BankAccount.php',
    'Stripe\\BitcoinReceiver' => $vendorDir . '/stripe/stripe-php/lib/BitcoinReceiver.php',
    'Stripe\\BitcoinTransaction' => $vendorDir . '/stripe/stripe-php/lib/BitcoinTransaction.php',
    'Stripe\\Capability' => $vendorDir . '/stripe/stripe-php/lib/Capability.php',
    'Stripe\\Card' => $vendorDir . '/stripe/stripe-php/lib/Card.php',
    'Stripe\\Charge' => $vendorDir . '/stripe/stripe-php/lib/Charge.php',
    'Stripe\\Checkout\\Session' => $vendorDir . '/stripe/stripe-php/lib/Checkout/Session.php',
    'Stripe\\Collection' => $vendorDir . '/stripe/stripe-php/lib/Collection.php',
    'Stripe\\CountrySpec' => $vendorDir . '/stripe/stripe-php/lib/CountrySpec.php',
    'Stripe\\Coupon' => $vendorDir . '/stripe/stripe-php/lib/Coupon.php',
    'Stripe\\CreditNote' => $vendorDir . '/stripe/stripe-php/lib/CreditNote.php',
    'Stripe\\Customer' => $vendorDir . '/stripe/stripe-php/lib/Customer.php',
    'Stripe\\CustomerBalanceTransaction' => $vendorDir . '/stripe/stripe-php/lib/CustomerBalanceTransaction.php',
    'Stripe\\Discount' => $vendorDir . '/stripe/stripe-php/lib/Discount.php',
    'Stripe\\Dispute' => $vendorDir . '/stripe/stripe-php/lib/Dispute.php',
    'Stripe\\EphemeralKey' => $vendorDir . '/stripe/stripe-php/lib/EphemeralKey.php',
    'Stripe\\Error\\Api' => $vendorDir . '/stripe/stripe-php/lib/Error/Api.php',
    'Stripe\\Error\\ApiConnection' => $vendorDir . '/stripe/stripe-php/lib/Error/ApiConnection.php',
    'Stripe\\Error\\Authentication' => $vendorDir . '/stripe/stripe-php/lib/Error/Authentication.php',
    'Stripe\\Error\\Base' => $vendorDir . '/stripe/stripe-php/lib/Error/Base.php',
    'Stripe\\Error\\Card' => $vendorDir . '/stripe/stripe-php/lib/Error/Card.php',
    'Stripe\\Error\\Idempotency' => $vendorDir . '/stripe/stripe-php/lib/Error/Idempotency.php',
    'Stripe\\Error\\InvalidRequest' => $vendorDir . '/stripe/stripe-php/lib/Error/InvalidRequest.php',
    'Stripe\\Error\\OAuth\\InvalidClient' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/InvalidClient.php',
    'Stripe\\Error\\OAuth\\InvalidGrant' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/InvalidGrant.php',
    'Stripe\\Error\\OAuth\\InvalidRequest' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/InvalidRequest.php',
    'Stripe\\Error\\OAuth\\InvalidScope' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/InvalidScope.php',
    'Stripe\\Error\\OAuth\\OAuthBase' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/OAuthBase.php',
    'Stripe\\Error\\OAuth\\UnsupportedGrantType' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/UnsupportedGrantType.php',
    'Stripe\\Error\\OAuth\\UnsupportedResponseType' => $vendorDir . '/stripe/stripe-php/lib/Error/OAuth/UnsupportedResponseType.php',
    'Stripe\\Error\\Permission' => $vendorDir . '/stripe/stripe-php/lib/Error/Permission.php',
    'Stripe\\Error\\RateLimit' => $vendorDir . '/stripe/stripe-php/lib/Error/RateLimit.php',
    'Stripe\\Error\\SignatureVerification' => $vendorDir . '/stripe/stripe-php/lib/Error/SignatureVerification.php',
    'Stripe\\Event' => $vendorDir . '/stripe/stripe-php/lib/Event.php',
    'Stripe\\ExchangeRate' => $vendorDir . '/stripe/stripe-php/lib/ExchangeRate.php',
    'Stripe\\File' => $vendorDir . '/stripe/stripe-php/lib/File.php',
    'Stripe\\FileLink' => $vendorDir . '/stripe/stripe-php/lib/FileLink.php',
    'Stripe\\HttpClient\\ClientInterface' => $vendorDir . '/stripe/stripe-php/lib/HttpClient/ClientInterface.php',
    'Stripe\\HttpClient\\CurlClient' => $vendorDir . '/stripe/stripe-php/lib/HttpClient/CurlClient.php',
    'Stripe\\Invoice' => $vendorDir . '/stripe/stripe-php/lib/Invoice.php',
    'Stripe\\InvoiceItem' => $vendorDir . '/stripe/stripe-php/lib/InvoiceItem.php',
    'Stripe\\InvoiceLineItem' => $vendorDir . '/stripe/stripe-php/lib/InvoiceLineItem.php',
    'Stripe\\IssuerFraudRecord' => $vendorDir . '/stripe/stripe-php/lib/IssuerFraudRecord.php',
    'Stripe\\Issuing\\Authorization' => $vendorDir . '/stripe/stripe-php/lib/Issuing/Authorization.php',
    'Stripe\\Issuing\\Card' => $vendorDir . '/stripe/stripe-php/lib/Issuing/Card.php',
    'Stripe\\Issuing\\CardDetails' => $vendorDir . '/stripe/stripe-php/lib/Issuing/CardDetails.php',
    'Stripe\\Issuing\\Cardholder' => $vendorDir . '/stripe/stripe-php/lib/Issuing/Cardholder.php',
    'Stripe\\Issuing\\Dispute' => $vendorDir . '/stripe/stripe-php/lib/Issuing/Dispute.php',
    'Stripe\\Issuing\\Transaction' => $vendorDir . '/stripe/stripe-php/lib/Issuing/Transaction.php',
    'Stripe\\LoginLink' => $vendorDir . '/stripe/stripe-php/lib/LoginLink.php',
    'Stripe\\OAuth' => $vendorDir . '/stripe/stripe-php/lib/OAuth.php',
    'Stripe\\Order' => $vendorDir . '/stripe/stripe-php/lib/Order.php',
    'Stripe\\OrderItem' => $vendorDir . '/stripe/stripe-php/lib/OrderItem.php',
    'Stripe\\OrderReturn' => $vendorDir . '/stripe/stripe-php/lib/OrderReturn.php',
    'Stripe\\PaymentIntent' => $vendorDir . '/stripe/stripe-php/lib/PaymentIntent.php',
    'Stripe\\PaymentMethod' => $vendorDir . '/stripe/stripe-php/lib/PaymentMethod.php',
    'Stripe\\Payout' => $vendorDir . '/stripe/stripe-php/lib/Payout.php',
    'Stripe\\Person' => $vendorDir . '/stripe/stripe-php/lib/Person.php',
    'Stripe\\Plan' => $vendorDir . '/stripe/stripe-php/lib/Plan.php',
    'Stripe\\Product' => $vendorDir . '/stripe/stripe-php/lib/Product.php',
    'Stripe\\Radar\\EarlyFraudWarning' => $vendorDir . '/stripe/stripe-php/lib/Radar/EarlyFraudWarning.php',
    'Stripe\\Radar\\ValueList' => $vendorDir . '/stripe/stripe-php/lib/Radar/ValueList.php',
    'Stripe\\Radar\\ValueListItem' => $vendorDir . '/stripe/stripe-php/lib/Radar/ValueListItem.php',
    'Stripe\\Recipient' => $vendorDir . '/stripe/stripe-php/lib/Recipient.php',
    'Stripe\\RecipientTransfer' => $vendorDir . '/stripe/stripe-php/lib/RecipientTransfer.php',
    'Stripe\\Refund' => $vendorDir . '/stripe/stripe-php/lib/Refund.php',
    'Stripe\\Reporting\\ReportRun' => $vendorDir . '/stripe/stripe-php/lib/Reporting/ReportRun.php',
    'Stripe\\Reporting\\ReportType' => $vendorDir . '/stripe/stripe-php/lib/Reporting/ReportType.php',
    'Stripe\\RequestTelemetry' => $vendorDir . '/stripe/stripe-php/lib/RequestTelemetry.php',
    'Stripe\\Review' => $vendorDir . '/stripe/stripe-php/lib/Review.php',
    'Stripe\\SKU' => $vendorDir . '/stripe/stripe-php/lib/SKU.php',
    'Stripe\\SetupIntent' => $vendorDir . '/stripe/stripe-php/lib/SetupIntent.php',
    'Stripe\\Sigma\\ScheduledQueryRun' => $vendorDir . '/stripe/stripe-php/lib/Sigma/ScheduledQueryRun.php',
    'Stripe\\SingletonApiResource' => $vendorDir . '/stripe/stripe-php/lib/SingletonApiResource.php',
    'Stripe\\Source' => $vendorDir . '/stripe/stripe-php/lib/Source.php',
    'Stripe\\SourceTransaction' => $vendorDir . '/stripe/stripe-php/lib/SourceTransaction.php',
    'Stripe\\Stripe' => $vendorDir . '/stripe/stripe-php/lib/Stripe.php',
    'Stripe\\StripeObject' => $vendorDir . '/stripe/stripe-php/lib/StripeObject.php',
    'Stripe\\Subscription' => $vendorDir . '/stripe/stripe-php/lib/Subscription.php',
    'Stripe\\SubscriptionItem' => $vendorDir . '/stripe/stripe-php/lib/SubscriptionItem.php',
    'Stripe\\SubscriptionSchedule' => $vendorDir . '/stripe/stripe-php/lib/SubscriptionSchedule.php',
    'Stripe\\TaxId' => $vendorDir . '/stripe/stripe-php/lib/TaxId.php',
    'Stripe\\TaxRate' => $vendorDir . '/stripe/stripe-php/lib/TaxRate.php',
    'Stripe\\Terminal\\ConnectionToken' => $vendorDir . '/stripe/stripe-php/lib/Terminal/ConnectionToken.php',
    'Stripe\\Terminal\\Location' => $vendorDir . '/stripe/stripe-php/lib/Terminal/Location.php',
    'Stripe\\Terminal\\Reader' => $vendorDir . '/stripe/stripe-php/lib/Terminal/Reader.php',
    'Stripe\\ThreeDSecure' => $vendorDir . '/stripe/stripe-php/lib/ThreeDSecure.php',
    'Stripe\\Token' => $vendorDir . '/stripe/stripe-php/lib/Token.php',
    'Stripe\\Topup' => $vendorDir . '/stripe/stripe-php/lib/Topup.php',
    'Stripe\\Transfer' => $vendorDir . '/stripe/stripe-php/lib/Transfer.php',
    'Stripe\\TransferReversal' => $vendorDir . '/stripe/stripe-php/lib/TransferReversal.php',
    'Stripe\\UsageRecord' => $vendorDir . '/stripe/stripe-php/lib/UsageRecord.php',
    'Stripe\\UsageRecordSummary' => $vendorDir . '/stripe/stripe-php/lib/UsageRecordSummary.php',
    'Stripe\\Util\\AutoPagingIterator' => $vendorDir . '/stripe/stripe-php/lib/Util/AutoPagingIterator.php',
    'Stripe\\Util\\CaseInsensitiveArray' => $vendorDir . '/stripe/stripe-php/lib/Util/CaseInsensitiveArray.php',
    'Stripe\\Util\\DefaultLogger' => $vendorDir . '/stripe/stripe-php/lib/Util/DefaultLogger.php',
    'Stripe\\Util\\LoggerInterface' => $vendorDir . '/stripe/stripe-php/lib/Util/LoggerInterface.php',
    'Stripe\\Util\\RandomGenerator' => $vendorDir . '/stripe/stripe-php/lib/Util/RandomGenerator.php',
    'Stripe\\Util\\RequestOptions' => $vendorDir . '/stripe/stripe-php/lib/Util/RequestOptions.php',
    'Stripe\\Util\\Set' => $vendorDir . '/stripe/stripe-php/lib/Util/Set.php',
    'Stripe\\Util\\Util' => $vendorDir . '/stripe/stripe-php/lib/Util/Util.php',
    'Stripe\\Webhook' => $vendorDir . '/stripe/stripe-php/lib/Webhook.php',
    'Stripe\\WebhookEndpoint' => $vendorDir . '/stripe/stripe-php/lib/WebhookEndpoint.php',
    'Stripe\\WebhookSignature' => $vendorDir . '/stripe/stripe-php/lib/WebhookSignature.php',
    'Wagnerwagner\\Merx\\Cart' => $baseDir . '/src/cart.php',
    'Wagnerwagner\\Merx\\Gateways' => $baseDir . '/src/gateways.php',
    'Wagnerwagner\\Merx\\Merx' => $baseDir . '/src/merx.php',
    'Wagnerwagner\\Merx\\Payment' => $baseDir . '/src/payment.php',
    'Wagnerwagner\\Merx\\ProductList' => $baseDir . '/src/productList.php',
);
