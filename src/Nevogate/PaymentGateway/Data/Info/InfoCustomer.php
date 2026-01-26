<?php

namespace Nevogate\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Data\Info;

class InfoCustomer extends Info
{
	use StructurePathTrait;

	const PATH = 'Customer';

	public function getData(): array
	{
		return $this->data;
	}
}
