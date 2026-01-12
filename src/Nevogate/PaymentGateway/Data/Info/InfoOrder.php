<?php

namespace Nevogate\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Data\Info;

class InfoOrder extends Info
{
	use StructurePathTrait;

	const PATH = 'Order';

	public function getData(): array
	{
		return $this->data;
	}
}
