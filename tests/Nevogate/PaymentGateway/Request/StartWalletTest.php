<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\RequestInterface;
use Nevogate\PaymentGateway\Request\StartWallet;

class StartWalletTest extends SimpleTransactionRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return (new StartWallet())->setTransactionId($transactionId);
	}

	/**
	 * @test
	 */
	public function setToken()
	{
		$request = (new StartWallet())
			->setTransactionId('7612312312')
			->setToken('{"paymentData":{"version":"EC_v1"}}');

		$this->assertEquals(array(
			'Token' => '{"paymentData":{"version":"EC_v1"}}',
		), $request->getData()['wallet']);
		$this->assertEquals('7612312312', $request->getData()['transactionId']);
	}

	/**
	 * @test
	 */
	public function setToken_notCalled_walletKeyMissing()
	{
		$request = (new StartWallet())->setTransactionId('7612312312');

		$this->assertArrayNotHasKey('wallet', $request->getData());
	}
}
