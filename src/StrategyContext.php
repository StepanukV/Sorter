<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 06.12.18
 * Time: 16:27
 */

namespace sorterApp;


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
     */
    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function sort()
    {
        return $result= $this->strategy->sort($this->data);
    }

}