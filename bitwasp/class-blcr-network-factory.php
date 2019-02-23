<?php

namespace BitWasp\Bitcoin\Network;

/** Class GAME_NetworkFactory
 *
 * @package BitWasp\Bitcoin\Network
 */
class BLCR_Network_Factory extends CW_NetworkFactory {

	/** BitWasp factory
	 *
	 * @return Networks\BLCR
	 * @throws \BitWasp\Bitcoin\Exceptions\InvalidNetworkParameter Invalid Network Parameter exception.
	 */
	public static function BLCR() {
		return new Networks\BLCR();
	}
}
