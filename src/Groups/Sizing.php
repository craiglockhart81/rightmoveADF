<?php
/**
*	This file contains the Sizing Group model class.
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
*	Sizing Group Class
*
*	Class to handle Sizing group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Sizing implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'minimum' => array('type' => 'int', 'min' => 0),
		'maximum' => array('type' => 'int', 'min' => 0),
		'area_unit' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\AreaUnits'),
	);
}