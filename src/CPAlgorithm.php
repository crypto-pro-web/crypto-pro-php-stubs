<?php

/**
 * Описывает алгоритм шифрования.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/algorithm
 * @link https://docs.microsoft.com/en-gb/windows/win32/seccrypto/algorithm?redirectedfrom=MSDN
 *
 * @property-read int $Name
 * @property-read int $KeyLength
 */
class CPAlgorithm
{

	/**
	 * Извлекает алгоритм, используемый для операций подписи, конвертации и шифрования.
	 *
	 * @return int
	 */
	public function get_Name()
	{
	}

	/**
	 * Устанавливает алгоритм, используемый для операций подписи, конвертации и шифрования.
	 *
	 * @param   int  $Name  Алгоритм может принимать следующие значения:
	 *                      <table>
	 *                      <thead>
	 *                      <tr>
	 *                      <th>Значение</th>
	 *                      <th>Пояснение</th>
	 *                      </tr>
	 *                      </thead>
	 *                      <tbody>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_RC2
	 *                      </td>
	 *                      <td>
	 *                      Использовать RSA RC2 шифрование.
	 *                      </td>
	 *                      </tr>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_RC4
	 *                      </td>
	 *                      <td>
	 *                      Использовать RSA RC4 шифрование.
	 *                      </td>
	 *                      </tr>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_DES
	 *                      </td>
	 *                      <td>
	 *                      Использовать DES шифрование.
	 *                      </td>
	 *                      </tr>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_3DES
	 *                      </td>
	 *                      <td>
	 *                      Использовать triple DES шифрование.
	 *                      </td>
	 *                      </tr>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_AES
	 *                      </td>
	 *                      <td>
	 *                      Используйте алгоритм Advanced Encryption Standard (AES). Это значение действительно только для объекта \CPEncodedData.
	 *                      </td>
	 *                      </tr>
	 *                      <tr>
	 *                      <td>
	 *                      CADESCOM_ENCRYPTION_ALGORITHM_GOST_28147_89
	 *                      </td>
	 *                      <td>
	 *                      Использовать шифрование по ГОСТ 28147-89.
	 *                      </td>
	 *                      </tr>
	 *                      </tbody>
	 *                      </table>
	 *
	 * @return void
	 */
	public function set_Name(int $Name)
	{
	}

	/**
	 * Извлекает длину ключа в битах
	 *
	 * @return int
	 */
	public function get_KeyLength()
	{
	}

	/**
	 * Устанавливает длину ключа в битах
	 *
	 * @param   int  $KeyLength  Длина ключа может принимать следующие значения:
	 *                           <table>
	 *                           <thead>
	 *                           <tr>
	 *                           <th>Значение</th>
	 *                           <th>Пояснение</th>
	 *                           </tr>
	 *                           </thead>
	 *                           <tbody>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_MAXIMUM
	 *                           </td>
	 *                           <td>
	 *                           Использовать максимально допустимую длину ключа, для указанного алгоритма шифрования.
	 *                           </td>
	 *                           </tr>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_40_BITS
	 *                           </td>
	 *                           <td>
	 *                           Использовать 40-битные ключи.
	 *                           </td>
	 *                           </tr>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_56_BITS
	 *                           </td>
	 *                           <td>
	 *                           Использовать 56-битные ключи, если допустимы.
	 *                           </td>
	 *                           </tr>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_128_BITS
	 *                           </td>
	 *                           <td>
	 *                           Использовать 128-битные ключи, если допустимы.
	 *                           </td>
	 *                           </tr>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_192_BITS
	 *                           </td>
	 *                           <td>
	 *                           Использовать 192-битные ключи. Эта длина ключа доступна только для AES.
	 *                           </td>
	 *                           </tr>
	 *                           <tr>
	 *                           <td>
	 *                           ENCRYPTION_KEY_LENGTH_256_BITS
	 *                           </td>
	 *                           <td>
	 *                           Использовать 256-битные ключи. Эта длина ключа доступна только для AES.
	 *                           </td>
	 *                           </tr>
	 *                           </tbody>
	 *                           </table>
	 *
	 * @return void
	 */
	public function set_KeyLength(int $KeyLength)
	{
	}

}
