<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\Close;
use Nevogate\PaymentGateway\Request\RequestInterface;

class CloseTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new Close())->setTransactionId($transactionId)->setApprove(true)->setApprovedAmount(1);
	}

	protected function getDataKeys(): array
	{
		$result = parent::getDataKeys();
		$result['approved'] = 'true';
		$result['approvedAmount'] = 1;
		return $result;
	}
}
