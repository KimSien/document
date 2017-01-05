----------------------
**********************

# ! attention

[わかりやすいJavaEE ウェブシステム入門](http://k-webs.jp/JavaEE/index.html)

use error netbeans 8.1

・2016年4月現在のお知らせです。GlassFish4.1＋NetBeans8.02 を使いましょう！


**********************
----------------------

# the first lerning java and java ee.

java ee is java set that is include business logic.

current select java flamework trend.

- java ee
- spring
- play

-----------------
## Index




- point
- select server
- for eclipse setup enviroment.



-----------------

## point

this is standard. example browser to reprodauce the html standard(?)

- jsf is nice.
- make minimal cart program is created by 350 lines.

- jpa is nice (not jdbc & dao)

- more cdi,ejb -> closure? obsreber pattern make easy.

-----------------

## select server

- glass fish

- (small project) tomcat

-----------------

## for eclipse setup enviroment

[reference for win](http://ittoybox.com/archives/509)



-----------------

これひどすぎるわ。

[EclipseLink error について](http://qiita.com/mmatsuoka@github/items/14b798244ef61b50f697)

カオス

[サーバー追加しなおしについて](http://kikutaro777.hatenablog.com/entry/2014/09/15/165819)




-----------------
チュートリアル A サーバー関係

[最速でJava EE 7 Webアプリを作る – 2014 Java EE Advent Calendar](http://www.mushagaeshi.com/2014/12/23/faster-java-ee-7-app-making-2015-java-ee-advent-calendar-2014/)

※ completion tutorials / チュートリアルの補完

上記ページのチュートリアルを netbeans 8.02 / glassfish 4.1 で行う上で、いくつか補完が必要となります。

- mysqlで行う際は ツール > サーバー　> ドメインフォルダ を確認して
ドメインフォルダ内の GlassFish_Server>glassfish>domeins>[domein名]>lib　の中に 「mysql-connector-java-5.1.23-bin.jar」 が入ってるかどうか確認。 

- mysqlのポート確認

- domain再起動の問題

- @Named　のくだりの部分に 
import java.io.Serializable;
[シリアライズについて](http://www.task-notes.com/entry/20150925/1443150000)
さらには今回追加した IndexBeanクラスは implements Serializableが必要


- 新規 で　JDBC接続リソースを作ってる。　データベースから参照する形になる。
そしてそれがglassfish上にもなければならない。

- pool 設定するときは色々追加の設定が必要


-----------------

チュートリアル A ログイン画面を作ってみる
[【Java】 JavaEE7 + primefaces ログイン画面を作ってみる①【メモ】](http://re1ax.sakura.ne.jp/wp/2016/02/14/%E3%80%90java%E3%80%91-javaee7-primefaces-%E3%83%AD%E3%82%B0%E3%82%A4%E3%83%B3%E7%94%BB%E9%9D%A2%E3%82%92%E4%BD%9C%E3%81%A3%E3%81%A6%E3%81%BF%E3%82%8B%E2%91%A0%E3%80%90%E3%83%A1%E3%83%A2%E3%80%91/)




[テンプレートとしてのfacelets](https://yoshio3.com/2011/01/14/jsf20-new-with-facelets-template/)


