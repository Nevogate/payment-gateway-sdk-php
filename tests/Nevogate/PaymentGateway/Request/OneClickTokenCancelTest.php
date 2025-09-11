<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\OneClickTokenCancel;
use Nevogate\PaymentGateway\Request\RequestInterface;

class OneClickTokenCancelTest extends SimpleTransactionRequestAbstract
{

	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new OneClickTokenCancel())->setTransactionId($transactionId);
	}
}
