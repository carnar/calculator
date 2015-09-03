<?php 

namespace Calculator\Operations;

class Division implements OperationInterface
{

    /**
     * Execute division operation.
     *
     * @param  int $total
     * @param  int $value
     * @return int
     */
    public function execute($total, $value)
    {
        if($value == 0) throw new \Exception("Invalid division by zero", 1);

        return $total / $value;
    }
}