<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

class StrategyFactory
{
    /**
     * @param $strategy choose strategy (SORT or RSORT)
     * Example of using $factory->construct('RSORT')
     * @return NullObject|RsortArray|SortArray
     */
    public function construct(string $strategy)
    {
        switch ($strategy) {
            case SortArray::ORDER:
                return new SortArray();
            case RsortArray::ORDER:
                return new RsortArray();
            case NullObject::ORDER:
                return new NullObject();
        }
    }
}
