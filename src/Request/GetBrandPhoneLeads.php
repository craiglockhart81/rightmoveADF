<?php
/**
*	This file contains the Get Brand Phone Leads Request model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Request;

use Craiglockhart81\RightmoveADF\Request\RequestBase;
use Craiglockhart81\RightmoveADF\Groups\Network;
use Craiglockhart81\RightmoveADF\Groups\Brand;
use Craiglockhart81\RightmoveADF\Groups\ExportPeriodTime;

/**
*	Get Brand Phone Leads Class
*
*	Class for the get brand phone leads request.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class GetBrandPhoneLeads extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getbrandphoneleads';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getbrandphoneleads';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Network', 'required' => true),
		'brand' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Brand', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\ExportPeriodTime', 'required' => true)
	);
}