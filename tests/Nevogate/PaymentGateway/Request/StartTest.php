<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\RequestInterface;
use Nevogate\PaymentGateway\Request\Start;

class StartTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Start())->setTransactionId($transactionId);
	}
}
