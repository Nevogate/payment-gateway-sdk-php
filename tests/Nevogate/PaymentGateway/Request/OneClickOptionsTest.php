<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway;
use Nevogate\PaymentGateway\Request\OneClickOptions;
use Nevogate\PaymentGateway\Request\RequestInterface;

class OneClickOptionsTest extends SimpleTransactionRequestAbstract
{

	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new OneClickOptions())->setProviderName(PaymentGateway::PROVIDER_BORGUN2)->setUserId('12345');
	}

	protected function getDataKeys():array
	{
		return array(
			'providerName' => PaymentGateway::PROVIDER_BORGUN2,
			'userId' => '12345'
		);
	}
}
