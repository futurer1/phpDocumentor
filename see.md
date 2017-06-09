# @see
## Посмотри подробнее

Показывает ссылку с структурного элемента на web-сайт или другой структурный элемент.

@see [_URI | FQSEN_] [_описание связи_]

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