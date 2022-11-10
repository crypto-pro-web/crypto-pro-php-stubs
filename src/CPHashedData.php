<?php

/**
 * Хэш-значение данных.
 * Объект HashedData предоставляет интерфейсы ICPHashedData, ICPHashedData2 и интерфейс, аналогичный интерфейсу объекта CAPICOM.HashedData.
 * В отличие от объекта CAPICOM.HashedData, объект HashedData поддерживает алгоритм хэширования ГОСТ Р 34.11-94 и ГОСТ Р 34.11-2012.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icphasheddata
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icphasheddata2
 * @link https://learn.microsoft.com/windows/win32/seccrypto/hasheddata
 *
 * @property-read  $Algorithm
 * @property-read  $Value
 * @property-read  $DataEncoding
 * @property-read  $Key
 */
class CPHashedData
{
	/**
	 * @throws \Throwable
	 */
	public function __construct()
	{
	}

	/**
	 * Вычисляет хэш для заданной строки.
	 *
	 * @param   string  $newVal  Строка, содержащая значение для хеширования.
	 *
	 * @return void
	 */
	public function Hash(string $newVal)
	{
	}

	/**
	 * Позволяет проинициализировать объект готовым хэш-значением.
	 *
	 * @param   string  $newVal  Хэш-значение, которым следует проинициализировать объект. Должно быть представлено в виде строки шестнадцатеричных цифр.
	 *
	 * @return void
	 */
	public function SetHashValue(string $newVal)
	{
	}

	/**
	 * Возвращает результат операции хэширования
	 *
	 * @return string
	 */
	public function get_Value()
	{
	}

	/**
	 * Устанавливает данные для установки ключа, используемого для вычисления HMAC
	 *
	 * @return void
	 */
	public function set_Key(string $Key)
	{
	}

	/**
	 * Возвращает данные для установки ключа, используемого для вычисления HMAC
	 *
	 * @return string
	 */
	public function get_Key()
	{
	}

	/**
	 * Задает алгоритм хэширования.
	 *
	 * @param   mixed  $Algorithm         Алгоритм хэширования. По умолчанию ENCODE_BASE64.
	 *                                    Может принимать следующие значения:
	 *                                    <table>
	 *                                    <thead>
	 *                                    <tr>
	 *                                    <th>Значение</th>
	 *                                    <th>Описание</th>
	 *                                    </tr>
	 *                                    </thead>
	 *                                    <tbody>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_SHA1</strong></td>
	 *                                    <td>Алгоритм хэширования SHA1.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_MD2</strong></td>
	 *                                    <td>Алгоритм хэширования MD2.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_MD4</strong></td>
	 *                                    <td>Алгоритм хэширования MD4.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_MD5</strong></td>
	 *                                    <td>Алгоритм хэширования MD5.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_SHA_256</strong></td>
	 *                                    <td>Хэш-алгоритм SHA-256.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_SHA_384</strong></td>
	 *                                    <td>Хэш-алгоритм SHA-384.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_SHA_512</strong></td>
	 *                                    <td>Хэш-алгоритм SHA-512.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>HASH_ALGORITHM_GOSTR_3411</strong></td>
	 *                                    <td>Хэш-алгоритм ГОСТ 34.11 - 94.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411</strong></td>
	 *                                    <td>Хэш-алгоритм ГОСТ 34.11 - 94.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256</strong></td>
	 *                                    <td>Хэш-алгоритм ГОСТ 34.11 - 2012 c длиной ключа 256 бит.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512</strong></td>
	 *                                    <td>Хэш-алгоритм ГОСТ 34.11 - 2012 c длиной ключа 512 бит.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411_HMAC</strong></td>
	 *                                    <td>Хэш-алгоритм HMAC ГОСТ 34.11 - 94.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256_HMAC</strong></td>
	 *                                    <td>Хэш-алгоритм HMAC ГОСТ 34.11 - 2012 c длиной ключа 256 бит.</td>
	 *                                    </tr>
	 *                                    <tr>
	 *                                    <td><strong>CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512_HMAC</strong></td>
	 *                                    <td>Хэш-алгоритм HMAC ГОСТ 34.11 - 2012 c длиной ключа 512 бит.</td>
	 *                                    </tr>
	 *                                    </tbody>
	 *                                    </table>
	 *
	 * @return void
	 */
	public function set_Algorithm($Algorithm = HASH_ALGORITHM_SHA1)
	{
	}

	/**
	 * Возвращает алгоритм хэширования.
	 *
	 * @return mixed
	 */
	public function get_Algorithm()
	{
	}

	/**
	 * Задает способ кодирования данных для хэширования
	 *
	 * @param   mixed  $DataEncoding            кодировка данных, передаваемых в метод Hash()
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
	 *
	 * @return void
	 */
	public function set_DataEncoding($DataEncoding = STRING_TO_UCS2LE)
	{
	}

	/**
	 * Возвращает способ кодирования данных для хэширования
	 *
	 * @return mixed
	 */
	public function get_DataEncoding()
	{
	}

}
