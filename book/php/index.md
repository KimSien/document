# php books




## basic reference

php manual
- [manual jp](https://secure.php.net/manual/ja/index.php)

php the right way / origin github
- [the right way jp](http://ja.phptherightway.com/)

php cording recommendations. psr series.
- [PHP-FIG](http://www.php-fig.org/)


more deep
- [php specifications](https://github.com/php/php-langspec)




# Index
- 0 develop enviroment setting
- 1 speed up constructing
- 2 Q & A detail check and tutorials.
- 3 thiking relation technology
- 4 cheet sheet lv 1 to 3
- 5 supplements
- 6 other link. framework,integration development

----------------------
# 0 develop enviroment setting
- php version
- xdebug
- composer
----------------------
# 1 speed up constructing

if you need speed cording. need a minimum this tool and knowlage.


## editor setting
vs code

- test:php-unit
- psr-2:[vscode-php-formatter](https://github.com/Dickurt/vscode-php-formatter#installation-guide)
- syntax support: default
- ide: support intellisense plugin

## version change code checker tool



----------------------

----------------------
# 2 Q & A detail check and tutorials.

# Index
- enviroment
- data structure / arraylist,linkedlist
- value,array
- method/closure
- class
- deploy
- reflaction
- magic method
- overload
- namespace
- opacache
- serialize
- quick hash
- php buffering of output
- mysqli

--------------------
# enviroment

- Q what remote debug setting xdebug?
- A 
apache setting or .httaccess
and hit session start url
--------------------
## data structure / arraylist,linkedlist

- Q where diffirence arraylist and linkedlist?
- A 

[diffirence list](http://qiita.com/BumpeiShimada/items/522798a380dc26c50a50)

php 5.3 after default spl-> SplDoublyLinkedList.


--------------------
## value,array

Q general used value.

Q get the property of value. and detect the type and ability?



--------------------
## method/closure


--------------------

## class

- Q reference of syntax parent,self value & function.
- A self,parent,static

- point is static 
[late statics binding](http://maeharin.hatenablog.com/entry/20130202/php_late_static_bindings)

- word　transfer call, not transfer call,late static binding.
非転送コール、転送コール、遅延静的束縛の違いを述べよ

- diffirence of static method and value?
- check the class name. __CLASS__ & get_called_class



- Q ::class resolve classnames. where used this pattern?
- A 

[used test code simple with resolve classname](http://suzuki.tdiary.net/20140312.html)

simple mean manual check.


--------------------
## deploy

http://tech.connehito.com/entry/2016/07/28/170858


--------------------
# reflection

Q what reflection?
A 

--------------------
# magic method



--------------------
# overload



--------------------
# namespace

Q namespace effective using case is psr-4. is this cording contract required what php version?
A psr-4 php 5.3 after

general old resorce programing php 5.2. this attach the psr-0.



--------------------
## opcache

Q require general for php?
A ver 5.5 after

Q do you prepare this method?
A php.ini enable setting for opcache

[*](http://hamuhamuengineer.blogspot.jp/2014/02/opcache.html)

Q rental server setting?
A diffirence of several servers.


-------------------
## serialize

! attension
imposible serialize　with the origin method and class.

serialize pattern more than better to json encord?

-------------------
## quick hash






-------------------
## php buffering of output



-------------------
## mysqli

php7 not support mysql module(until now used by php5.5)












----------------------

----------------------
# 3 thiking relation technology


----------------------

----------------------
# 4 cheet sheet lv 1 to 3


----------------------

----------------------
# 5 supplements





----------------------

----------------------
# 6 other link. framework,integration development







