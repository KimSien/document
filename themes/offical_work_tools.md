# offical work tools

# index
- 0 xampp (for php7.0)
- 1 vs code


- 0 -1 for php 

- 0-1-0 VS CODE setting php
- 0-1-1 PHP-DEBUG plugin
- 0-1-2 PHP 



--------------------------------
# 0 xampp (for php7.0)




-------------
# 1 setting vs code

first impression! 

install after test.html code typing

html:5

and type key of TAB


before setting
- node install
- before install xampp file. php path for windows  is C:\xampp\php



-------------
# 0-1 for php

php

0-1-0 VS CODE setting php

[X](https://officeyuai.net/%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0%E9%96%8B%E7%99%BA/vscodewithphpsetting/)

vs user propaties setting

```
// 既定の設定を上書きするには、このファイル内に設定を挿入します
{
        "php.validate.executablePath": "C:/xampp/php/php.exe",
        "php.validate.enable": true,

}

```

! attention !

c:\ <- x
c:/ <- ok





0-1-1 PHP-DEBUG plugin

- prepare xdebug activate

[if not running xdebug with xampp?](http://gomocool.net/gomokulog/?p=64)

```
[XDebug]
zend_extension="C:\xampp\php\ext\php_xdebug.dll"
xdebug.remote_host = 127.0.0.1
xdebug.remote_autostart=1
xdebug.remote_enable=1
xdebug.remote_handler = "dbgp"
xdebug.remote_port = 9000
```

check the xampp dashbord/phpinfo.php

add upon cord to php.ini. but not running xdebug?
you try change php\ext\php_xdegub.dll(32bit) s




- create xampp htdoc file in vsfolder(project)

start xampp

debug break point set, debug start.

checking console variable input

ex: $a = 5;

console input $a -> return debug console screen appearance variable value












-------------



-------------

