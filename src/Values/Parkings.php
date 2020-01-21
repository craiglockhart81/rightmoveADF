<?php
/**
*	This file contains the Parkings Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Parkings Enum Class
*
*	Class for the different parking options.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Parkings extends ValuesBase {

	const Allocated = 13;
	const Communal = 14;
	const Covered = 15;
	const Garage = 16;
	const Driveway = 17;
	const Gated = 18;
	const OffStreet = 19;
	const OnStreet = 20;
	const Rear = 21;
	const Permit = 22;
	const PrivateParking = 23;
	const Residents = 24;
}