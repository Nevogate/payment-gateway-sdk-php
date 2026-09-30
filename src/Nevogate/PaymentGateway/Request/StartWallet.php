<?php

namespace Nevogate\PaymentGateway\Request;

class StartWallet extends SimpleRequestAbstract
{
	const REQUEST_TYPE = 'StartWallet';

	/**
	 * Wallet payment token (Apple Pay / Google Pay), regardless of wallet type.
	 *
	 * @param string $token
	 * @return $this
	 */
	public function setToken(string $token): self
	{
		return $this->setData(['Token' => $token], 'wallet');
	}
}
