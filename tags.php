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
     <...>
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

//  @property
//  @property-read
//  @property-write
//  @return
//  @see
//  @since
//  @source
//  @subpackage
//  @throws
//  @todo
//  @uses
//  @var
//  @version

