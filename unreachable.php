<?php

function getSupplierCount()
{
    return 0;
    static $cache;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
