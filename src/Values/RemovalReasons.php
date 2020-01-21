<?php
/**
*	This file contains the Removal Reasons Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Removal Reasons Enum Class
*
*	Class for the different removal reasons.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class RemovalReasons extends ValuesBase {

	const SoldByUs = 7;
	const SoldByAnotherAgent = 8;
	const WithdrawnFromMarket = 9;
	const LostInstruction = 10;
	const Removed = 11;
	const LetByUs = 12;
}