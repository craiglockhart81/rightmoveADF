<?php
/**
*	This file contains the Branch Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\Channels;

/**
*	Branch Group Class
*
*	Class to handle Branch group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Branch implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'branch_id' => array('type' => 'int', 'required' => true),
		'channel' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\Channels', 'required' => true),
		'overseas' => array('type' => 'boolean')
	);
}