<?php
/**
*	This file contains the RightmoveADF class.
*
*	@package	Craiglockhart81\RightmoveADF
*	@author		Craig Lockhart <craig@hartcreative.co.uk>
*	@license	MIT
*
*/

namespace Craiglockhart81\RightmoveADF;

use Frozensheep\Synthesize\Synthesizer;
use Craiglockhart81\RightmoveADF\Exception\UnknownRequestTypeException;
use Craiglockhart81\RightmoveADF\Curl;
use Craiglockhart81\RightmoveADF\Request\SendProperty;
use Craiglockhart81\RightmoveADF\Request\RemoveProperty;
use Craiglockhart81\RightmoveADF\Request\GetBranchPropertyList;
use Craiglockhart81\RightmoveADF\Request\AddPremiumListing;
use Craiglockhart81\RightmoveADF\Request\AddFeaturedProperty;
use Craiglockhart81\RightmoveADF\Request\RemoveFeaturedProperty;
use Craiglockhart81\RightmoveADF\Request\GetPropertyPerformance;
use Craiglockhart81\RightmoveADF\Request\GetBranchPerformance;
use Craiglockhart81\RightmoveADF\Request\GetBrandEmails;
use Craiglockhart81\RightmoveADF\Request\GetBranchEmails;
use Craiglockhart81\RightmoveADF\Request\GetBrandPhoneLeads;
use Craiglockhart81\RightmoveADF\Request\GetBranchPhoneLeads;
use Craiglockhart81\RightmoveADF\Request\GetPropertyEmails;

/**
*	RightmoveADF Class
*
*	Class for the RightmoveADF.
*
*	@package	Craiglockhart81\RightmoveADF
*
*/
class RightmoveADF {

	use Synthesizer;

	const TEST = 0;
	const LIVE = 1;
	const DEBUG = 1;

	const SendProperty = 1;
	const RemoveProperty = 2;
	const GetBranchPropertyList = 3;
	const AddPremiumListing = 4;
	const AddFeaturedProperty = 5;
	const RemoveFeaturedProperty = 6;
	const GetPropertyPerformance = 7;
	const GetBranchPerformance = 8;
	const GetBrandEmails = 9;
	const GetBranchEmails = 10;
	const GetBrandPhoneLeads = 11;
	const GetBranchPhoneLeads = 12;
	const GetPropertyEmails = 13;

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'cert_file' => array('type' => 'string'),
		'cert_pass' => array('type' => 'string'),
		'environment' => array('type' => 'int', 'min' => 0, 'max' => 1, 'default' => RightmoveADF::TEST)
	);

	/**
	*	Class Constructor
	*
	*	Class constructure which accepts the certificate file, password and enviroment.
	*	@param string $strCertFile The certificate file.
	*	@param string $strCertPass The certificate password.
	*	@param int $numEnvironment The environment to run in.
	*	@return self
	*/
	public function __construct($strCertFile, $strCertPass, $numEnvironment = RightmoveADF::TEST){
		$this->cert_file = $strCertFile;
		$this->cert_pass = $strCertPass;
		$this->environment = $numEnvironment;
	}

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function createRequest($numRequestType){
		switch($numRequestType){
			case RightmoveADF::SendProperty:
				return new SendProperty();
				break;
			case RightmoveADF::RemoveProperty:
				return new RemoveProperty();
				break;
			case RightmoveADF::GetBranchPropertyList:
				return new GetBranchPropertyList();
				break;
			case RightmoveADF::AddPremiumListing:
				return new AddPremiumListing();
				break;
			case RightmoveADF::AddFeaturedProperty:
				return new AddFeaturedProperty();
				break;
			case RightmoveADF::RemoveFeaturedProperty:
				return new RemoveFeaturedProperty();
				break;
			case RightmoveADF::GetPropertyPerformance:
				return new GetPropertyPerformance();
				break;
			case RightmoveADF::GetBranchPerformance:
				return new GetBranchPerformance();
				break;
			case RightmoveADF::GetBrandEmails:
				return new GetBrandEmails();
				break;
			case RightmoveADF::GetBranchEmails:
				return new GetBranchEmails();
				break;
			case RightmoveADF::GetBrandPhoneLeads:
				return new GetBrandPhoneLeads();
				break;
			case RightmoveADF::GetBranchPhoneLeads:
				return new GetBranchPhoneLeads();
				break;
			case RightmoveADF::GetPropertyEmails:
				return new GetPropertyEmails();
				break;
			default:
				throw new UnknownRequestTypeException();
				break;
		}
	}

	/**
	*	Send Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public function send($objRequest, $strURLOverride = '', $boolDebug = false){
		$strURL = ($strURLOverride) ? $strURLOverride : $objRequest->getURL($this->environment);
		return Curl::send(json_encode($objRequest), $strURL, $this->cert_file, $this->cert_pass, $boolDebug);
	}
}