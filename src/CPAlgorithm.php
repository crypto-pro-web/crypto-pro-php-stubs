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
