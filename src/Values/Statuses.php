<?php
/**
*	This file contains the Statuses Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Statuses Enum Class
*
*	Class for the different statuses.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Statuses extends ValuesBase {

	const Available = 1;
	const SSTC = 2;
	const SSTCM = 3;
	const UnderOffer = 4;
	const Reserved = 5;
	const LetAgreed = 6;
}