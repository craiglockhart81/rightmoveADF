<?php
/**
*	This file contains the Featured Property Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\FeaturedPropertyTypes;

/**
*	Featured Property Group Class
*
*	Class to handle Featured Property group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class FeaturedProperty implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'featured_property_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\FeaturedPropertyTypes', 'required' => true)
	);
}