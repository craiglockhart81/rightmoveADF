<?php
/**
*	This file contains the Property Premium Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Groups\PremiumListing;


/**
*	Property Premium Group Class
*
*	Class to handle Property Premium group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class PropertyPremium implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'premium_listing' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\PremiumListing', 'required' => true)
	);
}