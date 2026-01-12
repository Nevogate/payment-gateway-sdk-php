<?php

namespace Nevogate\PaymentGateway\Data\Info\Order;


use Nevogate\PaymentGateway\Data\Info\StructurePathTrait;

class InfoOrderBillingData extends BaseAddress
{
	use StructurePathTrait;

	const PATH = 'BillingData';
}
