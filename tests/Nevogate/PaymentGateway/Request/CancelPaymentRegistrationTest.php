<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\CancelPaymentRegistration;
use Nevogate\PaymentGateway\Request\RequestInterface;

class CancelPaymentRegistrationTest extends SimpleTransactionRequestAbstract
{

	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new CancelPaymentRegistration())->setTransactionId($transactionId);
	}
}
