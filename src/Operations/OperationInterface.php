<?php

namespace Calculator\Operations;

interface OperationInterface 
{
    /**
     * Execute operation
     *
     * @param  int $total
     * @param  int $value
     * @return int
     */
    public function execute($total, $value);
}