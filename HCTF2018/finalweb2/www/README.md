# li₃ fullstack distribution

## Synopsis

The li₃ fullstack distribution is an application system that includes the
overarching directory layout, an example starting application, and a copy of the
[li₃ framework](https://github.com/UnionOfRAD/lithium).

## Installation / Quickstart

Make sure you have [Composer](http://getcomposer.org/doc/00-intro.md) installed, then
run the following command to create an initial project from this distribution:

```
composer create-project unionofrad/framework project
```

Inside the `project` directory start the builtin PHP development webserver.

```
php -S 127.0.0.1:8080 -t app/webroot index.php
```

You should now be able to see the welcome page by visiting [http://127.0.0.1:8080](http://127.0.0.1:8080).

The manual has more information on [the installation process](http://li3.me/docs/book/manual/1.x/installation/)
as well as [getting your first project started very quickly](http://li3.me/docs/book/manual/1.x/quickstart).

## Copyright & License

Copyright 2016 Union of RAD. All rights reserved. This library
is distributed under the terms of the BSD 3-Clause License. The
full license text can be found in the LICENSE.txt file.

