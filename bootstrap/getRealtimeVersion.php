<?php

// To prevent github actions from failing
function env()
{
    return null;
}

$version = include 'config/constants.php';
echo $version['bedrock']['realtime_version'] ?: 'unknown';
