# Tags

+ [\@api](#api)
+ [\@author](#author)
+ [\@category](#category)
+ [\@copyright](#copyright)
+ [\@deprecated](#deprecated)
+ [\@example](#example)
+ [\@filesource](#filesource)
+ [\@ignore](#ignore)
+ [\@internal](#internal)
+ [\@license](#license)
+ [\@link](#link)
+ [\@method](#method)
+ [\@package](#package)
+ [\@param](#param)
+ [\@property](#property)
+ [\@property-read](#property-read)
+ [\@property-write](#property-write)
+ [\@return](#return)
+ [\@see](#see)
+ [\@since](#since)
+ [\@source](#source)
+ [\@subpackage](#subpackage)
+ [\@throws](#throws)
+ [\@todo](#todo)
+ [\@uses](#uses)
+ [\@var](#var)
+ [\@version](#version)


    [see moreinfo](https://phpdoc.org/docs/latest/internals/tags.html) \(external link\)

## \@api
Помечает структурный элемент, используемый сторонними программами, и являющийся частью API.

[:arrow_up: Наверх](#tags)

## \@author
Имя автора

`@author [name] [<email address>]`

[:arrow_up: Наверх](#tags)

## \@category
Тег не должен быть использован, вместо него нужно использовать @package

`@category [description]`

[:arrow_up: Наверх](#tags)

## \@copyright
Копирайтинг

`@copyright [description]`

[:arrow_up: Наверх](#tags)

## \@deprecated
Тег для пометки элементов на удаление в будущих версиях. 
Можно использовать вместе с тегом @see, чтобы указать на новый элемент, который будет использован вместо устаревшего.

`@deprecated [<version>] [<description>]`

Пример:
```php
/**
* @deprecated
* @deprecated 1.0.0
* @deprecated No longer used by internal code and not recommended.
* @deprecated 1.0.0 No longer used by internal code and not recommended.
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@example
Пример использования метода или класса.

`@example [location] [<start-line> [<number-of-lines>] ] [<description>]`

Пример:
```php
/**
* @example example1.php Counting in action.
* @example http://example.com/example2.phps Counting in action by a 3rd party.
* @example "My Own Example.php" My counting.
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@filesource
Сообщает в phpDocumentor, что нужно включить исходный код в текущий файл для разбора.

[:arrow_up: Наверх](#tags)

## \@ignore
Сообщает в phpDocumentor, что следующий структурный элемент обрабатывать не надо.

`@ignore [<description>]`

[:arrow_up: Наверх](#tags)

## \@internal
Отмечает, что элемент документации с этим тегом предназначен для внутреннего использования.

`@internal [description]`

[:arrow_up: Наверх](#tags)
  
## \@license
Описывает соответствие лицензии.

`@license [<url>] [name]`

[:arrow_up: Наверх](#tags)
  
## \@link
Связывает структурный элемент с сайтом. Должен задаваться абсотютным URI
Ссылка на внешний ресурс, например, на документацию php.net

`@link [URI] [<description>]`

Пример:
```php
/**
* @link http://example.com/my/bar Text of link
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@method
Используется для описания методов, которые могут быть вызваны магической функцией `__call()` внутри класса.

`@method [return type] [name]([[type] [parameter]<, ...>]) [<description>]`

Пример:
```php
class Parent
{
    public function __call()
    {
    //<...>
    }
}
/**
* @method string getString()
* @method void setInteger(integer $integer)
* @method setString(integer $integer)
*/
```

[:arrow_up: Наверх](#tags)

## \@package
Используется для классификации структурных элементов в логических подразделениях.
С помощью этого тега можно связывать классы с пакетами.
Может быть использован для документирования файла, а не класса (вверху до всего кода).

`@package [level 1]\[level 2]\[etc.]`

Пример:
```php
/**
* @package PSR\Documentation\API
*/
```

[:arrow_up: Наверх](#tags)

## \@param
Используется для документирования одиночного аргумента функции или метода класса.

`@param [Type] [name] [<description>]`

Пример:
```php
/**
* Counts the number of items in the provided array.
*
* @param mixed[] $items Array structure to count the elements of.
*
* @return int Returns the number of elements.
*/
function count(array $items)
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@property
Позволяет узнать классу какие магические свойства в нём присутствуют.

`@property [Type] [name] [<description>]`

Пример:
```php
class Parent
{
    public function __get()
    {
    //<...>
    }
}
/**
* @property string $myProperty
*/
class Child extends Parent
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@property-read
Указывает какие можно использовать магические свойства, только для чтения.

`@property-read [Type] [name] [<description>]`

Пример:
```php
class Parent
{
    public function __get()
    {
    //<...>
    }
}
/**
* @property-read string $myProperty
*/

class Child extends Parent
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@property-write
Указывает какие можно использовать магические свойства, только для записи.

`@property-write [Type] [name] [<description>]`

Пример:
```php
class Parent
{
    public function __set()
    {
    //<...>
    }
}
/**
* @property-write string $myProperty
*/

class Child extends Parent
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@return
Описывает возвращаемое значение функцией или методом (его тип и назначение).
С помощью символа | можно указать несколько типов возвращаемых значений.

`@return [Type] [<description>]`

Пример:
```php
/**
* @return string|null The label's text or null if none provided.
*/
function getLabel()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@see
Показывает ссылкус ассоциированного структурного элемента на web-сайт или другой структурный элемент.

`@see [URI | FQSEN] [<description>]`

Пример:
```php
/**
* @see http://example.com/my/bar Documentation of Foo.
* @see MyClass::$items           For the property whose items are counted.
* @see MyClass::setItems()       To set the items for this collection.
*
* @return integer Indicates the number of items.
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@since
Пока не полностью поддерживается в PhpDocumentor2.
Говорит о том с какой версией ассоциирован структурный элемент.

`@since [version] [<description>]`

Пример:
```php
/**
* @since 1.0.1 First time this was introduced.
*
* @return integer Indicates the number of items.
*/
function count()
{
//<...>
}

/**
* @since 1.0.2 Added the $b argument.
* @since 1.0.1 Added the $a argument.
* @since 1.0.0
*
* @return void
*/
function dump($a, $b)
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@source
Пока не полностью поддерживается в PhpDocumentor2.
Может быть использован для сообщения о конкретной реализации кода структурного элемента, который его представляет.

`@source [<start-line> [<number-of-lines>] ] [<description>]`

Пример:
```php
/**
* @source 2 1 Check that ensures lazy counting.
*/
function count()
{
    if (null === $this->count) {
    //<...>
    }
}
```

[:arrow_up: Наверх](#tags)

## \@subpackage
Используется для категоризации структурного элемента в логическом подразделении основного пакета.
Может быть использован как аналог или дополнение к пространству имен.
Пространства имен позволяют функционально разделить структурные элементы, а тег `@subpackage` логически, показывая каким образом могут быть сгруппированы элементы с различной иерархией.
Лучше всего использовать этот тег так же как и `@package`.
Структурный элемент, описанный тегом `@subpackage` отображается phpDocumentor сгруппированым в отдельную секцию.

`@subpackage [name]`

Пример:
```php
/**
* @package PSR
* @subpackage Documentation\API
*/
```

[:arrow_up: Наверх](#tags)

## \@throws
Показывает какие исключения (ошибки) может сформировать структурный элемент.
Используется чтобы показать в документации какие ошибки могут возникать и при каких обстоятельствах.

Пример:
```php
/**
* Counts the number of items in the provided array.
*
* @param mixed[] $array Array structure to count the elements of.
*
* @throws InvalidArgumentException if the provided argument is not of type
*     'array'.
*
* @return int Returns the number of elements.
*/
function count($items)
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@todo
Маркерует структурный элемент, обозначая задачи, которые необходимо выполнить в будущем.
`@todo [description]`

Пример:
```php
/**
* Counts the number of items in the provided array.
*
* @todo add an array parameter to count
*
* @return int Returns the number of elements.
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@uses
Показывает ссылку "с" и "на" ассоциированный структурный элемент.
Автоматически создает двухстороннюю ссылку между элементами, что очень удобно.
Отношения между текущим элементов и тем, на который ссылка.

`@uses [FQSEN] [<description>]`

Пример:
```php
/**
* @uses MyClass::$items to retrieve the count from.
*
* @return integer Indicates the number of items.
*/
function count()
{
//<...>
}
```

[:arrow_up: Наверх](#tags)

## \@var
Указывает описание для свойств класса.

`@var [“Type”] [$element_name] [<description>]`

Пример:
```php
class Foo
{
/**
* @var string $name        Should contain a description
* @var string $description Should contain a description
*/

    protected $name, $description;
/**
* Содержит параметры в виде строки
*
* @var string
*/
    public $params;
}
```

[:arrow_up: Наверх](#tags)

## \@version
Версия документа.

`@version [<vector>] [<description>]`

Пример:
```php
/**
* @version 1.0.1
*/
class Counter
{
//<...>
}
/**
* @version GIT: $Id$ In development. Very unstable.
*/
class NeoCounter
{
//<...>
}
```

[:arrow_up: Наверх](#tags)
