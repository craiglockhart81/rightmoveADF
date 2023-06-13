<?php
/**
*	This file contains the Principal Group model class.
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
*	Principal Group Class
*
*	Class to handle Principal group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Principal implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'principal_email_address' => array('type' => 'string', 'required' => true, 'max' => 200),
		'auto_email_when_live' => array('type' => 'boolean'),
		'auto_email_updates' => array('type' => 'boolean')
	);
}