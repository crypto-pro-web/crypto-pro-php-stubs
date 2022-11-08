<?php

/**
 * Предоставляет свойства и методы для работы с подписанным сообщением. Реализует сдедующие интерфейсы: ICPSignedData4, ICPSignedData3, ICPSignedData2, ICPSignedData, CAPICOM.SignedData
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigneddata4
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigneddata3
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigneddata2
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpsigneddata
 * @link https://learn.microsoft.com/windows/win32/seccrypto/signeddata
 */
class CPSignedData
{

	public function __construct()
	{
	}

	/**
	 * Позволяет добавить к сообщению усовершенствованную подпись.
	 *
	 * @param   \CPSigner  $Signer        Объект CPSigner, который будет использован для создания подписи.
	 *                                    По умолчанию не задан, при этом выбор сертификата для подписи производится аналогично
	 *                                    методу Sign объекта CAPICOM.SignedData при отсутствии первого параметра.
	 *                                    Таким же образом выбор сертификата для подписи производится в случае, если параметр pSigner задан,
	 *                                    но не содержит сертификата для подписи.
	 * @param   mixed      $CadesType     Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                    Может принимать следующие значения:
	 *                                    <table class="table">
	 *                                    <table>
	 *                                    <thead>
	 *                                    <tr>
	 *                                    <th>Имя</th>
	 *                                    <th>Описание</th>
	 *                                    <th>Значение</th>
	 *                                    </tr>
	 *                                    </thead>
	 *                                    <tbody>
	 *                                    <tr>
	 *                                    <td>CADES_BES</td>
	 *                                    <td>Тип подписи CAdES BES.</td>
	 *                                    <td>0x01</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td>CADES_DEFAULT</td>
	 *                                    <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                    <td>0x00</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td>CADES_T</td>
	 *                                    <td>Тип подписи CAdES T.</td>
	 *                                    <td>0x05</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td>CADES_X_LONG_TYPE_1</td>
	 *                                    <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                    <td>0x5D</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td>PKCS7_TYPE</td>
	 *                                    <td>Тип подписи PKCS7.</td>
	 *                                    <td>0xffff</td>
	 *                                    </tr>
	 *                                    </tbody>
	 *                                    </table>
	 * @param   bool       $bDetached     Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.
	 * @param   mixed      $EncodingType  Кодировка возвращаемой подписи. По умолчанию ENCODE_BASE64.
	 *                                    Может принимать следующие значения:
	 *                                    <table>
	 *                                    <thead>
	 *                                    <tr>
	 *                                    <th>Имя</th>
	 *                                    <th>Описание</th>
	 *                                    <th>Значение</th>
	 *                                    </tr>
	 *                                    </thead>
	 *                                    <tbody>
	 *                                    <tr>
	 *                                    <td><strong>ENCODE_ANY</strong></td>
	 *                                    <td>Данные сохраняются в виде строки в кодировке Base64 или чистой двоичной последовательности. Этот тип кодирования используется
	 *                                    только для входных данных с неизвестным типом кодирования. Представлен в CAPICOM 2.0.<br></td>
	 *                                    <td>0xffffffff</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>ENCODE_BASE64</strong></td>
	 *                                    <td>Данные сохраняются в виде строки в кодировке Base64.<br></td>
	 *                                    <td>0</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>ENCODE_BINARY</strong></td>
	 *                                    <td>Данные сохраняются в виде чистой двоичной последовательности.<br></td>
	 *                                    <td>1</td>
	 *                                    </tr>
	 *                                    </tbody>
	 *                                    </table>
	 *
	 * @return string|void
	 */
	public function SignCades(\CPSigner $Signer, $CadesType, bool $bDetached, $EncodingType)
	{
	}

