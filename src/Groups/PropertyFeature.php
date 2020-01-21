<?php
/**
*	This file contains the Property Feature Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Groups\FeaturedProperty;

/**
*	Property Feature Group Class
*
*	Class to handle Property group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class PropertyFeature implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'featured_property' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\FeaturedProperty', 'required' => true)
	);
}