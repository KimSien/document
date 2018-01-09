tmuxはインストールしたままの状態だとマウス操作の対応状態がいまいちです。
スクロールやマウスでのウィンドウ切り替えを行うにはtmux.confを設定する必要があります。

<!--more-->

~/.tmux.conf を作成する。
ユーザードキュメントルートに .tmux.confを作成します。

```
$ cd
$ touch .tmux.conf
```

マウス
```
#マウス操作を有効にする
set-option -g mouse on

# スクロールアップするとコピーモードに入る
bind-key -n WheelUpPane if-shell -F -t = "#{mouse_any_flag}" "send-keys -M" "if -Ft= '#{pane_in_mode}' 'send-keys -M' 'select-pane -t=; copy-mode -e; send-keys -M'"

# 最後までスクロールダウンするとコピーモードを抜ける
bind-key -n WheelDownPane select-pane -t= \; send-keys -M
```

その他Vimのキーバインドを再現したりと色々便利に変更できるようです。

[参照](https://qiita.com/nmrmsys/items/03f97f5eabec18a3a18b)
