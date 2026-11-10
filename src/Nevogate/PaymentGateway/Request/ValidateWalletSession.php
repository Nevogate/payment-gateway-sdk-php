<?php

namespace Nevogate\PaymentGateway\Request;

use Nevogate\PaymentGateway\Data\Wallet;
use Nevogate\PaymentGateway\Exception\PaymentGatewayException;

/**
 * Apple Pay merchant validation without a transaction (Barion2 only).
 */
class ValidateWalletSession extends InitBaseAbstract
{
	const REQUEST_TYPE = 'ValidateWalletSession';

	/**
	 * Must match the later InitWallet (default: HUF).
	 *
	 * @param string $currency Three-letter ISO currency code (e.g. HUF, USD etc.)
	 * @return $this
	 */
	public function setCurrency(string $currency): self
	{
		return $this->setData($currency, 'currency');
	}

	/**
	 * Must match the later InitWallet (default: true).
	 *
	 * @param bool $autoCommit
	 * @return $this
	 */
	public function setAutoCommit(bool $autoCommit = true): self
	{
		return $this->setData($autoCommit ? 'true' : 'false', 'autoCommit');
	}

	/**
	 * Only Apple Pay wallet is accepted.
	 *
	 * @param Wallet $wallet
	 * @return $this
	 * @throws PaymentGatewayException
	 */
	public function setWallet(Wallet $wallet): self
	{
		if (($wallet->getData()[Wallet::TYPE] ?? null) !== Wallet::TYPE_APPLE_PAY) {
			throw new PaymentGatewayException('Invalid wallet type, only Apple Pay is supported');
		}

		return $this->setData($wallet->getUcFirstData(), 'wallet');
	}
}
