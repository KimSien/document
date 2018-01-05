シェルカスタマイズといえば、zsh自体やフレームワークのoh-my-zshが有名です。
<strong>「　bash-it　」</strong>　は、oh-my-zsh の bash 版。拡張機能をまとめたフレームワークです。
Bashの見た目を大幅に変えてくれます。
例えばmacのbashにgitのブランチ情報を足してくれるだけでもありがたい存在です。

<!--more-->
## 0 前提条件

gitがインストールされてる必要があります。

## 1 インストール
### 1-1 bash-itをcloneする

下記のリポジトリからcloneしてきます。
[Github_bash-it](https://github.com/Bash-it/bash-it)

```
$ git clone https://github.com/revans/bash-it.git ~/.bash_it

```

### 1-2 インストールシェルを起動する

```
$ ~/.bash_it/install.sh
```

インストール時に全てインストールするか、オプションを選びながらインストールするか選べます。

## 2　各種機能リスト

- [Plugin一覧](https://github.com/Bash-it/bash-it/tree/master/plugins/available)
- [alias一覧](https://github.com/Bash-it/bash-it/tree/master/aliases/available)
- [completion一覧](https://github.com/Bash-it/bash-it/tree/master/completion/available)

## 参照
- [参照](https://mynavi-agent.jp/it/geekroid/2017/01/-7bash-it.html)
- [参照](http://befool.co.jp/blog/jiska/use-bash-it/)

- 参照 ：　beautify your command line using bash-it (Look nice while Hacking ..)
<iframe width="480px" height="250px" src="https://www.youtube.com/embed/LZYF52ec99w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
