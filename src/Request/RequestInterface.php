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

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
interface RequestInterface {

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the enviroment.
	*	@return string
	*/
	public function getURL();
}