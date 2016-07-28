<?php

function getSupplierCount()
{
    return false;
    static $cache;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
