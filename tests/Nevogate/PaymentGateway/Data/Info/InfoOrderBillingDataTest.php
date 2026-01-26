<?php

namespace Nevogate\Tests\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Data\Info\Order\InfoOrderBillingData;

class InfoOrderBillingDataTest extends InfoOrderShippingDataTest
{
	/**
	 * @return InfoOrderBillingData
	 */
	protected function getObject()
	{
		return new InfoOrderBillingData();
	}
}
