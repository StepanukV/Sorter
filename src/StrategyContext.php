<?php

/*
 * This file is part of the "Sort array lib" package.
 *
 * (c) Stepanuk Vasiliy rayzer1423@gmail.com
 *
 */

namespace sorterApp;

/**
 * Class StrategyContext basic logic sorting
 * @package sorterApp
 */
class StrategyContext
{
    public $data =[];
    private $strategy;
    /**
     * StrategyContext constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    /**
     * @param mixed $strategy
     * choose strategy to sort
     */
    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @return array sorted array
     */
    public function sort(): array
    {
        return $this->strategy->sort($this->data);
    }
}
