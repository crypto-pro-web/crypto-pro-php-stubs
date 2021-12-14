<?php

/**
 * Описывает сертификат открытого ключа.
 * Реализует интерфейс, аналогичный интерфейсу объекта CAPICOM.Certificate, а также интерфейсы ICPCertificate и IAdditionalStore.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpcertificate
 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/certificate
 *
 * @property-read string          $SerialNumber
 * @property-read string          $Thumbprint
 * @property-read string          $SubjectName
 * @property-read string          $IssuerName
 * @property-read int             $Version
 * @property-read string|DateTime $ValidToDate
 * @property-read string|DateTime $ValidFromDate
 */
class CPCertificate
{
	/**
	 * Возвращает информацию из сертификата.
	 *
	 * @param   int  $InfoType          Указывает, какой тип данных извлекается из сертификата.
	 *                                  Может принимать следующие значения:
	 *                                  <table>
	 *                                  <thead>
	 *                                  <tr>
	 *                                  <th>Значение</th>
	 *                                  <th>Пояснение</th>
	 *                                  </tr>
	 *                                  </thead>
	 *                                  <tbody>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_SUBJECT_SIMPLE_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the display name from the certificate subject.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_ISSUER_SIMPLE_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the display name of the issuer of the certificate.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_SUBJECT_EMAIL_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the email address of the certificate subject.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_ISSUER_EMAIL_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the email address of the issuer of the certificate.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_SUBJECT_UPN
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the UPN of the certificate subject. Introduced in CAPICOM 2.0.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_ISSUER_UPN
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the UPN of the issuer of the certificate. Introduced in CAPICOM 2.0.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_SUBJECT_DNS_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the DNS name of the certificate subject. Introduced in CAPICOM 2.0.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERT_INFO_ISSUER_DNS_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns the DNS name of the issuer of the certificate. Introduced in CAPICOM 2.0.
	 *                                  </td>
	 *                                  </tr>
	 *                                  </tbody>
	 *                                  </table>
	 *
	 * @return string
	 */
	public function GetInfo(int $InfoType)
	{
	}

	/**
	 * Производит поиск закрытого ключа соответствующего сертификату открытого ключа
	 * и устанавливает ссылку на него.
	 * В случае отсутствия в системе подходящего ключа порождает исключение.
	 *
	 * @throws \Exception
	 * @return mixed
	 *
	 */
	public function FindPrivateKey()
	{
	}

	/**
	 * Имеется ли закрытый ключ для сертификата.
	 *
	 * @return bool
	 */
	public function HasPrivateKey()
	{
	}

	/**
	 * Является ли сертификат валидным.
	 *
	 * @return CPCertificateStatus
	 */
	public function IsValid()
	{
	}

	/**
	 * Возвращает объект ExtendedKeyUsage для данного сертификата.
	 *
	 * @return CPExtendedKeyUsage
	 */
	public function ExtendedKeyUsage()
	{
	}

	/**
	 * Возвращает объект KeyUsage для данного сертификата.
	 *
	 * @return CPKeyUsage
	 */
	public function KeyUsage()
	{
	}

	/**
	 * Экспортирует сертификат в виде закодированной строки.
	 *
	 * @param   int|string  $EncodingType  Тип кодировки для операции экспорта.
	 *                                     Может принимать следующие значения:
	 *                                     <table>
	 *                                     <thead>
	 *                                     <tr>
	 *                                     <th>Значение</th>
	 *                                     <th>Пояснение</th>
	 *                                     </tr>
	 *                                     </thead>
	 *                                     <tbody>
	 *                                     <tr>
	 *                                     <td>
	 *                                     ENCODE_ANY
	 *                                     </td>
	 *                                     <td>
	 *                                     This encoding type is used only when the input data has an unknown encoding type.
	 *                                     If this value is used to specify the output's encoding type,
	 *                                     CAPICOM_ENCODE_BASE64 will be used instead.
	 *                                     </td>
	 *                                     </tr>
	 *                                     <tr>
	 *                                     <td>
	 *                                     ENCODE_BASE64
	 *                                     </td>
	 *                                     <td>
	 *                                     Data is saved as a base64-encoded string.
	 *                                     </td>
	 *                                     </tr>
	 *                                     <tr>
	 *                                     <td>
	 *                                     ENCODE_BINARY
	 *                                     </td>
	 *                                     <td>
	 *                                     Data is saved as a pure binary sequence.
	 *                                     </td>
	 *                                     </tr>
	 *                                     </tbody>
	 *                                     </table>
	 *
	 * @return string
	 */
	public function Export($EncodingType = ENCODE_BASE64)
	{
	}

	/**
	 * Импортирует сертификат из закодированной строки.
	 *
	 * @param   string  $EncodedCertificate  Строка, содержащая закодированные данные сертификата для импорта.
	 *
	 * @return void
	 */
	public function Import(string $EncodedCertificate)
	{
	}

	/**
	 * Серийный номер.
	 *
	 * @return string
	 */
	public function get_SerialNumber()
	{
	}

	/**
	 * Отпечаток.
	 *
	 * @return string
	 */
	public function get_Thumbprint()
	{
	}

	/**
	 * Имя субъекта.
	 *
	 * @return string
	 */
	public function get_SubjectName()
	{
	}

	/**
	 * Издатель сертификата.
	 *
	 * @return string
	 */
	public function get_IssuerName()
	{
	}

	/**
	 * Версия сертификата.
	 *
	 * @return int
	 */
	public function get_Version()
	{
	}

	/**
	 * Дата, до которой сертификат действителен.
	 *
	 * @return string|DateTime
	 */
	public function get_ValidToDate()
	{
	}

	/**
	 * Дата, с которой сертификат действителен.
	 *
	 * @return string|DateTime
	 */
	public function get_ValidFromDate()
	{
	}

	/**
	 * Возвращает объект BasicConstraints для данного сертификата.
	 *
	 * @return CPBasicConstraints
	 */
	public function BasicConstraints()
	{
	}

	/**
	 * Возвращает объект PublicKey для данного сертификата.
	 *
	 * @return CPPublicKey
	 */
	public function PublicKey()
	{
	}

	/**
	 * Закрытый ключ.
	 *
	 * @return CPPrivateKey
	 */
	public function PrivateKey()
	{
	}

}
