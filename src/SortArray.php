<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

/**
 * Class SortArray sorting aray by ascending
 * @package sorterApp
 */
class SortArray implements StrategyInterface
{
    const ORDER = SORT;
    /**
     * @param array $data
     * @return sorted array
     */
    public function sort(array $data): array
    {
        sort($data);
        return $data;
    }
}
