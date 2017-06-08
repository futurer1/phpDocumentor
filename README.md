# phpDocumentor
Documenting code with phpDocumentor

## Наиболее часто применяемые теги:

[@package](https://phpdoc.org/docs/latest/references/phpdoc/tags/package.html) [название_пакета]
             (Можно задать вверху файла для всего файла сразу, а можно индивидуально для каждого класса)

[@author](https://phpdoc.org/docs/latest/references/phpdoc/tags/author.html) [имя_автора_кода]
             (Так же можно задать как для файла, так и для структурного элемента кода)

[@version](https://phpdoc.org/docs/latest/references/phpdoc/tags/version.html) [номер_версии_документа] [описание версии]
             (Версия документа, либо структурного элемента)

[@copyright](https://phpdoc.org/docs/latest/references/phpdoc/tags/copyright.html) [2017 компания такая-то]

[@deprecated](https://phpdoc.org/docs/latest/references/phpdoc/tags/deprecated.html) [номер версии] [описание]
             (Пометка элемента на удаление в будущей версии)

[@todo](https://phpdoc.org/docs/latest/references/phpdoc/tags/todo.html) [описание_задач]
             (Описывает задачи, которые необходимо выполнить в дубущем)

[@see](https://phpdoc.org/docs/latest/references/phpdoc/tags/see.html) [url_ссылка или относитльная MyClass::nameMethod()] [комментарий]
             (Ссылка "посмотри подробнее" для структурного элемента)

[@link](https://phpdoc.org/docs/latest/references/phpdoc/tags/link.html) [url] [текст ссылки]
             (Абсолютная ссылка на какую-нибудь документацию, проливающую свет на структурный элемент)

[@uses](https://phpdoc.org/docs/latest/references/phpdoc/tags/uses.html) [ClassName::$parameter] [описание_двухстороней_ссылки-связи]
             (Двухстронняя ссылка между двумя элементами. Один эл. использует, другой используется)

[@var](https://phpdoc.org/docs/latest/references/phpdoc/tags/var.html) [тип_данных] [название_элемента] [описание]
             (Описывает свойства класса)

[@param](https://phpdoc.org/docs/latest/references/phpdoc/tags/param.html) [тип_аргумента] [название аргумента] [комментарий]
             (Описывает аргумент функции или метод класса)

[@return](https://phpdoc.org/docs/latest/references/phpdoc/tags/return.html) [тип_значения] [описание возвращаемого значения]
             (Описывает возвращаемое функцией или методом значение с указанием его типа)
