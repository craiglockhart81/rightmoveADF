<?php
/**
*	Get Branch Performance Example.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

require_once(__DIR__.'/../vendor/autoload.php');

use Craiglockhart81\RightmoveADF\RightmoveADF;

//include the config file
require_once('config.php');

//create the RightmoveADF object
$objRightmoveADF = new RightmoveADF(CERT_FILE, CERT_PASS, RightmoveADF::TEST);

//create a request
$objRequest = $objRightmoveADF->createRequest(RightmoveADF::GetBranchPerformance);

//set the details for the request
$objRequest->network->network_id = NETWORK_ID;
$objRequest->branch->branch_id = BRANCH_ID;
$objRequest->export_date = 'last friday';

//send the request
$objResponse = $objRightmoveADF->send($objRequest);

print_r($objResponse);