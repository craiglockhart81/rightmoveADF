<?php
/**
*	This file contains the Network Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;

/**
*	Network Group Class
*
*	Class to handle Network group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Network implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network_id' => array('type' => 'int', 'required' => true)
	);
}