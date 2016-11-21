# offical work tools

# index
- * best choice

- 0 xampp (for php7.0)
- 1 vs code for php
- 2 setting vs code for css
- 3 setting vs code for js

- 4 other node. resource compression

- 0 -1 for php 

- 1-1-0 VS CODE setting php
- 1-1-1 PHP-DEBUG plugin

- 1-1-2 
PHP Code Format
php CS - static code checker with psr?
etc

- 1-1-3 composer
http://qiita.com/mikoski01/items/266469535e860312145d

- 

--------------------------------
# * best choice

! not programer
- css -> less + plugin(EASY LESS)
- php -> 


--------------------------------
# 0 xampp (for php7.0)

- win xampp

- mac mampp

- mac homebrew

[mac homebrew php7](http://qiita.com/Arashi/items/42d6f6e40d7d48891fc9)
[mac homebrew xdebug](http://stackoverflow.com/questions/32291215/how-to-setup-x-debug-for-php7-on-mac)








-------------
# 1 setting vs code for php

first impression! 

install after test.html code typing

html:5

and type key of TAB


before setting
- node install
- before install xampp file. php path for windows  is C:\xampp\php


--------------
# 2 setting vs code for css



## 2-1 SASS

### 2-1-1 prepare cli 

[vs code for sass compile](http://celtislab.net/archives/20160303/vscode-node-sass/)

[no ruby sass compile](http://celtislab.net/archives/20160302/node-sass-cl/)


manifacture convert
->
	node-sass ***origin.sass **convert.css


auto wath
->
	node-sass -w ***origin.sass **convert.css

and more source-map and compressed
->
	node-sass --source-map true --output-style compressed  test.sass test.css




### 2-1-2 vscode in sass

shift+ctrl+B task run

'''
{
    // See https://go.microsoft.com/fwlink/?LinkId=733558
    // for the documentation about the tasks.json format
    "version": "0.1.0",
    "command": "node-sass",
    "isShellCommand": true,
    "args": ["test.sass", "test.css"],
    "showOutput": "always"
}
'''

any task setup ok

gulp? grunt?













## 2-2 LESS

Easy LESS

	it is easy

	[tutorial](http://www.webopixel.net/html-css/503.html)

	but not variable? - ok 





-------------
# 0-1 for php

## defalt php? setting.

- Ctrl+space bottom select 
code intelijense?

- Saving file. after check syntax php.
erro under red wave line pick up!




-----------------
## 1-1-0 VS CODE setting php

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




-----------------
## 1-1-1 PHP-DEBUG plugin

## 1-1-1-1 mac xdebug

- mac xdebug

brew install php70-xdebug

/usr/local/etc/php/7.0/php.ini

mac
```
[XDebug]
//zend_extension=""
xdebug.remote_host = 127.0.0.1
xdebug.remote_autostart=1
xdebug.remote_enable=1
xdebug.remote_handler = "dbgp"
xdebug.remote_port = 9000
```

and
setting lunch.json(vs code setting)
```

{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "stopOnEntry":true,
            "serverSourceRoot": "/Users/toysking/testphp/",
            "localSourceRoot": "${workspaceRoot}"
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9000
        }
    ]
}

```

## 1-1-1-2 windows xdebug

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


! attenstion !
    php versionに合わせて
    変える必要あり
    php 7.08cliでは
    php_xdebug-2.4.0rc1-7.0-vc14.dll




- create xampp htdoc file in vsfolder(project)

start xampp

debug break point set, debug start.

checking console variable input

ex: $a = 5;

console input $a -> return debug console screen appearance variable value












-------------



-------------

