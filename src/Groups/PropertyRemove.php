<?php
/**
*	This file contains the Property Remove Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\RemovalReasons;

/**
*	Property Remove Group Class
*
*	Class to handle Property group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class PropertyRemove implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'removal_reason' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\RemovalReasons'),
		'transaction_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s', 'autoinit' => false)
	);
}