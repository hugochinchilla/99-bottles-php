#!/bin/sh

docker run --rm -it \
  -w /code \
  -v `pwd`:/code \
  --entrypoint=php \
  php:5.6-alpine phpunit.phar tests/BottlesTest.php
