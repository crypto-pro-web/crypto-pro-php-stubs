<?php

namespace PHPSTORM_META {
	expectedArguments(
		\CPAlgorithm::set_KeyLength(), 0,
		ENCRYPTION_KEY_LENGTH_MAXIMUM | ENCRYPTION_KEY_LENGTH_40_BITS
		| ENCRYPTION_KEY_LENGTH_56_BITS | ENCRYPTION_KEY_LENGTH_128_BITS
		| ENCRYPTION_KEY_LENGTH_192_BITS | ENCRYPTION_KEY_LENGTH_256_BITS
	);

	expectedArguments(
		\CPAlgorithm::set_Name(), 0,
		CADESCOM_ENCRYPTION_ALGORITHM_RC2 | CADESCOM_ENCRYPTION_ALGORITHM_RC4
		| CADESCOM_ENCRYPTION_ALGORITHM_DES | CADESCOM_ENCRYPTION_ALGORITHM_3DES
		| CADESCOM_ENCRYPTION_ALGORITHM_AES
		| CADESCOM_ENCRYPTION_ALGORITHM_GOST_28147_89
	);

	expectedArguments(
		\CPStore::Open, 0,
		MEMORY_STORE | LOCAL_MACHINE_STORE | CURRENT_USER_STORE
		| ACTIVE_DIRECTORY_USER_STORE
	);

	expectedArguments(
		\CPStore::Open, 2,
		STORE_OPEN_MAXIMUM_ALLOWED | STORE_OPEN_READ_ONLY
		| STORE_OPEN_READ_WRITE
	);

	expectedArguments(
		\CPCertificates::Find, 0,
		CERTIFICATE_FIND_SHA1_HASH | CERTIFICATE_FIND_SUBJECT_NAME
		| CERTIFICATE_FIND_ISSUER_NAME | CERTIFICATE_FIND_ROOT_NAME
		| CERTIFICATE_FIND_TEMPLATE_NAME | CERTIFICATE_FIND_EXTENSION
		| CERTIFICATE_FIND_EXTENDED_PROPERTY
		| CERTIFICATE_FIND_APPLICATION_POLICY
		| CERTIFICATE_FIND_CERTIFICATE_POLICY | CERTIFICATE_FIND_TIME_VALID
		| CERTIFICATE_FIND_TIME_NOT_YET_VALID | CERTIFICATE_FIND_TIME_EXPIRED
		| CERTIFICATE_FIND_KEY_USAGE
	);

	expectedArguments(
		\CPCertificate::Export, 0,
		ENCODE_ANY | ENCODE_BASE64 | ENCODE_BINARY
	);

	expectedArguments(
		\CPCertificate::GetInfo(), 0,
		CERT_INFO_SUBJECT_SIMPLE_NAME | CERT_INFO_ISSUER_SIMPLE_NAME
		| CERT_INFO_SUBJECT_EMAIL_NAME | CERT_INFO_ISSUER_EMAIL_NAME
		| CERT_INFO_SUBJECT_UPN | CERT_INFO_ISSUER_UPN
		| CERT_INFO_SUBJECT_DNS_NAME | CERT_INFO_ISSUER_DNS_NAME
	);

	/**
	 * @see \CPSignedData
	 */
	expectedArguments(
		\CPSignedData::SignCades(), 1,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);

	expectedArguments(
		\CPSignedData::SignCades(), 3,
		ENCODE_ANY | ENCODE_BASE64 | ENCODE_BINARY
	);

	expectedArguments(
		\CPSignedData::VerifyCades(), 1,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);

	expectedArguments(
		\CPSignedData::CoSignCades(), 1,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);

	expectedArguments(
		\CPSignedData::CoSignCades(), 2,
		ENCODE_ANY | ENCODE_BASE64 | ENCODE_BINARY
	);

	expectedArguments(
		\CPSignedData::SignHash(), 2,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);

	expectedArguments(
		\CPSignedData::SignHash(), 3,
		ENCODE_ANY | ENCODE_BASE64 | ENCODE_BINARY
	);

	expectedArguments(
		\CPSignedData::CoSignHash(), 2,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);

	expectedArguments(
		\CPSignedData::CoSignHash(), 3,
		ENCODE_ANY | ENCODE_BASE64 | ENCODE_BINARY
	);

	expectedArguments(
		\CPSignedData::VerifyHash(), 2,
		CADES_BES | CADES_DEFAULT | CADES_T | CADES_X_LONG_TYPE_1 | PKCS7_TYPE
	);
}