	/**
	 * Позволяет создать усовершенствованную подпись на основе переданного хэш-значения.
	 *
	 * @param   \CPHashedData  $Hash          Объект CPHashedData, соответствующий хэш-значению, для которого следует создать подписанное CMS-сообщение.
	 * @param   \CPSigner      $Signer        Объект CPSigner, который будет использован для создания подписи.
	 *                                        По умолчанию не задан, при этом выбор сертификата для подписи производится аналогично
	 *                                        методу Sign объекта CAPICOM.SignedData при отсутствии первого параметра.
	 *                                        Таким же образом выбор сертификата для подписи производится в случае, если параметр pSigner задан,
	 *                                        но не содержит сертификата для подписи.
	 * @param   mixed          $CadesType     Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                        Может принимать следующие значения:
	 *                                        <table class="table">
	 *                                        <table>
	 *                                        <thead>
	 *                                        <tr>
	 *                                        <th>Имя</th>
	 *                                        <th>Описание</th>
	 *                                        <th>Значение</th>
	 *                                        </tr>
	 *                                        </thead>
	 *                                        <tbody>
	 *                                        <tr>
	 *                                        <td>CADES_BES</td>
	 *                                        <td>Тип подписи CAdES BES.</td>
	 *                                        <td>0x01</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_DEFAULT</td>
	 *                                        <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                        <td>0x00</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_T</td>
	 *                                        <td>Тип подписи CAdES T.</td>
	 *                                        <td>0x05</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_X_LONG_TYPE_1</td>
	 *                                        <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                        <td>0x5D</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>PKCS7_TYPE</td>
	 *                                        <td>Тип подписи PKCS7.</td>
	 *                                        <td>0xffff</td>
	 *                                        </tr>
	 *                                        </tbody>
	 *                                        </table>
	 * @param   mixed          $EncodingType  Кодировка возвращаемой подписи. По умолчанию ENCODE_BASE64.
	 *                                        Может принимать следующие значения:
	 *                                        <table>
	 *                                        <thead>
	 *                                        <tr>
	 *                                        <th>Имя</th>
	 *                                        <th>Описание</th>
	 *                                        <th>Значение</th>
	 *                                        </tr>
	 *                                        </thead>
	 *                                        <tbody>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_ANY</strong></td>
	 *                                        <td>Данные сохраняются в виде строки в кодировке Base64 или чистой двоичной последовательности. Этот тип кодирования используется
	 *                                        только для входных данных с неизвестным типом кодирования. Представлен в CAPICOM 2.0.<br></td>
	 *                                        <td>0xffffffff</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_BASE64</strong></td>
	 *                                        <td>Данные сохраняются в виде строки в кодировке Base64.<br></td>
	 *                                        <td>0</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_BINARY</strong></td>
	 *                                        <td>Данные сохраняются в виде чистой двоичной последовательности.<br></td>
	 *                                        <td>1</td>
	 *                                        </tr>
	 *                                        </tbody>
	 *                                        </table>
	 *
	 * @return string|void
	 */
	public function SignHash(\CPHashedData $Hash, \CPSigner $Signer, $CadesType, $EncodingType)
	{
	}

