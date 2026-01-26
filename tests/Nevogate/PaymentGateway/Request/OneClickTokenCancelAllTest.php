<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway;
use Nevogate\PaymentGateway\Request\OneClickTokenCancelAll;
use Nevogate\PaymentGateway\Request\RequestInterface;

class OneClickTokenCancelAllTest extends CancelAllPaymentRegistrationsTest
{

	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new OneClickTokenCancelAll())->setProviderName(PaymentGateway::PROVIDER_BORGUN2)->setUserId('14741');
	}
}
