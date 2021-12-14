<?php

class Calculator
{
    const PLUS = 'PLUS';
    const MINUS = 'MINUS';
    const TIMES = 'TIMES';
    const DIVIDED_INTO = 'DIVIDE_INTO';

    /**
     * @var int
     */
    protected int $calcul;

    /**
     * @var string|null
     */
    protected ?string $operator = null;


    protected static array $convertStringToNumber = [
        'zero'  => 0,
        'one'   => 1,
        'two'   => 2,
        'three' => 3,
        'four'  => 4,
        'five'  => 5,
        'six'   => 6,
        'seven' => 7,
        'eight' => 8,
        'nine'  => 9,
        'ten'   => 10,
    ];

    /**
     * Returns calcul value
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->calcul;
    }

    /**
     * @param $method
     * @param $arguments
     * @return Calculator
     * @throws Exception
     */
    public function __call($method, $arguments)
    {
        if (!array_key_exists($method, self::$convertStringToNumber)) {
            throw new Exception($method . ' not present in array $convertStringToNumber ');
        }

        $this->calculate((self::$convertStringToNumber[$method]));

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     * @throws Exception
     */
    protected function calculate(int $value)
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + $value;
            } else if ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - $value;
            } else if ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * $value;
            } else if ($this->operator === self::DIVIDED_INTO) {
                if ($value === 0) {
                    throw new Exception('Cannot divide by 0');
                }
                $this->calcul = $this->calcul / $value;
            }

            $this->operator = null;
        } else {
            $this->calcul = $value;
        }

        return $this;
    }

     /**
      * Set operator +
      *
      * @return $this
      */
    public function plus()
    {
        $this->operator = self::PLUS;

        return $this;
    }

    /**
     * Set operator -
     *
     * @return $this
     */
    public function minus()
    {
        $this->operator = self::MINUS;

        return $this;
    }

    /**
     * Set operator *
     *
     * @return $this
     */
    public function times()
    {
        $this->operator = self::TIMES;

        return $this;
    }

    /**
     * Set operator /
     *
     * @return $this
     */
    public function dividedInto()
    {
        $this->operator = self::DIVIDED_INTO;

        return $this;
    }
}
