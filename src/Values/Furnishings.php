<?php
/**
*	This file contains the Furnishings Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Furnishings Enum Class
*
*	Class for the different Furnishing options.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Furnishings extends ValuesBase {

	const Furnished = 0;
	const PartFurnished = 1;
	const Unfurnished = 2;
	const FurnishedUnfurnished = 4;
}