	/**
	 * Позволяет добавить к сообщению параллельную усовершенствованную подпись.
	 *
	 * @param   \CPSigner  $Signer           Объект CPSigner, который будет использован для создания подписи.
	 *                                       По умолчанию не задан, при этом выбор сертификата для подписи производится аналогично
	 *                                       методу Sign объекта CAPICOM.Signer при отсутствии первого параметра.
	 *                                       Таким же образом выбор сертификата для подписи производится в случае, если параметр pSigner задан,
	 *                                       но не содержит сертификата для подписи.
	 * @param   mixed      $CadesType        Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                       Может принимать следующие значения:
	 *                                       <table class="table">
	 *                                       <table>
	 *                                       <thead>
	 *                                       <tr>
	 *                                       <th>Имя</th>
	 *                                       <th>Описание</th>
	 *                                       <th>Значение</th>
	 *                                       </tr>
	 *                                       </thead>
	 *                                       <tbody>
	 *                                       <tr>
	 *                                       <td>CADES_BES</td>
	 *                                       <td>Тип подписи CAdES BES.</td>
	 *                                       <td>0x01</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_DEFAULT</td>
	 *                                       <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                       <td>0x00</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_T</td>
	 *                                       <td>Тип подписи CAdES T.</td>
	 *                                       <td>0x05</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_X_LONG_TYPE_1</td>
	 *                                       <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                       <td>0x5D</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>PKCS7_TYPE</td>
	 *                                       <td>Тип подписи PKCS7.</td>
	 *                                       <td>0xffff</td>
	 *                                       </tr>
	 *                                       </tbody>
	 *                                       </table>
	 * @param   mixed      $EncodingType     Кодировка возвращаемой подписи. По умолчанию ENCODE_BASE64.
	 *                                       Может принимать следующие значения:
	 *                                       <table>
	 *                                       <thead>
	 *                                       <tr>
	 *                                       <th>Имя</th>
	 *                                       <th>Описание</th>
	 *                                       <th>Значение</th>
	 *                                       </tr>
	 *                                       </thead>
	 *                                       <tbody>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_ANY</strong></td>
	 *                                       <td>Данные сохраняются в виде строки в кодировке Base64 или чистой двоичной последовательности. Этот тип кодирования используется
	 *                                       только для входных данных с неизвестным типом кодирования. Представлен в CAPICOM 2.0.<br></td>
	 *                                       <td>0xffffffff</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_BASE64</strong></td>
	 *                                       <td>Данные сохраняются в виде строки в кодировке Base64.<br></td>
	 *                                       <td>0</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_BINARY</strong></td>
	 *                                       <td>Данные сохраняются в виде чистой двоичной последовательности.<br></td>
	 *                                       <td>1</td>
	 *                                       </tr>
	 *                                       </tbody>
	 *                                       </table>
	 *
	 * @return string|void
	 */
	public function CoSignCades(\CPSigner $Signer, $CadesType = CADES_DEFAULT, $EncodingType = ENCODE_BASE64)
	{
	}

	/**
	 * Позволяет добавить к сообщению параллельную усовершенствованную подпись.
	 *
	 * @param   \CPHashedData  $Hash          Объект CPHashedData, соответствующий хэш-значению, для которого следует создать подписанное CMS-сообщение.
	 * @param   \CPSigner      $Signer        Объект CPSigner, который будет использован для создания подписи.
	 *                                        По умолчанию не задан, при этом выбор сертификата для подписи производится аналогично
	 *                                        методу Sign объекта CAPICOM.Signer при отсутствии первого параметра.
	 *                                        Таким же образом выбор сертификата для подписи производится в случае, если параметр pSigner задан,
	 *                                        но не содержит сертификата для подписи.
	 * @param   mixed          $CadesType     Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                        Может принимать следующие значения:
	 *                                        <table class="table">
	 *                                        <table>
	 *                                        <thead>
	 *                                        <tr>
	 *                                        <th>Имя</th>
	 *                                        <th>Описание</th>
	 *                                        <th>Значение</th>
	 *                                        </tr>
	 *                                        </thead>
	 *                                        <tbody>
	 *                                        <tr>
	 *                                        <td>CADES_BES</td>
	 *                                        <td>Тип подписи CAdES BES.</td>
	 *                                        <td>0x01</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_DEFAULT</td>
	 *                                        <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                        <td>0x00</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_T</td>
	 *                                        <td>Тип подписи CAdES T.</td>
	 *                                        <td>0x05</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>CADES_X_LONG_TYPE_1</td>
	 *                                        <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                        <td>0x5D</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td>PKCS7_TYPE</td>
	 *                                        <td>Тип подписи PKCS7.</td>
	 *                                        <td>0xffff</td>
	 *                                        </tr>
	 *                                        </tbody>
	 *                                        </table>
	 * @param   mixed          $EncodingType  Кодировка возвращаемой подписи. По умолчанию ENCODE_BASE64.
	 *                                        Может принимать следующие значения:
	 *                                        <table>
	 *                                        <thead>
	 *                                        <tr>
	 *                                        <th>Имя</th>
	 *                                        <th>Описание</th>
	 *                                        <th>Значение</th>
	 *                                        </tr>
	 *                                        </thead>
	 *                                        <tbody>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_ANY</strong></td>
	 *                                        <td>Данные сохраняются в виде строки в кодировке Base64 или чистой двоичной последовательности. Этот тип кодирования используется
	 *                                        только для входных данных с неизвестным типом кодирования. Представлен в CAPICOM 2.0.<br></td>
	 *                                        <td>0xffffffff</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_BASE64</strong></td>
	 *                                        <td>Данные сохраняются в виде строки в кодировке Base64.<br></td>
	 *                                        <td>0</td>
	 *                                        </tr>
	 *                                        <tr>
	 *                                        <td><strong>ENCODE_BINARY</strong></td>
	 *                                        <td>Данные сохраняются в виде чистой двоичной последовательности.<br></td>
	 *                                        <td>1</td>
	 *                                        </tr>
	 *                                        </tbody>
	 *                                        </table>
	 *
	 * @return string|void
	 */
	public function CoSignHash(\CPHashedData $Hash, \CPSigner $Signer, $CadesType = CADES_DEFAULT, $EncodingType = ENCODE_BASE64)
	{
	}

