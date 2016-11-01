# js check do

use this?

use prototype?

hashtable?

[undeclaration, undefine](http://so-zou.jp/web-app/tech/programming/javascript/grammar/variable/#no2)

code refactoring

[moduel pattern](http://bashalog.c-brains.jp/14/03/24-171000.php)


host and native object

use document.write() ?

[js template ](http://codechord.com/2013/07/javascript_template_engine-mustache-handlebars-microtemplating/)

where diffrent with document load event & ready event

what use strict mode? and merit or demerit



-----------------------
# 

[javascript 値渡し、参照渡し](http://d.hatena.ne.jp/chaichanPaPa/20080611/1213186809)

javascript 参照渡し(オブジェクトにして渡す)

```
var global = "foo";

var hoge = function(a){
  console.log(global);
  a[0]=["dfa"];
    
}

a= ["f"];
hoge(a);

console.log(a[0]);
```
