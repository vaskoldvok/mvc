#!/bin/bash

php-fpm7.4 -F -R &
nginx -g "daemon off;" &
wait -n
exit $?
