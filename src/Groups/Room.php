<?php
/**
*	This file contains the Room Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\DimensionUnits;

/**
*	Room Group Class
*
*	Class to handle Room group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Room implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'room_name' => array('type' => 'string', 'required' => true, 'max' => 120),
		'room_description' => array('type' => 'string', 'max' => 1000),
		'room_length' => array('type' => 'number', 'min' => 0),
		'room_width' => array('type' => 'number', 'min' => 0),
		'room_dimension_unit' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\DimensionUnits'),
		'room_dimension_text' => array('type' => 'string', 'max' => 120),
		'room_photo_urls' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\Synthesize\Type\StringObject', 'max' => 10),
	);
}