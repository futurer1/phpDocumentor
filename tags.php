<?php
// URL: https://phpdoc.org/docs/
/* Наиболее интересные теги:
    @package [название_пакета]
             (Можно задать вверху файла для всего файла сразу, а можно индивидуально для каждого класса)
    @author [имя_автора_кода]
             (Так же можно задать как для файла, так и для структурного элемента кода)
    @copyright [2017 компания такая-то]
    @deprecated [номер версии] [описание]
             (Пометка элемента на удаление в будущей версии)
    @var;
    @version;
    @todo;
    @return;
    
    @param$
    @see;
    @link;
    @uses.
*/

// @api - помечает структурный элемент, используемый сторонними программами, и являющийся частью API.


// @author - имя автора
//           @author [name] [<email address>]


// @category - тег не должен быть использован, вместо него нужно использовать @package
//             @category [description]


// @copyright - копирайтинг
//              @copyright [description]


// @deprecated - тег для пометки элементов на удаление в будущих версиях. 
//               Можно использовать вместе с тегом @see, чтобы указать на новый элемент, 
//               который будет использован вместо устаревшего.
//               @deprecated [<version>] [<description>]
//               Пример:
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


// @example - пример использования метода или класса
//            @example [location] [<start-line> [<number-of-lines>] ] [<description>]
//            Пример:
/**
* @example example1.php Counting in action.
* @example http://example.com/example2.phps Counting in action by a 3rd party.
* @example "My Own Example.php" My counting.
*/
function count()
{
//<...>
}


// @filesource - сообщает в phpDocumentor, что нужно включить исходный код в текущий файл для разбора


// @ignore - сообщает в phpDocumentor, что следующий структурный элемент обрабатывать не надо
//           @ignore [<description>]


// @internal - отмечает, чтоэлемент документации с этим тегом предназначен для внутреннего испеользования
//             @internal [description]
  
  
// @license - описывает соответствие лицензии
//            @license [<url>] [name]
  

//  @link - связывает структурный элемент с сайтом. Должен задаваться абсотютным URI
//          Ссылка на внешний ресурс, например, на документацию php.net
//          @link [URI] [<description>]
//          Пример:
/**
* @link http://example.com/my/bar Text of link
*/
 function count()
 {
 //<...>
 }


//  @method - используется для описания методов, которые могут быть вызваны магической функцией __call внутри класса
//            @method [return type] [name]([[type] [parameter]<, ...>]) [<description>]
//            Пример:
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
//             С помощью этого тега можно связывать классы с пакетами.
//             Может быть использован для документирования файла, а не класса (вверху до всего кода).
//             @package [level 1]\[level 2]\[etc.]
//             Пример:
/**
* @package PSR\Documentation\API
*/


//  @param - используется для документирования одиночного аргумента функции или метода класса 
//           @param [Type] [name] [<description>]
//           Пример:
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
//              Пример:
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
//                   Пример:
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
//                    Пример:
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


//  @return - описывает возвращаемое значение функцией или методом (его тип и назначение)
//            С помощью символа | можно указать несколько типов возвращаемых значений
//            @return [Type] [<description>]
//            Пример:
/**
* @return string|null The label's text or null if none provided.
*/
function getLabel()
{
//<...>
}


//  @see - показывает ссылкус ассоциированного структурного элемента на web-сайт или другой структурный элемент
//         @see [URI | FQSEN] [<description>]
//         Пример:
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
//           Пример:
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
//            Пример:
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
//                Пример:
/**
* @package PSR
* @subpackage Documentation\API
*/


//  @throws - показывает какие исключения (ошибки) может сформировать структурный элемент
//            Используется чтобы показать в документации какие ошибки могут возникать и при каких обстоятельствах.
//            Пример:
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


//  @todo - маркерует структурный элемент, обозначая задачи, которые необходимо выполнить в дубущем
//          @todo [description]
//          Пример:
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


//  @uses - показывает ссылку "с" и "на" ассоциированный структурный элемент.
//          Автоматически создает двухстороннюю ссылку между элементами, что очень удобно.
//          Отношения между текущим элементов и тем, на который ссылка.
//          @uses [FQSEN] [<description>]
//          Пример:
/**
* @uses MyClass::$items to retrieve the count from.
*
* @return integer Indicates the number of items.
*/
function count()
{
//<...>
}


//  @var - указывает описание для свойств класса
//         @var [“Type”] [$element_name] [<description>]
//         Пример:
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

//  @version - версия документа
//             @version [<vector>] [<description>]
//             Пример:
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
