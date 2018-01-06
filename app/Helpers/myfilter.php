<?php
/**
 * Created by PhpStorm.
 * User: srahnama
 * Date: 1/6/18
 * Time: 3:21 PM
 */


function array_remove_null($item)
{
    if (!is_array($item)) {
        return $item;
    }

    return collect($item)
        ->reject(function ($item) {
            return is_null($item);
        })
        ->flatMap(function ($item, $key) {

            return is_numeric($key)
                ? [array_remove_null($item)]
                : [$key => array_remove_null($item)];
        })
        ->toArray();
}
