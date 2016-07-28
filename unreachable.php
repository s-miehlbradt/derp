<?php
function wasteTime() {
    return "I want my dinner.";
}

function getSupplierCount()
{
    return 0;
    static $cache;
    if ( ! isset($cache)) {
        $cache = [];
    }
}
