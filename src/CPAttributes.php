<?php

/**
 * Коллекция объектов CPAttribute.
 *
 * @property-read int $Count
 * @property-read int $Item
 */
class CPAttributes
{
	/**
	 * Добавляет атрибут в коллекцию.
	 *
	 * @param   CPAttribute  $attribute
	 *
	 * @return void
	 */
	public function Add(CPAttribute $attribute)
	{
	}

	/**
	 * Возвращает количество атрибутов в коллекции.
	 *
	 * @return int
	 */
	public function get_Count()
	{
	}

	/**
	 * Возвращает атрибут из коллекции по его индексу.
	 *
	 * @return CPAttribute
	 */
	public function get_Item(int $index)
	{
	}

	/**
	 * Удаляет все атрибуты из коллекции.
	 *
	 * @return void
	 */
	public function Clear()
	{
	}

	/**
	 * Удаляет атрибут из коллекции.
	 *
	 * @param   int  $index
	 *
	 * @return void
	 */
	public function Remove(int $index)
	{
	}

	public function Assign()
	{
	}

}
