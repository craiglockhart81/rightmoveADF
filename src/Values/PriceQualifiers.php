<?php
/**
*	This file contains the Price Qualifiers Enum class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF\Values;

use Craiglockhart81\RightmoveADF\Values\ValuesBase;

/**
*	Price Qualifiers Enum Class
*
*	Class for the different price qualifiers.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class PriceQualifiers extends ValuesBase {

	const Defaults = 0;
	const POA = 1;
	const GuidePrice = 2;
	const FixedPrice = 3;
	const OffersInExcessOf = 4;
	const OIRO = 5;
	const SaleByTender = 6;
	const From = 7;
	const SharedOwnership = 9;
	const OffersOver = 10;
	const PartBuyRent = 11;
	const SharedEquity = 12;
	const ComingSoon = 16;
}