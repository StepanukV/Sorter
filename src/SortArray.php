<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 06.12.18
 * Time: 16:28
 */

namespace sorterApp;



class SortArray implements Strategy
{
    public function sort($data)
    {
        sort($data);
        return $data;
    }
}