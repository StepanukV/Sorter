<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

/**
 * Class nullObject
 * @package sorterApp
 */
final class nullObject implements StrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function sort(array $data)
    {
        return $data;
    }
}
