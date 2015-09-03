<?php 

namespace Calculator\Operations;

class Add implements OperationInterface
{
    /**
     * Execute add operation.
     *
     * @param  int $total
     * @param  int $value
     * @return int
     */
    public function execute($total, $value)
    {
        return $total + $value;
    }
}