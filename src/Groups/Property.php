<?php
/**
*	This file contains the Property Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Groups\Address;
use Craiglockhart81\RightmoveADF\Groups\Price;
use Craiglockhart81\RightmoveADF\Groups\Details;
use Craiglockhart81\RightmoveADF\Groups\Principal;
use Craiglockhart81\RightmoveADF\Values\PropertyTypes;
use Craiglockhart81\RightmoveADF\Values\Statuses;
use Craiglockhart81\RightmoveADF\Values\LetTypes;

/**
*	Property Group Class
*
*	Class to handle Property group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Property implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\PropertyTypes', 'required' => true),
		'status' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\Statuses', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'student_property' => array('type' => 'boolean'),
		'house_flat_share' => array('type' => 'boolean'),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'date_available' => array('type' => 'datetime', 'format' => 'd-m-Y', 'autoinit' => false),
		'contract_months' => array('type' => 'int'),
		'minimum_term' => array('type' => 'int'),
		'let_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\LetTypes'),
		'address' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Address', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Price', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Details', 'required' => true),
		'media' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Media', 'max' => 999),
		'principal' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Principal')
	);
}