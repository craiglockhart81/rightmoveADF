<?php
/**
*	This file contains the Media Types Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Media Types Enum Class
*
*	Class for the different media types.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class MediaTypes extends ValuesBase {

	const Image = 1;
	const Floorplan = 2;
	const Brochure = 3;
	const VirtualTour = 4;
	const AudioTour = 5	;
	const EPC = 6;
	const EPCGraph = 7;
}