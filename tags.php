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


//  @since - 
//  @source
//  @subpackage
//  @throws
//  @todo
//  @uses
//  @var
//  @version

