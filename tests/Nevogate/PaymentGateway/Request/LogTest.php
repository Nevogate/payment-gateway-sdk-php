<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\Log;
use Nevogate\PaymentGateway\Request\RequestInterface;

class LogTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Log())->setTransactionId($transactionId);
	}
}
