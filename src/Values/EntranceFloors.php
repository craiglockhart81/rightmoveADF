<?php
/**
*	This file contains the Entrance Floors Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Entrance Floors Enum Class
*
*	Class for the different entrance floors.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class EntranceFloors extends ValuesBase {

	const Basement = 1;
	const GroundFloor = 2;
	const FirstFloor = 3;
	const SecondFloor = 4;
	const HigherThan2ndFloorNoLift = 5;
	const HigherThan2ndFloorWithLift = 6;
}