<?php

/**
 * Описывает версию.
 * Объект данного класса нельзя создать. Данный объект возвращают метод CSPVersion и свойство PluginVersion объекта About.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/version?id=%d0%9e%d0%b1%d1%8a%d0%b5%d0%ba%d1%82-version
 */
class Version
{

	/**
	 *
	 */
	public function __construct()
	{
	}

	/**
	 * Возвращает старший компонент версии.
	 *
	 * @return int
	 */
	public function get_MajorVersion()
	{
	}

	/**
	 * Возвращает младший компонент версии.
	 *
	 * @return int
	 */
	public function get_MinorVersion()
	{
	}

	/**
	 * Возвращает номер сборки.
	 *
	 * @return int
	 */
	public function get_BuildVersion()
	{
	}

	/**
	 * Возвращает строковое представление версии.
	 *
	 * @return string
	 */
	public function toString()
	{
	}

}
