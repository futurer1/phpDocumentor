<?php
/*
URL: https://phpdoc.org/docs/

@api - помечает структурный элемент, используемый сторонними программами, и являющийся частью API.

@author - имя автора
@category - тег не должен быть использован, вместо него нужно использовать @package
@copyright - копирайтинг
@deprecated - тег для пометки элементов на удаление в будущих версиях. 
              Можно использовать вместе с тегом @see, чтобы указать на новый элемент, 
              который будет использован вместо устаревшего.
              @deprecated [<version>] [<description>]

@example - пример использования метода или класса
@filesource - сообщает в phpDocumentor, что нужно включить исходный код в текущий файл для разбора

@ignore - сообщает в phpDocumentor, что следующий структурный элемент обрабатывать не надо
@internal - отмечает, чтоэлемент документации с этим тегом предназначен для внутреннего испеользования
@license - описывает соответствие лицензии
*/
//  @link - связывает структурный элемент с сайтом. Должен задаваться абсотютным URI

/**
* @link http://example.com/my/bar Documentation of Foo.
*/
 function count()
 {
 //<...>
 }

//  @method - используется для описания методов, которые могут быть вызваны магической функцией __call внутри класса
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

//  @package - используется для классификации структурных элементов в логических подразделениях
//             @package [level 1]\[level 2]\[etc.]

/**
* @package PSR\Documentation\API
*/


//  @param - используется для документирования одиночного аргумента функции или метода
//           @param [Type] [name] [<description>]

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


//  @property - позволяет узнать классу какие магические свойства в нём присутствуют
//              @property [Type] [name] [<description>]

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

//  @property-read - указывает какие можно использовать магические свойства, только для чтения
//                   @property-read [Type] [name] [<description>]
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


//  @property-write - указывает какие можно использовать магические свойства, только для записи
//                    @property-write [Type] [name] [<description>]
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

//  @return - описывает возвращаемое значение функцией или методом
//            @return [Type] [<description>]

/**
* @return string|null The label's text or null if none provided.
*/
function getLabel()
{
//<...>
}


//  @see - показывает ссылкус ассоциированного структурного элемента на web-сайт или другой структурный элемент
//         @see [URI | FQSEN] [<description>]

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


//  @since - пока не полностью поддерживается в PhpDocumentor2.
//           Говорит о том с какой версией ассоциирован структурный элемент.
//           @since [version] [<description>]
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

//  @source - пока не полностью поддерживается в PhpDocumentor2.
//            Может быть использован для сообщения о конкретной реализации кода структурного элемента, который его представляет.
//            @source [<start-line> [<number-of-lines>] ] [<description>]

/**
* @source 2 1 Check that ensures lazy counting.
*/
function count()
{
    if (null === $this->count) {
    //<...>
    }
}


//  @subpackage - используется для категоризации структурного элемента в логическом подразделении основного пакета
//                может быть использован как аналог или дополнение к пространству имен
//                пространства имет позволяют функционально разделить структурные элементы, а тег @subpackage логически, показывая 
//                каким образом могут быть сгруппированы элементы с различной иерархией
//                Лучше всего использовать этот тег так же как и @package
//                Структурный элемент, описанный тегом @subpackage отображается phpDocumentor сгруппированым в отдельную секцию
//                @subpackage [name]

/**
* @package PSR
* @subpackage Documentation\API
*/


//  @throws - показывает какие исключения (ошибки) может сформировать структурный элемент
//            Используется чтобы показать в документации какие ошибки могут возникать и при каких обстоятельствах.

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


//  @todo
//  @uses
//  @var
//  @version
