<?php

class CPRawSignature
{
	
	public function __construct(){}
	
	public function VerifyHash(){}
	
	public function SignHash(\CPHashedData $hashedData, \CPCertificate $certificate): string {}
	
}
