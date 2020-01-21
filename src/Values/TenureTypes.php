<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class TenureTypes extends ValuesBase {

	const Freehold = 1;
	const Leasehold = 2;
	const Feudal = 3;
	const Commonhold = 4;
	const ShareOfFreehold = 5;
}