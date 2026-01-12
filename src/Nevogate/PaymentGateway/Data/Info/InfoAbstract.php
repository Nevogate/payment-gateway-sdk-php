<?php

namespace Nevogate\PaymentGateway\Data\Info;


use Nevogate\PaymentGateway\Common\BaseAbstract;

abstract class InfoAbstract extends BaseAbstract implements InfoInterface
{
	/**
	 * @return null|string
	 */
	abstract public function getStructurePath(): string;
}
