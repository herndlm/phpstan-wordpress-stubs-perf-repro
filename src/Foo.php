<?php

declare(strict_types=1);

namespace Herndlm\PhpstanWordpressStubsPerfRepro;

final class Foo
{

    public function doFoo(?string $foo): void
    {
        echo esc_html($foo);
    }

}
