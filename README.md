## Laravel

## ダウンロード方法

git clone

git clone https://github.com/Arare0825/laravel_marche


ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/Arare0825/laravel_marche

もしくはZIPでダウンロードしてください

## インストール方法

cd laravel_umarche
composer install
npm install
npm run dev
.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_umarche
DB_USERNAME=umarche
DB_PASSWORD=password123
XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されればOK)

最後に php artisan key:generate と入力してキーを生成後、

php artisan serve で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

画像のダミーデータは 
public/imagesフォルダにsample1~sample6.jpgとして保存しています。

php artisan storage:link でstorageフォルダにリンク後

storage/app/public/productsフォルダ内に保存すると表示されます。
(productsフォルダが無い場合は作成してください)

ショップの画像も表示する場合はstorage/app/public/shopsフォルダを作成し画像を保存してください

## section7の補足

決済のテストとしてstripeを利用しています。
必要な場合は.envにstripeの情報を追記してください

## section8の補足

メールのテストをしてmailtrap利用しています。
必要な場合は.envにmailtrapの情報を追記してください

メール処理には時間がかかるのでキューを使用しています。
必要な場合はphp artisan queue:workでワーカーを立ち上げて動作確認するようにしてください。