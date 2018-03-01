<?php

namespace AutovistaAppraisal;

class ApiException extends \Exception
{
	const AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
	const SESSION_EXPIRED = 'SESSION_EXPIRED';
	const VEHICLE_NOT_REGISTERED = 'VEHICLE_NOT_REGISTERED';
}
