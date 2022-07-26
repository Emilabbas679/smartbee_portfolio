<?php


if (!function_exists('selected')) {
    function selected($first, $second)
    {
        if ($first != null  && $first==$second) {
            return 'selected';
        }
        else{
            return '';
        }
    }
}
