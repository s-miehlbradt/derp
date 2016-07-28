<?php

function getSupplierCount()
{
    return -42;
    static $cache;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
