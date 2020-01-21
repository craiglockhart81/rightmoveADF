<?php
/**
*	This file contains the Rent Frequencies Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Rent Frequencies Enum Class
*
*	Class for the different rent frequencies.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class RentFrequencies extends ValuesBase {

	const Yearly = 1;
	const Quarterly = 4;
	const Monthly = 12;
	const Weekly = 52;
	const Daily = 365;
}