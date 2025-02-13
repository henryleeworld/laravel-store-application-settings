# Laravel 11 儲存應用程式設定

引入 spatie 的 laravel-settings 套件來擴增將設定儲存在資料儲存庫（資料庫、Redis 等）中，並通過應用程式輕鬆使用設定。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/settings/show` 來進行網站設定。

----

## 畫面截圖
![](https://i.imgur.com/s8cErAa.png)
> 已在 Laravel Container 中註冊了設定，當想在應用程式中的某處使用這些設定時，可以將設定注入
