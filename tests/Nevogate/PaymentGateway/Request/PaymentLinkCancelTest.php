<?php

namespace Nevogate\Tests\PaymentGateway\Request;


use Nevogate\PaymentGateway\Request\PaymentLinkCancel;
use Nevogate\PaymentGateway\Request\RequestInterface;

class PaymentLinkCancelTest extends SimplePaymentLinkRequestAbstract
{

	protected function getRequest(string $paymentLinkName): RequestInterface
	{
		return (new PaymentLinkCancel())->setPaymentLinkName($paymentLinkName);
	}

	protected function getDataKeys():array
	{
		return array(
			self::PAYMENT_LINK_NAME => 'pl_' . substr(md5(rand(100, 10000)), 0, 20)
		);
	}
}
