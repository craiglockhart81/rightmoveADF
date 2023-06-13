<?php
/**
*	This file contains the Premium Listing Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\DisplayTypes;
use Craiglockhart81\RightmoveADF\Values\StampTexts;

/**
*	Premium Listing  Group Class
*
*	Class to handle Premium Listing group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class PremiumListing implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'display_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\DisplayTypes', 'required' => true),
		'resale_stamp_text' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\StampTexts'),
		'lettings_stamp_text' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\StampTexts'),
		'web_flag' => array('type' => 'boolean', 'default' => false, 'required' => true),
		'mobile_flag' => array('type' => 'boolean', 'default' => false, 'required' => true)
	);
}