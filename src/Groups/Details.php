<?php
/**
*	This file contains the Details Group model class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Groups;

use Craiglockhart81\RightmoveADF\Groups\GroupInterface;
use Craiglockhart81\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Values\Parkings;
use Craiglockhart81\RightmoveADF\Values\OutsideSpaces;
use Craiglockhart81\RightmoveADF\Values\AreaUnits;
use Craiglockhart81\RightmoveADF\Values\EntranceFloors;
use Craiglockhart81\RightmoveADF\Values\Conditions;
use Craiglockhart81\RightmoveADF\Values\Accessibilities;
use Craiglockhart81\RightmoveADF\Values\Heatings;
use Craiglockhart81\RightmoveADF\Values\Furnishings;
use Craiglockhart81\RightmoveADF\Values\CommercialuseClasses;
use Craiglockhart81\RightmoveADF\Groups\Room;
use Craiglockhart81\RightmoveADF\Groups\Sizing;

/**
*	Details Group Class
*
*	Class to handle Details group.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class Details implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\Synthesize\Type\StringObject', 'max' => 10),
		'bedrooms' => array('type' => 'int', 'required' => true, 'min' => 0),
		'bathrooms' => array('type' => 'int', 'min' => 0),
		'reception_rooms' => array('type' => 'int', 'min' => 0),
		'parking' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Values\Parkings'),
		'outside_space' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Values\OutsideSpaces'),
		'year_built' => array('type' => 'int'),
		'internal_area' => array('type' => 'number'),
		'internal_area_unit' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\AreaUnits'),
		'land_area' => array('type' => 'number'),
		'land_area_unit' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\AreaUnits'),
		'sizing' => array('type' => 'object', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Sizing', 'max' => 3),
		'minimum' => array('type' => 'int', 'min' => 0),
		'maximum' => array('type' => 'int', 'min' => 0),
		'area_unit' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\AreaUnits'),
		'floors' => array('type' => 'int'),
		'entrance_floor' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\EntranceFloors'),
		'condition' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\Conditions'),
		'accessibility' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Values\Accessibilites'),
		'heating' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Values\Heatings'),
		'furnished_type' => array('type' => 'enum', 'class' => 'Craiglockhart81\RightmoveADF\Values\Furnishings'),
		'pets_allowed' => array('type' => 'boolean'),
		'smokers_considered' => array('type' => 'boolean'),
		'housing_benefit_considered' => array('type' => 'boolean'),
		'sharers_considered' => array('type' => 'boolean'),
		'burglar_alarm' => array('type' => 'boolean'),
		'washing_machine' => array('type' => 'boolean'),
		'dishwasher' => array('type' => 'boolean'),
		'all_bills_inc' => array('type' => 'boolean'),
		'water_bill_inc' => array('type' => 'boolean'),
		'gas_bill_inc' => array('type' => 'boolean'),
		'electricity_bill_inc' => array('type' => 'boolean'),
		'oil_bill_inc' => array('type' => 'boolean'),
		'council_tax_inc' => array('type' => 'boolean'),
		'council_tax_exempt ' => array('type' => 'boolean'),
		'tv_licence_inc' => array('type' => 'boolean'),
		'sat_cable_tv_bill_inc' => array('type' => 'boolean'),
		'internet_bill_inc' => array('type' => 'boolean'),
		'business_for_sale' => array('type' => 'boolean'),
		'comm_use_class' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Values\CommercialuseClasses'),
		'council_tax_band' => array('type' => 'string', 'max' => 2),
		'rooms' => array('type' => 'objectarray', 'class' => 'Craiglockhart81\RightmoveADF\Groups\Room', 'max' => 99)
	);
}