# @deprecated
## Приготовленный на удаление

Тег для пометки элементов на удаление в будущих версиях. 
Можно использовать вместе с тегом @see, чтобы указать на новый элемент, который будет использован вместо устаревшего.

@deprecated [_версия_] [_описание_]

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