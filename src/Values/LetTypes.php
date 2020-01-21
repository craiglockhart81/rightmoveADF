<?php
/**
*	This file contains the Let Types Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Let Types Enum Class
*
*	Class for the different let types.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class LetTypes extends ValuesBase {

	const LongTerm = 1;
	const ShortTerm = 2;
	const Commercial = 4;
	const NotSpecified = 0;
}