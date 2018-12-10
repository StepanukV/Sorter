<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

/**
 * Interface StrategyInterface sort strategy for array
 * @package sorterApp
 */

interface StrategyInterface
{
    /**
     * @param array $data Array with data to sort
     * @return array Sorted array
     */
    public function sort(array $data) ;
}
