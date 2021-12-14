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
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 0;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 0;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 0;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                throw new Exception('Cannot divide by 0');
            }

            $this->operator = null;
        } else {
            $this->calcul = 0;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function one()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 1;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 1;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 1;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 1;
            }

            $this->operator = null;
        } else {
            $this->calcul = 1;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function two()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 2;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 2;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 2;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 2;
            }

            $this->operator = null;
        } else {
            $this->calcul = 2;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function six()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 6;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 6;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 6;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 6;
            }

            $this->operator = null;
        } else {
            $this->calcul = 6;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function seven()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 7;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 7;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 7;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 7;
            }

            $this->operator = null;
        } else {
            $this->calcul = 7;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function eight()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 8;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 8;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 8;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 8;
            }

            $this->operator = null;
        } else {
            $this->calcul = 8;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function nine()
    {
        if ($this->operator !== null) {
            if ($this->operator === self::PLUS) {
                $this->calcul = $this->calcul + 9;
            } elseif ($this->operator === self::MINUS) {
                $this->calcul = $this->calcul - 9;
            } elseif ($this->operator === self::TIMES) {
                $this->calcul = $this->calcul * 9;
            } elseif ($this->operator === self::DIVIDED_INTO) {
                $this->calcul = $this->calcul / 9;
            }

            $this->operator = null;
        } else {
            $this->calcul = 9;
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
