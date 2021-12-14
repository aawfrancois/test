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
     * @return $this
     * @throws Exception
     */
    public function zero(): self
    {
        return $this->calculate(0);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function one()
    {
        return $this->calculate(1);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function two()
    {
        return $this->calculate(2);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function six()
    {

        return $this->calculate(6);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function seven()
    {
        return $this->calculate(7);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function eight()
    {
        return $this->calculate(8);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function nine()
    {
        return $this->calculate(9);
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
}
