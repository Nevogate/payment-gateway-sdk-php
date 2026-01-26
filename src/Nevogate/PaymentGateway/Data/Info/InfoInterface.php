<?php

namespace Nevogate\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Common\BaseInterface;

interface InfoInterface extends BaseInterface
{
	/**
	 * @return string
	 */
	public function getStructurePath(): string;
}
