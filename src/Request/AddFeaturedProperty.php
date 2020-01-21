<?php
/**
*	This file contains the Add Featured Property Request model class.
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
use Craiglockhart81\RightmoveADF\Groups\PropertyFeature;

/**
*	Add Featured Property Class
*
*	Class for the add featured property request.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class AddFeaturedProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/addfeaturedproperty';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/addfeaturedproperty';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\PropertyFeature', 'required' => true)
	);
}