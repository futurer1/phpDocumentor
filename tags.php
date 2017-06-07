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
/*
@method
@package
@param
@property
@property-read
@property-write
@return
@see
@since
@source
@subpackage
@throws
@todo
@uses
@var
@version
*/
