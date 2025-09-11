<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\Cancel;
use Nevogate\PaymentGateway\Request\RequestInterface;

class CancelTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Cancel())->setTransactionId($transactionId);
	}
}
