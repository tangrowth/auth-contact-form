# お問い合わせフォーム

## 概要

Laravel の練習として認証機能付きのお問い合わせフォームの作成を行いました

## 環境構築

1. プロジェクトを clone する
   `$ git clone https://github.com/tangrowth/auth-contact-form.git`
2. composer のアップデートをする
   `$ composer update`
3. `.env.exapmle`をコピーし`.env`ファイルを作成する
   またデータベースの設定を環境に合わせて行う
4. テーブルとダミーデータを作成する
   `$ php artisan migrate`
   `$ php artisan db:seed`
5. アプリケーションのキーを作成する
   `$ php artisan key:generate`
6. アプリケーションを起動する
   `$ php artisan serve`

## 使用技術(実行環境)

-   PHP 8.2.4
-   Laravel 10.10
-   MySQL 10.4.28

## ER 図

後ほど添付します

## テーブル設計

### contacts テーブル

| カラム名   | 型              | PRIMARY KEY | NOT NULL | FOREIGN KEY    |
| ---------- | --------------- | ----------- | -------- | -------------- |
| id         | bigint unsigned | ◯           |          |                |
| categry_id | bigint unsigned |             |          | categories(id) |
| first_name | varchar(255)    |             | ◯        |                |
| last_name  | varchar(255)    |             | ◯        |                |
| gender     | tinyint         |             | ◯        |                |
| email      | varchar(255)    |             | ◯        |                |
| tell       | varchar(255)    |             | ◯        |                |
| address    | varchar(255)    |             | ◯        |                |
| building   | varchar(255)    |             |          |                |
| detail     | text            |             | ◯        |                |
| created_at | timestamp       |             |          |                |
| updated_at | timestamp       |             |          |                |

### categories テーブル

| カラム名   | 型              | PRIMARY KEY | NOT NULL |
| ---------- | --------------- | ----------- | -------- |
| id         | bigint unsigned | ◯           |          |
| content    | varchar(255)    |             | ◯        |
| created_at | timestamp       |             |          |
| updated_at | timestamp       |             |          |

### users テーブル

| カラム名   | 型              | PRIMARY KEY | NOT NULL |
| ---------- | --------------- | ----------- | -------- |
| id         | bigint unsigned | ◯           |          |
| name       | varchar(255)    |             | ◯        |
| email      | varchar(255)    |             | ◯        |
| password   | varchar(255)    |             | ◯        |
| created_at | timestamp       |             |          |
| updated_at | timestamp       |             |          |

## URL

-   開発環境：http://localhost/
