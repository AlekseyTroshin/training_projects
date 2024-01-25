<?php

function emptyValue(?string $str): bool
{
    $str = trim($str);
    return !empty($str) || $str === '0';
}