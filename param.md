# @param
## Аргумент или метод

Используется для документирования одиночного аргумента функции или метода класса.

@param [_тип данных_] [_название_] [_описание аргумента или метода_]

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