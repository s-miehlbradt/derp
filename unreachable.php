<?php

function getSupplierCount()
{
    static $cache;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
