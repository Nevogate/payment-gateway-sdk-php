<?php

namespace Nevogate\PaymentGateway\Request;

use Nevogate\PaymentGateway\Data\Wallet;

class InitWallet extends InitCommonAbstract
{
	const REQUEST_TYPE = 'InitWallet';

	/**
	 * @param Wallet $wallet
	 * @return $this
	 */
	public function setWallet(Wallet $wallet): self
	{
		return $this->setData($wallet->getUcFirstData(), 'wallet');
	}
}
