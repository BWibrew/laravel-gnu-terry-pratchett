<?php

namespace BWibrew\GnuPratchett\Tests;

use Illuminate\Foundation\Http\Kernel;

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
        \BWibrew\GnuPratchett\GnuPratchettHeader::class,
    ];
}
