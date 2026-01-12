<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\RequestInterface;
use Nevogate\PaymentGateway\Request\Result;

class ResultTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Result())->setTransactionId($transactionId);
	}
}
