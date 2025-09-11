<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\Invoice;
use Nevogate\PaymentGateway\Request\RequestInterface;

class InvoiceTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Invoice())->setTransactionId($transactionId)->setInvoiceData(['test' => 'data']);
	}
}
