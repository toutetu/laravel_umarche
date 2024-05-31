<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
| まず最初に、新しいLaravelアプリケーションインスタンスを作成します。
| このインスタンスは、Laravelのすべてのコンポーネントの「接着剤」として機能し、
| システムのさまざまな部分を結びつけるIoCコンテナです。
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
| 次に、いくつかの重要なインターフェースをコンテナにバインドする必要があります。
| これにより、必要に応じてそれらを解決できるようになります。
| カーネルは、WebおよびCLIからこのアプリケーションに送信されるリクエストを処理します。
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
| このスクリプトはアプリケーションインスタンスを返します。
| インスタンスは呼び出し元のスクリプトに渡され、
| インスタンスの構築とアプリケーションの実行およびレスポンスの送信を分離できます。
|
*/

return $app;