	/**
	 * Позволяет дополнить подпись до усовершенствованной.
	 *
	 * С помощью данного метода подпись, созданная в формате CAdES BES, может быть дополнена до усовершенствованной подписи CADES-X Long Type 1.
	 * Если исходная подпись не соответствует формату CAdES BES, то она не может быть дополнена ни до CAdES BES, ни до CADES-X Long Type 1.
	 *
	 * Если параметр CadesType имеет значение CADES_X_LONG_TYPE_1, то метод EnhanceCades добавляет к уже готовой подписи неподписанные атрибуты,
	 * необходимые для соответствия CADES-X Long Type 1 (штампы времени на подпись и на доказательства подлинности, ссылки на сертификаты и
	 * информацию об отзыве, значения сертификатов, CRL и OCSP ответов, использовавшихся при проверке цепочки).
	 * Если параметр CadesType имеет значение CADES_BES, то метод EnhanceCades проверяет подпись на соответствие формату CAdES BES,
	 * без добавления дополнительных атрибутов. Точно так же, если параметр CadesType имеет значение CADES_X_LONG_TYPE_1 то сначала проверяется,
	 * не соответствует ли уже подпись формату CADES_X_LONG_TYPE_1 (cоответствие определяется по наличию нужных атрибутов), и если соответствует,
	 * то метод EnhanceCades успешно завершает свою работу, не внося никаких изменений.
	 *
	 * @param   mixed   $CadesType           Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                       Может принимать следующие значения:
	 *                                       <table class="table">
	 *                                       <table>
	 *                                       <thead>
	 *                                       <tr>
	 *                                       <th>Имя</th>
	 *                                       <th>Описание</th>
	 *                                       <th>Значение</th>
	 *                                       </tr>
	 *                                       </thead>
	 *                                       <tbody>
	 *                                       <tr>
	 *                                       <td>CADES_BES</td>
	 *                                       <td>Тип подписи CAdES BES.</td>
	 *                                       <td>0x01</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_DEFAULT</td>
	 *                                       <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                       <td>0x00</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_T</td>
	 *                                       <td>Тип подписи CAdES T.</td>
	 *                                       <td>0x05</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>CADES_X_LONG_TYPE_1</td>
	 *                                       <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                       <td>0x5D</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td>PKCS7_TYPE</td>
	 *                                       <td>Тип подписи PKCS7.</td>
	 *                                       <td>0xffff</td>
	 *                                       </tr>
	 *                                       </tbody>
	 *                                       </table>
	 * @param   string  $TSAAddress          Адрес службы штампов времени.
	 * @param   mixed   $EncodingType        Кодировка возвращаемой подписи. По умолчанию ENCODE_BASE64.
	 *                                       Может принимать следующие значения:
	 *                                       <table>
	 *                                       <thead>
	 *                                       <tr>
	 *                                       <th>Имя</th>
	 *                                       <th>Описание</th>
	 *                                       <th>Значение</th>
	 *                                       </tr>
	 *                                       </thead>
	 *                                       <tbody>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_ANY</strong></td>
	 *                                       <td>Данные сохраняются в виде строки в кодировке Base64 или чистой двоичной последовательности. Этот тип кодирования используется
	 *                                       только для входных данных с неизвестным типом кодирования. Представлен в CAPICOM 2.0.<br></td>
	 *                                       <td>0xffffffff</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_BASE64</strong></td>
	 *                                       <td>Данные сохраняются в виде строки в кодировке Base64.<br></td>
	 *                                       <td>0</td>
	 *                                       </tr>
	 *                                       <tr>
	 *                                       <td><strong>ENCODE_BINARY</strong></td>
	 *                                       <td>Данные сохраняются в виде чистой двоичной последовательности.<br></td>
	 *                                       <td>1</td>
	 *                                       </tr>
	 *                                       </tbody>
	 *                                       </table>
	 *
	 * @return void
	 */
	public function EnhanceCades($CadesType, string $TSAAddress, $EncodingType = ENCODE_BASE64)
	{
	}

