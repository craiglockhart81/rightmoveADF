<?php
/**
*	This file contains the Conditions Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Conditions Enum Class
*
*	Class for the different Conditions.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Conditions extends ValuesBase {

	const Good = 1;
	const SomeWorkNeeded = 2;
	const WorkRequiredThroughout = 3;
	const MajorRenovationRequired = 4;
}