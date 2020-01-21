<?php
/**
*	This file contains the Export Period Group model class.
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
*	Export Period Group Class
*
*	Class to handle Export Period group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class ExportPeriod implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true),
		'end_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true)
	);
}