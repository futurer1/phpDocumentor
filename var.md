# @var
## Свойства класса

Указывает описание для свойств класса.

@var [_тип значения_] [_название свойства_] [_описание свойства_]

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