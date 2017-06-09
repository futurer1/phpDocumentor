# phpDocumentor [![phpDocumentor](https://phpdoc.org/bundles/phpdocumentorwebsite/images/logo-icon.png)](https://phpdoc.org/docs/latest/index.html) 
Documenting code with phpDocumentor

## Наиболее часто применяемые теги:

[@package](https://phpdoc.org/docs/latest/references/phpdoc/tags/package.html) [_название пакета_]
+ Можно задать вверху файла для всего файла сразу, а можно индивидуально для каждого класса

[@author](https://phpdoc.org/docs/latest/references/phpdoc/tags/author.html) [_имя автора кода_]
+ Так же можно задать как для файла, так и для структурного элемента кода

[@version](https://phpdoc.org/docs/latest/references/phpdoc/tags/version.html) [_номер версии документа_] [_описание версии_]
+ Версия документа, либо структурного элемента

[@copyright](https://phpdoc.org/docs/latest/references/phpdoc/tags/copyright.html) [_2017 компания такая-то_]

[@deprecated](https://phpdoc.org/docs/latest/references/phpdoc/tags/deprecated.html) [_номер версии_] [_описание версии_]
+ Пометка элемента на удаление в будущей версии

[@todo](https://phpdoc.org/docs/latest/references/phpdoc/tags/todo.html) [_описание задач_]
+ Описывает задачи, которые необходимо выполнить в дубущем

[@see](https://phpdoc.org/docs/latest/references/phpdoc/tags/see.html) [_url ссылка или относитльная MyClass::nameMethod()_] [_текст ссылки_]
+ Ссылка "посмотри подробнее" для структурного элемента

[@link](https://phpdoc.org/docs/latest/references/phpdoc/tags/link.html) [_url_] [_текст ссылки_]
+ Абсолютная ссылка на какую-нибудь документацию, проливающую свет на структурный элемент

[@uses](https://phpdoc.org/docs/latest/references/phpdoc/tags/uses.html) [_ClassName::$parameter_] [_описание двухстороней ссылки-связи_]
+ Двухстронняя ссылка между двумя элементами. Один эл. использует, другой используется

[@var](https://phpdoc.org/docs/latest/references/phpdoc/tags/var.html) [_тип данных_] [_название элемента_] [_описание элемента_]
+ Описывает свойства класса

[@param](https://phpdoc.org/docs/latest/references/phpdoc/tags/param.html) [_тип аргумента_] [_название аргумента_] [_комментарий к аргументу_]
+ Описывает аргумент функции или метод класса

[@return](https://phpdoc.org/docs/latest/references/phpdoc/tags/return.html) [_тип значения_] [_описание возвращаемого значения_]
+ Описывает возвращаемое функцией или методом значение с указанием его типа
