<?php

/**
 * Объект Algorithm
 * Описывает алгоритм шифрования.
 * Реализует интерфейс, аналогичный интерфейсу объекта CAPICOM.Algorithm.
 * В отличие от объекта Microsoft CAPICOM.Algorithm, свойство Name данного объекта доступно только для чтения.
 * Объект данного класса нельзя создать. Данный объект возвращает свойство Algorithm объекта CPEnvelopedData.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/algorithm
 * @link https://docs.microsoft.com/en-gb/windows/win32/seccrypto/algorithm?redirectedfrom=MSDN
 *
 */
class CPAlgorithm
{

	/**
	 * Свойство KeyLength устанавливает или извлекает длину ключа в битах. Это свойство не используется для алгоритмов, использующих фиксированную длину ключа.
	 * Может принимать следующие значения:
	 * <table>
	 * <thead>
	 * <tr>
	 * <th>Значение</th>
	 * <th>Пояснение</th>
	 * </tr>
	 * </thead>
	 * <tbody>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_MAXIMUM
	 * </td>
	 * <td>
	 * Use the maximum key length available with the indicated encryption algorithm.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_40_BITS
	 * </td>
	 * <td>
	 * Use 40-bit keys.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_56_BITS
	 * </td>
	 * <td>
	 * Use 56-bit keys if available.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_128_BITS
	 * </td>
	 * <td>
	 * Use 128-bit keys if available.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_192_BITS
	 * </td>
	 * <td>
	 * Use 192-bit keys. This key length is available only for AES.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * ENCRYPTION_KEY_LENGTH_256_BITS
	 * </td>
	 * <td>
	 * Use 256-bit keys. This key length is available only for AES.
	 * </td>
	 * </tr>
	 * </tbody>
	 * </table>
	 *
	 * @var int
	 */
	private $KeyLength;

	/**
	 * Свойство Name устанавливает или извлекает алгоритм, используемый для операций подписи, конвертации и шифрования.
	 * Может принимать следующие значения:
	 * <table>
	 * <thead>
	 * <tr>
	 * <th>Значение</th>
	 * <th>Пояснение</th>
	 * </tr>
	 * </thead>
	 * <tbody>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_RC2
	 * </td>
	 * <td>
	 * Use RSA RC2 encryption.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_RC4
	 * </td>
	 * <td>
	 * Use RSA RC4 encryption.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_DES
	 * </td>
	 * <td>
	 * Use DES encryption.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_3DES
	 * </td>
	 * <td>
	 * Use triple DES encryption.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_AES
	 * </td>
	 * <td>
	 * Use the Advanced Encryption Standard (AES) algorithm. This value is valid for the EncryptedData object only.
	 * </td>
	 * </tr>
	 * <tr>
	 * <td>
	 * CADESCOM_ENCRYPTION_ALGORITHM_GOST_28147_89
	 * </td>
	 * <td>
	 * Use ГОСТ 28147-89 encryption.
	 * </td>
	 * </tr>
	 * </tbody>
	 * </table>
	 *
	 * @var int
	 */
	private $Name;

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
	 * @param   int  $Name
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
	 * @param   int  $KeyLength
	 *
	 * @return void
	 */
	public function set_KeyLength(int $KeyLength)
	{
	}

}
