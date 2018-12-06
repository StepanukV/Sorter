<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 06.12.18
 * Time: 16:30
 */

namespace sorterApp;



class RsortArray implements Strategy
{
    public function sort($data)
    {
        rsort($data);
        return $data;
    }
}