<?php

/**
 * Описывает коллекцию сертификатов. Реализует интерфейс, аналогичный интерфейсу объекта CAPICOM.Certificates.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/certificates
 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/certificates?redirectedfrom=MSDN
 *
 * @property-read int           $Count
 * @property-read CPCertificate $Item
 */
class CPCertificates
{
	/**
	 * Возвращает коллекцию сертификатов, удовлетворяющих заданному критерию.
	 *
	 * @param   int    $FindType        Тип критериев сопоставления, предоставленных в параметре varCriteria.
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
	 *                                  CERTIFICATE_FIND_SHA1_HASH
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates with a SHA1 hash that matches
	 *                                  the SHA1 hash specified in the <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_SUBJECT_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose subject name exactly
	 *                                  or partially matches the subject name specified in the
	 *                                  <em>varCriteria</em> parameter. This call searches the subject name field only.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_ISSUER_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose issuer name exactly
	 *                                  or partially matches the issuer name specified in the
	 *                                  <em>varCriteria</em> parameter. This call searches the issuer name field only.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_ROOT_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose root subject name exactly
	 *                                  or partially matches the root subject name specified in
	 *                                  the <em>varCriteria</em> parameter. This call creates a chain.
	 *                                  This call searches the subject name field of the root certificate.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_TEMPLATE_NAME
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose template name matches
	 *                                  the template name specified in the <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_EXTENSION
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates that have an extension
	 *                                  that matches the extension specified in the
	 *                                  <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_EXTENDED_PROPERTY
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates in the store that explicitly
	 *                                  contain an extended property with the value specified
	 *                                  in the <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_APPLICATION_POLICY
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates in the store that have
	 *                                  either an enhanced key usage extension, application policy extension,
	 *                                  or extended property specified in the <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_CERTIFICATE_POLICY
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates that contain the policy OID
	 *                                  in the Certificate Policy extension specified
	 *                                  in the <em>varCriteria</em> parameter.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_TIME_VALID
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose time is valid.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_TIME_NOT_YET_VALID
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose time is not yet valid.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_TIME_EXPIRED
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates whose time has expired.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CERTIFICATE_FIND_KEY_USAGE
	 *                                  </td>
	 *                                  <td>
	 *                                  Returns certificates containing key usages in the
	 *                                  KeyUsage extension specified in the <em>varCriteria</em>
	 *                                  parameter. If the KeyUsage extension is not present,
	 *                                  all of the key usages are assumed to be unavailable.
	 *                                  </td>
	 *                                  </tr>
	 *                                  </tbody>
	 *                                  </table>
	 * @param   mixed  $varCriteria     (optional) Вариант, содержащий критерии поиска.
	 *                                  Эти данные должны соответствовать типу данных, указанному в параметре FindType.
	 * @param   bool   $bFindValidOnly  (optional) Логическое значение, указывающее, возвращаются ли только действительные сертификаты.
	 *
	 * @return CPCertificates
	 */
	public function Find(
		int $FindType, $varCriteria = 0, bool $bFindValidOnly = false
	)
	{
	}

	/**
	 * Возвращает сертификат с заданным индексом из коллекции.
	 *
	 * @param   int  $Index
	 *
	 * @return mixed
	 */
	public function Item(int $Index)
	{
	}

	/**
	 * Возвращает количество объектов в коллекции сертификатов.
	 *
	 * @return int
	 */
	public function Count()
	{
	}
}
