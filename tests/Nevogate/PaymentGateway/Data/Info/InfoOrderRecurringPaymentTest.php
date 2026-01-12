<?php

namespace Nevogate\Tests\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Data\Info\Order\InfoOrderRecurringPayment;

class InfoOrderRecurringPaymentTest extends InfoAbstractTest
{
	/**
	 * @return array
	 */
	public function dataProviderFor_parameterTest()
	{
		return array(
			array('2030-02-05', 'setExpireDate'),
			array(22, 'setFrequency'),
			array('01', 'setAmountIndicator'),
		);
	}

	protected function getObject(): InfoOrderRecurringPayment
	{
		return new InfoOrderRecurringPayment();
	}
}
