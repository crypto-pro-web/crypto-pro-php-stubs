<?php

/**
 * Атрибут усовершенствованной подписи (подписанный или неподписанный). Реализует интерфейсы ICPAttribute и ICPAttribute2.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpattribute
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_interface/icpattribute2
 *
 * @property-read string $OID
 * @property-read string $Value
 * @property-read string $Name
 * @property-read string $ValueEncoding
 */
class CPAttribute
{
	public function __construct()
	{
	}

	/**
	 * Устанавливает объектный идентификатор (OID) атрибута.
	 *
	 * @param   string  $value
	 *
	 * @return void
	 */
	public function set_OID($value)
	{
	}

	/**
	 * Возвращает объектный идентификатор (OID) атрибута.
	 *
	 * @return string
	 */
	public function get_OID()
	{
	}

	/**
	 * Устанавливает закодированное значение атрибута.
	 *
	 * @param   string  $value
	 *
	 * @return void
	 */
	public function set_Value($value)
	{
	}

	/**
	 * Возвращает закодированное значение атрибута.
	 *
	 * @return string
	 */
	public function get_Value()
	{
	}

	/**
	 * Устанавливает имя атрибута
	 *
	 * @param   string  $value
	 *
	 * @return void
	 */
	public function set_Name($value)
	{
	}

	/**
	 * Возвращает имя атрибута
	 *
	 * @return string
	 */
	public function get_Name()
	{
	}

	/**
	 * Устанавливает способ кодирования значения атрибута.
	 *
	 * @param   string  $value
	 *
	 * @return void
	 */
	public function set_ValueEncoding($value)
	{
	}

	/**
	 * Возвращает способ кодирования значения атрибута.
	 *
	 * @return string
	 */
	public function get_ValueEncoding()
	{
	}
}
