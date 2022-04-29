# phpstan-wordpress-stubs-perf-repro

Reproducer / test for https://github.com/szepeviktor/phpstan-wordpress/issues/99

I'm testing with

```sh
\time vendor/bin/phpstan --debug --verbose analyse
```

defaults (using the 4M stub as bootstrap file):
9s / 216M

extension disabled:
1s / 52M

using scanDirectories with a [WordPress 5.9](https://wordpress.org/latest.zip) folder, commented out the stub directly in the extension:
3s / 94M
