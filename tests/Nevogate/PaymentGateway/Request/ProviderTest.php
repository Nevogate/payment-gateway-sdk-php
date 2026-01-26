<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway;
use Nevogate\PaymentGateway\Request\Providers;
use Nevogate\PaymentGateway\Request\RequestInterface;

class ProviderTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		$provider = new Providers();
		$provider->setStoreName(PaymentGateway::PROVIDER_BORGUN2);
		return $provider;
	}

	protected function getDataKeys():array
	{
		return array(
			'storeName' => PaymentGateway::PROVIDER_BORGUN2
		);
	}
}
