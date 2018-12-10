<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

/**
 * Class RsortArray sorting array by descending
 * @package sorterApp
 */
class RsortArray implements StrategyInterface
{
    const ORDER = RSORT;
    /**
     * @param array $data
     * @return sorted array
     */
    public function sort(array $data)
    {
        rsort($data);
        return $data;
    }
}
