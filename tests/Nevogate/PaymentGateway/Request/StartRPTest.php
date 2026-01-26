<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\RequestInterface;
use Nevogate\PaymentGateway\Request\StartRP;

class StartRPTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new StartRP())->setTransactionId($transactionId);
	}
}
