<?php
/**
*	This file contains the Accessibilites Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Accessibilites Enum Class
*
*	Class for the different Accessibility options.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Accessibilites extends ValuesBase {

	const NotSuitableForWheelchairUsers = 42;
	const LevelAccess = 37;
	const LiftAccess = 38;
	const RampedAccess = 39;
	const WetRoom = 40;
	const WideDoorways = 41;
}