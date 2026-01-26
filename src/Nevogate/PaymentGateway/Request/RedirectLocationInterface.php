<?php
namespace Nevogate\PaymentGateway\Request;

interface RedirectLocationInterface
{
	/**
	 * @return string
	 */
	public function getRedirectUrl(): string;
}