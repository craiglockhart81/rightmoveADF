<?php
/**
*	This file contains the Export Period Time Group model class.
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
*	Export Period Time Group Class
*
*	Class to handle Export Period Time group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class ExportPeriodTime implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true),
		'end_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true)
	);
}