	/**
	 * Позволяет проверить усовершенствованную подпись, в том числе и на соответствие заданому типу подписи.
	 *
	 * @param   string  $SignedMessage   Проверяемое подписанное сообщение.
	 * @param   mixed   $CadesType       Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                   Может принимать следующие значения:
	 *                                   <table class="table">
	 *                                   <table>
	 *                                   <thead>
	 *                                   <tr>
	 *                                   <th>Имя</th>
	 *                                   <th>Описание</th>
	 *                                   <th>Значение</th>
	 *                                   </tr>
	 *                                   </thead>
	 *                                   <tbody>
	 *                                   <tr>
	 *                                   <td>CADES_BES</td>
	 *                                   <td>Тип подписи CAdES BES.</td>
	 *                                   <td>0x01</td>
	 *                                   </tr>
	 *                                   <tr>
	 *                                   <td>CADES_DEFAULT</td>
	 *                                   <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                   <td>0x00</td>
	 *                                   </tr>
	 *                                   <tr>
	 *                                   <td>CADES_T</td>
	 *                                   <td>Тип подписи CAdES T.</td>
	 *                                   <td>0x05</td>
	 *                                   </tr>
	 *                                   <tr>
	 *                                   <td>CADES_X_LONG_TYPE_1</td>
	 *                                   <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                   <td>0x5D</td>
	 *                                   </tr>
	 *                                   <tr>
	 *                                   <td>PKCS7_TYPE</td>
	 *                                   <td>Тип подписи PKCS7.</td>
	 *                                   <td>0xffff</td>
	 *                                   </tr>
	 *                                   </tbody>
	 *                                   </table>
	 * @param   bool    $bDetached       Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.
	 *
	 * @return void
	 */
	public function VerifyCades(string $SignedMessage, $CadesType, bool $bDetached)
	{
	}

