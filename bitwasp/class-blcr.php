<?php
/** BitWasp class
 *
 * @package CryptoWoo Blacer Coin Addon
 * @subpackage BitWasp
 */

namespace BitWasp\Bitcoin\Network\Networks;

use BitWasp\Bitcoin\Network\Network;
use BitWasp\Bitcoin\Script\ScriptType;

/**
 * Class BLCR
 *
 * @package BitWasp\Bitcoin\Network\Networks
 */
class BLCR extends Network {

	/**
	 * {@inheritdoc}
	 * @see Network::$base58PrefixMap
	 *
	 * Values are base58 prefixes in Hexadecimal.
	 */
	protected $base58PrefixMap = [
		self::BASE58_ADDRESS_P2PKH => '1A',	 // public prefix (PUBKEY_ADDRESS).
		self::BASE58_ADDRESS_P2SH  => '0D', // private prefix (SCRIPT_ADDRESS).
		self::BASE58_WIF           => 'B0', // scripthash prefix (SECRET_KEY).

	];

	/**
	 * {@inheritdoc}
	 * @see Network::$bip32PrefixMap
	 */
	protected $bip32PrefixMap = [
		self::BIP32_PREFIX_XPUB => '022d2533', // extended prefix xpub public (EXT_PUBLIC_KEY).
		self::BIP32_PREFIX_XPRV => '0221312b', // extended prefix xpub public (EXT_SECRET_KEY).
	];

	/**
	 * {@inheritdoc}
	 * @see Network::$bip32ScriptTypeMap
	 */
	protected $bip32ScriptTypeMap = [
		self::BIP32_PREFIX_XPUB => ScriptType::P2PKH,
		self::BIP32_PREFIX_XPRV => ScriptType::P2PKH,
	];

	/**
	 * {@inheritdoc}
	 * @see Network::$signedMessagePrefix
	 */
	protected $signedMessagePrefix = 'BlacerCoin Signed Message';

	/**
	 * {@inheritdoc}
	 * @see Network::$p2pMagic
	 */
	protected $p2pMagic = '32566b4e'; // Protocol magic (pchMessageStart[3] . pchMessageStart[2] . pchMessageStart[1] . pchMessageStart[0]).
}
