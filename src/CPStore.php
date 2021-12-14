<?php

/**
 * Описывает хранилище сертификатов.
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/store
 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/store?redirectedfrom=MSDN
 *
 * @property-read CPCertificates Certificates
 * @property-read void           Location
 * @property-read void           Name
 */
class CPStore
{

	/**
	 * Добавляет сертификат в открытое хранилище.
	 *
	 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/store-add
	 *
	 * @param   CPCertificate  $Certificate
	 *
	 * @return void
	 */
	public function Add(\CPCertificate $Certificate)
	{
	}

	/**
	 * Открывает хранилище сертификатов.
	 *
	 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/store-open
	 *
	 * @param   int     $StoreLocation  Указывает местоположение хранилища, который нужно открыть.
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
	 *                                  MEMORY_STORE
	 *                                  </td>
	 *                                  <td>
	 *                                  The store is a memory store. Any changes in the contents of the store are not persisted.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  LOCAL_MACHINE_STORE
	 *                                  </td>
	 *                                  <td>
	 *                                  The store is a local computer store.
	 *                                  Local computer stores can be read/write stores only if the user has read/write permissions.
	 *                                  If the user has read/write permissions and if the store is opened read/write,
	 *                                  then changes in the contents of the store are persisted.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  CURRENT_USER_STORE
	 *                                  </td>
	 *                                  <td>
	 *                                  The store is a current user store.
	 *                                  A current user store may be a read/write store.
	 *                                  If it is, changes in the contents of the store are persisted.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  ACTIVE_DIRECTORY_USER_STORE
	 *                                  </td>
	 *                                  <td>
	 *                                  The store is an Active Directory store.
	 *                                  No error will be generated if an Active Directory store is opened as read/write,
	 *                                  but any changes to the store will not be persisted.
	 *                                  Certificates cannot be added to or removed from Active Directory stores.
	 *                                  </td>
	 *                                  </tr>
	 *                                  </tbody>
	 *                                  </table>
	 * @param   string  $StoreName      Строка, содержащая имя открываемого хранилища системных сертификатов.
	 *                                  Если хранилище открывается из веб-скрипта, использование символа обратной косой черты (\) в имени недопустимо.
	 *                                  В дополнение к хранилищам, определенным системой, могут быть открыты хранилища определенные пользователем.
	 *                                  Предопределённые системой названия хранилищ:
	 *                                  <ul>
	 *                                  <li>
	 *                                  "My" - Хранилище личных сертификатов пользователя
	 *                                  </li>
	 *                                  <li>
	 *                                  "Ca" - Хранилище промежуточных сертификатов
	 *                                  </li>
	 *                                  <li>
	 *                                  "Root" - Хранилище корневых сертификатов
	 *                                  </li>
	 *                                  </ul>
	 * @param   int     $OpenMode       Режим открытия хранилища. Если хранилище открывается из веб-скрипта,
	 *                                  это значение принудительно устанавливается на
	 *                                  STORE_OPEN_EXISTING_ONLY.
	 *                                  Может принимать следующие значения:
	 *                                  <table class="table"><caption class="visually-hidden">Table 3</caption>
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
	 *                                  STORE_OPEN_MAXIMUM_ALLOWED
	 *                                  </td>
	 *                                  <td>
	 *                                  Open the store in read/write mode if the user has read/write permissions;
	 *                                  otherwise, open the store in read-only mode.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  STORE_OPEN_READ_ONLY
	 *                                  </td>
	 *                                  <td>
	 *                                  Open the store in read-only mode.
	 *                                  </td>
	 *                                  </tr>
	 *                                  <tr>
	 *                                  <td>
	 *                                  STORE_OPEN_READ_WRITE
	 *                                  </td>
	 *                                  <td>
	 *                                  Open the store in read/write mode.
	 *                                  </td>
	 *                                  </tr>
	 *                                  </tbody>
	 *                                  </table>
	 *
	 * @return void
	 */
	public function Open(
		int $StoreLocation = CURRENT_USER_STORE, string $StoreName = 'My',
		int $OpenMode = STORE_OPEN_READ_ONLY
	)
	{
	}

	/**
	 * Закрывает хранилище сертификатов.
	 * После вызова метода Close объект Store уничтожается.
	 *
	 * @return void
	 *
	 * @link https://docs.microsoft.com/en-us/windows/win32/seccrypto/store-close
	 */
	public function Close()
	{
	}

	/**
	 * Возвращает коллекцию сертификатов в хранилище.
	 *
	 * @return CPCertificates
	 */
	public function get_Certificates()
	{
	}

	/**
	 * Возвращает расположение хранилища сертификатов.
	 *
	 * @return int
	 */
	public function get_Location()
	{
	}

	/**
	 * Возвращает имя хранилища.
	 *
	 * @return string
	 */
	public function get_Name()
	{
	}

	/**
	 * Добавить обработчик наступления события.
	 *
	 * @param   string  $Event        Название события, для которого задается обработчик.
	 * @param   mixed   $Listener     Функция, которая является обработчиком заданного события.
	 * @param   bool    $bUseCapture  (optional) Зарезервированный параметр. Не используется.
	 *
	 * @return string
	 */
	public function addEventListener(string $Event, $Listener, bool $bUseCapture
	)
	{
	}

	/**
	 * Удалить обработчик наступления события.
	 *
	 * @param   string  $Event        Название события, для которого задается обработчик.
	 * @param   mixed   $Listener     Функция, которая является обработчиком заданного события.
	 * @param   bool    $bUseCapture  (optional) Зарезервированный параметр. Не используется.
	 *
	 * @return string
	 */
	public function removeEventListener(
		string $Event, $Listener, bool $bUseCapture
	)
	{
	}
}
