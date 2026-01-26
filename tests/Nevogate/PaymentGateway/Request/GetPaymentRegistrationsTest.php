<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway;
use Nevogate\PaymentGateway\Request\GetPaymentRegistrations;
use Nevogate\PaymentGateway\Request\RequestInterface;

class GetPaymentRegistrationsTest extends SimpleTransactionRequestAbstract
{

	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new GetPaymentRegistrations())->setProviderName(PaymentGateway::PROVIDER_BORGUN2)->setUserId('12345')->setPaymentRegistrationType(PaymentGateway::PAYMENT_REGISTRATION_TYPE_MERCHANT_INITIATED);
	}

	protected function getDataKeys():array
	{
		return array(
			'providerName' => PaymentGateway::PROVIDER_BORGUN2,
			'userId' => '12345',
			'paymentRegistrationType' => PaymentGateway::PAYMENT_REGISTRATION_TYPE_MERCHANT_INITIATED,
		);
	}
}
