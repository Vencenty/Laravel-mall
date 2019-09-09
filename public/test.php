<?php

$r = putenv(file_get_contents('../.env'));

$r = getenv('APP_URL');
print_r($r);
die;
