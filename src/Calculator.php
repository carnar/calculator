<?php 

namespace Calculator;

class Calculator
{
    protected $total;

    /**
     * Make a calculator instance.
     *
     * @param int $total
     */
    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * Calculate operation result.
     *
     * @param  int $value
     * @param  \Calculator\Operations\OperationInterface $operation
     * @return float
     */
    public function calculate($value,  OperationInterface $operation)
    {
        try {
            $this->total = $operation->execute($this->total, $value);
        } catch (Exception $e) {
            die($e->getMessage());
        }

        return $this->total;
    }
}