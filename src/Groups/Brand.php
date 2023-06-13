<?php
/**
*	This file contains the Brand Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Brand Group Class
*
*	Class to handle Brand group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Brand implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'brand_id' => array('type' => 'int', 'required' => true)
	);
}