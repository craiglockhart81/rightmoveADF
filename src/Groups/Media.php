<?php
/**
*	This file contains the Media Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\MediaTypes;

/**
*	Media Group Class
*
*	Class to handle Media group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Media implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'media_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\MediaTypes', 'required' => true),
		'media_url' => array('type' => 'string', 'required' => true, 'max' => 250),
		'caption' => array('type' => 'string', 'max' => 50),
		'sort_order' => array('type' => 'int', 'min' => 0),
		'media_update_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s', 'autoinit' => false)
	);
}