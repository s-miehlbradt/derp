<?php

function getSupplierCount()
{
    static $cache;
    return 0;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
