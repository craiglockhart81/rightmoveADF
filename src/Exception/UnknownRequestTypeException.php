<?php
/**
*	This file contains the Unknown Request Type Exception Class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Exception;

/**
*	Unknown Request Type Exception Class
*
*	Exception for an unknown request type.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class UnknownRequestTypeException extends \RuntimeException {

	/**
	*	Constructor
	*
	*	@return self
	*/
	public function __construct(){
		parent::__construct('Unknown Request Type.');
	}
}