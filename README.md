## Laravel

## インストール方法

## インストール後の実施事項

画像のダミーデータは 
public/imagesフォルダにsample1~sample6.jpgとして保存しています。

php artisan storage:link でstorageフォルダにリンク後

storage/app/public/productsフォルダ内に保存すると表示されます。
(productsフォルダが無い場合は作成してください)

ショップの画像も表示する場合はstorage/app/public/shopsフォルダを作成し画像を保存してください