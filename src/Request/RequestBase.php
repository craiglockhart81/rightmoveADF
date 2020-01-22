<?php
/**
*	This file contains the Request Interface class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Request;

use Craiglockhart81\RightmoveADF\Request\RequestInterface;
use Craiglockhart81\RightmoveADF\RightmoveADF;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class RequestBase implements RequestInterface, \JsonSerializable {

	use Synthesizer;

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = '';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = '';

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the environment.
	*	@param int $numEnvironment The environment we are in.
	*	@return string
	*/
	public function getURL($numEnvironment = RightmoveADF::TEST){
		return ($numEnvironment==RightmoveADF::LIVE) ? $this->_strLiveURL : $this->_strTestURL;
	}
}