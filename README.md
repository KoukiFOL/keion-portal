# 軽音ポータル
軽音楽部のスタジオの予約状況を管理するwebアプリです。
## 要件定義
### 目的（背景）
- 従来の予約状況の管理における問題点の解消（必須）
    - 部長が総会後に公開する写真の予約表から予約状況が反映されない
        - 追加で予約する際、LINEで逐一連絡しているのでその後予約をさらに取る場合LINEのチャットログを振り返る必要がある。
        - ![自己PRスライド pptx](https://github.com/user-attachments/assets/45062b2c-e4e0-4bac-b428-6921130a32ae)
    - フリーの予約システムでは誰が予約したかわからない
    - 電話番号など不要な情報を毎回入力する手間がある。
    - 数百人規模で予約をするとバグが発生
    - オンラインのシステムの場合軽音部のみ必要な処理を自動でできない
    - 合宿時のみ複数のスタジオの予約を受付
    - 特定の時間でライブが近いバンド以外の予約を弾く
    - 対面の総会で収集した予約を幹部１人が手動で入力する
- 幹部が行っている事務処理（下記）の自動化
    - ライブにエントリーしたバンドの集計
    - セットリスト、セッティング図の回収
    - 連絡事項共有
- 部員のバンド運営の効率化
    - 練習の日程調整
 <!--
- 部員のコミュニケーションを円滑化（他の機能が完成するまで手をつけるな！）
    - コラム投稿機能
    - 誕生日お祝い機能
    -->

### 目標
- 1の要件を満たし、スタジオ予約機能のみを持ったシステム「軽音ポータル」の開発
- 12月末までに完成
- 12月中に実際に触ってもらってテストを行い1月末に運用
- 1月中は従来の予約方法と並行して行い、問題点を逐次修正する
- 1月末に以下の致命的な問題点を解消した後、従来の運用方法を廃止し軽音ポータルを使用した予約管理方法に切り替える。

- 2,3 の要件を満たした機能をアジャイルに追加（1月末くらい）

### プロジェクトのスコープ
webフレームワークを使用したフルスタック開発

### 機能要件
#### 12月末からの運用
##### ユーザ管理機能
- 全てのユーザがアカウントを作成、自身のアカウント情報編集、アカウントの削除ができる。
- 管理者ステータスを設ける。
- 原則幹部&システム管理者に付与され、他の機能における全ての情報を編集できる。
- 管理者は加えて以下のことができる
    - 他のユーザの削除
    - 他のユーザの管理者権限の付与&解除
##### スタジオ予約機能
- 全てのユーザーが以下の条件以外で時間帯のスタジオを予約、取り消しができる。
    - 他のユーザがすでに予約を入れている。
    - 予約可能な時間帯ではない
    - 管理者が予約できないようにしている場合(点検など)
- 管理者は以下のことができる。
    - 全てのユーザの予約の強制登録、強制削除
    - 指定された時間ごとに予約可能なバンドを増やす
    ###### 時間指定の例
        17:00- 直近のバンドに出場するバンドのみ
        17:15- 全てのバンド
        17:30- 全ユーザ
- バンド数制限時間内、1回あたりの最大予約時間の制限
#### 次年度からの運用
まだ決まってない


### 非機能要件
- 最大300人の同時アクセスに耐えられるようにする。
- 開発者が引退した後、運用が不可能なレベルの致命的な不具合が発生しないようにする。
- ユーザの操作記録を最大1年保管する。
## 基本設計
## システム構成
### 使用技術
#### Laravel
11.23.5
#### SQlite
3.43.2 2023-10-10 13:08:14 1b37c146ee9ebb7acd0160c0ab1fd11017a419fa8a3187386ed8cb32b709aapl (64-bit)
### 設計図
[こちら](https://drive.google.com/file/d/13GQtEGV2ZPHl-MBhIMsOIDawI3Ef0_Rt/view?usp=sharing)のdrowioをご確認ください。



