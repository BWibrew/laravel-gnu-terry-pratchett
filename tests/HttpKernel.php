<?php

namespace BWibrew\GnuPratchett\Tests;

use Orchestra\Testbench\Http\Kernel;

class HttpKernel extends Kernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \BWibrew\GnuPratchett\GnuPratchettMiddleware::class,
    ];
}
