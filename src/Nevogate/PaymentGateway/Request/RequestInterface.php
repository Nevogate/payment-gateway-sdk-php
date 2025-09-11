<?php

namespace Nevogate\PaymentGateway\Request;

use Nevogate\PaymentGateway\Common\BaseInterface;

interface RequestInterface extends BaseInterface
{
	/**
	 * @return string
	 */
	public function getMethod(): string;
}
