<?php
class point{
    private $acc_type;
    private $min;
    private $max;

    /**
     * Get the value of acc_type
     */
    public function getAccType()
    {
        return $this->acc_type;
    }

    /**
     * Set the value of acc_type
     */
    public function setAccType($acc_type): self
    {
        $this->acc_type = $acc_type;
    }

    /**
     * Get the value of min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     */
    public function setMin($min): self
    {
        $this->min = $min;
    }

    /**
     * Get the value of max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     */
    public function setMax($max): self
    {
        $this->max = $max;
    }
}
?>