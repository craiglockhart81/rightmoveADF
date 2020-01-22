<?php
/**
*	This file contains the Price Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\PriceQualifiers;
use Craiglockhart81\RightmoveADF\Values\RentFrequencies;
use Craiglockhart81\RightmoveADF\Values\TenureTypes;

/**
*	Price Group Class
*
*	Class to handle Price group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Price implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'price' => array('type' => 'number', 'required' => true, 'min' => 1),
		'price_qualifier' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\PriceQualifiers'),
		'deposit' => array('type' => 'number'),
		'administration_fee' => array('type' => 'string', 'max' => 4000),
		'rent_frequency' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\RentFrequencies'),
		'tenure_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\TenureTypes'),
		'auction' => array('type' => 'boolean'),
		'tenure_unexpired_years' => array('type' => 'int'),
		'price_per_unit_area' => array('type' => 'number'),
		'price_per_unit_per_annum' => array('type' => 'number')
	);
}