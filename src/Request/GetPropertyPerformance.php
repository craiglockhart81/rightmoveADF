<?php
/**
*	This file contains the Get Property Performance Request model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Request;

use Craiglockhart81\RightmoveADF\Request\RequestBase;
use Craiglockhart81\RightmoveADF\Groups\Network;
use Craiglockhart81\RightmoveADF\Groups\Branch;
use Craiglockhart81\RightmoveADF\Groups\PropertyRef;
use Craiglockhart81\RightmoveADF\Groups\ExportPeriod;

/**
*	Get Property Property List Class
*
*	Class for get property performance request.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class GetPropertyPerformance extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getpropertyperformance';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getpropertyperformance';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\PropertyRef', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\ExportPeriod', 'required' => true)
	);
}