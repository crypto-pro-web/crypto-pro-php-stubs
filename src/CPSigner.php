<?php

/**
 * Объект, задающий параметры создания и содержащий информацию об усовершенствованной подписи.
 * Объект CPSigner предоставляет интерфейсы ICPSigner6, ICPSigner5, ICPSigner4, ICPSigner3, ICPSigner2, ICPSigner и интерфейс, аналогичный CAPICOM.Signer.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner6
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner5
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner4
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner3
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner2
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigner
 * @link https://learn.microsoft.com/windows/win32/seccrypto/signer
 *
 * @property-read $AuthenticatedAttributes    Коллекция аутентифицированных атрибутов.
 * @property-read $Certificate                Сертификат подписанта.
 * @property-read $Chain                      Цепочка сертификата подписанта.
 * @property-read $Options                    Параметры сертификата подписанта.
 * @property-read $AuthenticatedAttributes2   Коллекция подписанных атрибутов.
 * @property-read $CRLs                       Коллекция СОС. Свойство доступно только для чтения.
 * @property-read $OCSPResponses              Коллекция ответов служб актуальных статусов. Свойство доступно только для чтения.
 * @property-read $TSAAddress                 Адрес службы штампов времени.
 * @property-read $UnauthenticatedAttributes  Коллекция неподписанных атрибутов.
 * @property-read $SignatureTimeStampTime     Время подписи из штампа времени на значение подписи.
 * @property-read $SigningTime                Время подписи из атрибута signingTime.
 * @property-read $KeyPin                     Пин-код для доступа к закрытому ключу.
 * @property-read $SignatureStatus            Статус электронной подписи.
 * @property-read $CheckCertificate           Проводить проверку цепочки сертификатов перед созданием подписи, в том числе с учетом сроков действия закрытого ключа (private key usage period).
 */
class CPSigner
{
	/**
	 * @throws \Throwable
	 */
	public function __construct()
	{
	}

	/**
	 * Возвращает сертификат подписанта.
	 *
	 * @return \CPCertificate
	 */
	public function get_Certificate()
	{
	}

	/**
	 * Устанавливает сертификат подписанта.
	 *
	 * @param   CPCertificate  $certificate  сертификат подписанта.
	 *
	 * @return void
	 */
	public function set_Certificate(\CPCertificate $certificate)
	{
	}

	/**
	 * Возвращает параметры сертификата подписанта.
	 *
	 * @return mixed
	 */
	public function get_Options()
	{
	}

	/**
	 * Устанавливает параметры сертификата подписанта.
	 *
	 * @param   mixed  $Options             параметры сертификата подписанта. По умолчанию CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT
	 *                                      Может принимать следующие значения:
	 *                                      <table>
	 *                                      <thead>
	 *                                      <tr>
	 *                                      <th>Значение</th>
	 *                                      <th>Описание</th>
	 *                                      </tr>
	 *                                      </thead>
	 *                                      <tbody>
	 *                                      <tr>
	 *                                      <td><strong>CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT</strong></td>
	 *                                      <td>Сохраняет все сертификаты в цепочке за исключением корневой сущности.</td>
	 *                                      </tr>
	 *                                      <tr>
	 *                                      <td><strong>CERTIFICATE_INCLUDE_WHOLE_CHAIN</strong></td>
	 *                                      <td>Сохраняет полную цепочку сертификатов.</td>
	 *                                      </tr>
	 *                                      <tr>
	 *                                      <td><strong>CERTIFICATE_INCLUDE_END_ENTITY_ONLY</strong></td>
	 *                                      <td>Сохраняет только сертификат конечной сущности.</td>
	 *                                      </tr>
	 *                                      </tbody>
	 *                                      </table>
	 *
	 * @return void
	 */
	public function set_Options($Options = CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT)
	{
	}

	/**
	 * Возвращает коллекцию аутентифицированных атрибутов
	 *
	 * @return \CPAttributes
	 */
	public function get_AuthenticatedAttributes()
	{
	}

	/**
	 * Возвращает коллекцию неподписанных атрибутов
	 *
	 * @return \CPAttributes
	 */
	public function get_UnauthenticatedAttributes()
	{
	}

	/**
	 * Возвращает адрес службы штампов времени.
	 *
	 * @return string
	 */
	public function get_TSAAddress()
	{
	}

	/**
	 * Устанавливает адрес службы штампов времени.
	 *
	 * @param   string  $newVal  адрес службы штампов времени.
	 *
	 * @return void
	 */
	public function set_TSAAddress(string $newVal)
	{
	}

	/**
	 * Возвращает коллекцию СОС
	 *
	 * @return mixed
	 */
	public function get_CRLs()
	{
	}

	/**
	 *  Возвращает коллекцию ответов служб актуальных статусов.
	 *
	 * @return mixed
	 */
	public function get_OCSPResponses()
	{
	}

	/**
	 * Возвращает время подписи, содержащееся в атрибуте signingTime.
	 *
	 * @return mixed
	 */
	public function get_SigningTime()
	{
	}

	/**
	 * Возвращает время подписи, содержащееся в штампе времени.
	 *
	 * @return mixed
	 */
	public function get_SignatureTimeStampTime()
	{
	}

	/**
	 * Устанавливает пин-код для доступа к закрытому ключу.
	 *
	 * @param   string  $KeyPin  пин-код для доступа к закрытому ключу.
	 *
	 * @return void
	 */
	public function set_KeyPin(string $KeyPin)
	{
	}
}
