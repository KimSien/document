tmuxは,シェル多重化ソフトです。tmux(ティーマックス)を使えば
シェルのターミナル画面を一つにまとめたり、複数のプロセス管理やプロセスの復帰が可能になります。

<!--more-->



## 抑えるポイント 1

### １−1 インストール方法(mac)

```
$ brew install tmux

```

### １−2 tmuxの起動

```
$ tmux
```

### １−３ 基本操作

プレフィックスキー(Ctrl-b) + 他の動作を表すキー


### １−４ セッションの確認

現在のセッションとクライアントの状態を確認

```
$ tmux list-sessions

例：

0: 1 windows (created Sat Jan  6 02:43:06 2018) [82x31] (attached)

$ tmux list-client

例：

/dev/ttys002: 0 [82x32 xterm-256color] (utf8)

```

### １−５ セッションのデタッチとアタッチ

Ctrb+d でデタッチ *完全に抜けてしまう。
Ctrb+b + :detach-client　で一時的に抜ける(アタッチ可能)

再び先程の環境へアタッチするには

```

$ tmux attach -t 0

```

### １−６ セッション削除

```
$ tmux kill-session

or

$ tmux kill-server
全てのセッションを削除

```

## 抑えるポイント 2

### ２−１ ウィンドウ操作

Ctrl-b + c　で新しいウィンドウを作る。
画面下にウィンドウ番号が表示されるので

Ctrl-b + 番号　で切り替え

Ctr-b + w　で リスト表示＋プレビューしながら切り替えれるので便利

Ctr-b + & でウィンドウを削除

### ２−２ ペイン操作　※ウインドウ分割

Ctrl-b + " で水平分割
Ctrl-b + % で垂直分割

### ２−３ ペイン間操作、移動

Ctrl-b + o　で移動

Ctrl-b + q でインジケータ番号表示 *さらに＋番号で移動

### ２−４ ペイン分割解除

Ctrl-b + x




## supplements

### [参照](http://kanjuku-tomato.blogspot.jp/2014/02/tmux.html)


