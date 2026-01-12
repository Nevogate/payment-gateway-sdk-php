<?php

namespace Nevogate\PaymentGateway\Data\Info\Order;


use Nevogate\PaymentGateway\Data\Info\StructurePathTrait;

class InfoOrderShippingData extends BaseAddress
{
	use StructurePathTrait;

	const PATH = 'ShippingData';
}
