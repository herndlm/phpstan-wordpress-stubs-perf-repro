<?php

declare(strict_types=1);

namespace Herndlm\PhpstanWordpressStubsPerfRepro;

final class Foo
{

    public function doFoo(?string $foo): void
    {
        // The next line needs to error with
        // Parameter #1 $text of function esc_html expects string, string|null given.
        echo esc_html($foo);
    }

}
