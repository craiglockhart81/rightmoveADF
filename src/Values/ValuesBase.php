<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class ValuesBase extends Enum implements \JsonSerializable  {

	/**
	*	JSON Serialise Method
	*
	*	Method for the \JsonSerializable Interface.
	*	@return mixed
	*/
	public function jsonSerialize(){
		return $this->getValue();
	}
}