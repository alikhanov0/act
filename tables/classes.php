<?php

class classes{
    private $class_id;
    private $grade;
    private $liter;
    private $shanyrak_id;

    /**
     * Get the value of class_id
     */
    public function getClassId()
    {
        return $this->class_id;
    }

    /**
     * Set the value of class_id
     */
    public function setClassId($class_id): self
    {
        $this->class_id = $class_id;
    }

    /**
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     */
    public function setGrade($grade): self
    {
        $this->grade = $grade;
    }

    /**
     * Get the value of liter
     */
    public function getLiter()
    {
        return $this->liter;
    }

    /**
     * Set the value of liter
     */
    public function setLiter($liter): self
    {
        $this->liter = $liter;
    }

    /**
     * Get the value of shanyrak_id
     */
    public function getShanyrakId()
    {
        return $this->shanyrak_id;
    }

    /**
     * Set the value of shanyrak_id
     */
    public function setShanyrakId($shanyrak_id): self
    {
        $this->shanyrak_id = $shanyrak_id;
    }
}

?>