	/**
	 * Позволяет проверить усовершенствованную подпись, в том числе и на соответствие заданому типу подписи.
	 * В отличие от метода VerifyCades, данный метод не проверяет соответствие хэш-значения каким-либо данным.
	 * Если в переданном сообщении присутствует подписанный атрибут messageDigest, то данный метод проверяет только
	 * соответствие хэш-значения в параметре Hash тому хэш-значению, которое содержится в атрибуте messageDigest.
	 *
	 * @param   \CPHashedData  $Hash           Объект \CPHashedData, соответствующий хэш-значению, при помощи которого следует проверить подписанное CMS-сообщение.
	 * @param   string         $SignedMessage  Проверяемое подписанное сообщение.
	 * @param   mixed          $CadesType      Тип усовершенствованной подписи. По умолчанию CAdES-X Long Type 1.
	 *                                         Может принимать следующие значения:
	 *                                         <table class="table">
	 *                                         <table>
	 *                                         <thead>
	 *                                         <tr>
	 *                                         <th>Имя</th>
	 *                                         <th>Описание</th>
	 *                                         <th>Значение</th>
	 *                                         </tr>
	 *                                         </thead>
	 *                                         <tbody>
	 *                                         <tr>
	 *                                         <td>CADES_BES</td>
	 *                                         <td>Тип подписи CAdES BES.</td>
	 *                                         <td>0x01</td>
	 *                                         </tr>
	 *                                         <tr>
	 *                                         <td>CADES_DEFAULT</td>
	 *                                         <td>Тип подписи по умолчанию (CAdES-X Long Type 1).</td>
	 *                                         <td>0x00</td>
	 *                                         </tr>
	 *                                         <tr>
	 *                                         <td>CADES_T</td>
	 *                                         <td>Тип подписи CAdES T.</td>
	 *                                         <td>0x05</td>
	 *                                         </tr>
	 *                                         <tr>
	 *                                         <td>CADES_X_LONG_TYPE_1</td>
	 *                                         <td>Тип подписи CAdES-X Long Type 1.</td>
	 *                                         <td>0x5D</td>
	 *                                         </tr>
	 *                                         <tr>
	 *                                         <td>PKCS7_TYPE</td>
	 *                                         <td>Тип подписи PKCS7.</td>
	 *                                         <td>0xffff</td>
	 *                                         </tr>
	 *                                         </tbody>
	 *                                         </table>
	 *
	 * @return void
	 */
	public function VerifyHash(\CPHashedData $Hash, string $SignedMessage, $CadesType = CADES_DEFAULT)
	{
	}

	/**
	 * Устанавливает способ кодирования данных для подписи.
	 *
	 * @param   mixed  $ContentEncoding         Способ кодирования данных для подписи. По умолчанию STRING_TO_UCS2LE.
	 *                                          Может принимать следующие значения:
	 *                                          <table>
	 *                                          <thead>
	 *                                          <tr>
	 *                                          <th>Имя</th>
	 *                                          <th>Описание</th>
	 *                                          <th>Значение</th>
	 *                                          </tr>
	 *                                          </thead>
	 *                                          <tbody>
	 *                                          <tr>
	 *                                          <td><strong>STRING_TO_UCS2LE</strong></td>
	 *                                          <td>Кодировка UTF-8 или UNICODE.<br></td>
	 *                                          <td>0</td>
	 *                                          </tr>
	 *                                          <tr>
	 *                                          <td><strong>BASE64_TO_BINARY</strong></td>
	 *                                          <td>Кодировка BASE64.</td>
	 *                                          <td>1</td>
	 *                                          </tr>
	 *                                          </tbody>
	 *                                          </table>
	 *
	 * @return void
	 */
	public function set_ContentEncoding($ContentEncoding = STRING_TO_UCS2LE)
	{
	}

	/**
	 * Возвращает способ кодирования данных для подписи.
	 *
	 * @return mixed
	 */
	public function get_ContentEncoding()
	{
	}

	/**
	 * Устанавливает данные, которые должны быть подписаны.
	 *
	 * @param   string  $Content  данные, которые должны быть подписаны.
	 *
	 * @return void
	 */
	public function set_Content(string $Content)
	{
	}

	/**
	 * Возвращает данные, которые должны быть подписаны.
	 *
	 * @return string
	 */
	public function get_Content()
	{
	}

	/**
	 * Извлекает коллекцию объект CPSigner, которые были использованы для создания подписи.
	 *
	 * @return \CPSigners
	 */
	public function get_Signers()
	{
	}

	/**
	 * Извлекает коллекцию сертификатов подписанных данных.
	 *
	 * @return \CPCertificates
	 */
	public function get_Certificates()
	{
	}
}
