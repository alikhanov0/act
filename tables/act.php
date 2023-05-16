<?php

class act {
    private $act_id;
    private $act_type_id;
    private $act_writer;
    private $student;
    private $comment;

    /**
     * Get the value of act_id
     */
    public function getActId()
    {
        return $this->act_id;
    }

    /**
     * Set the value of act_id
     */
    public function setActId($act_id): self
    {
        $this->act_id = $act_id;
    }

    /**
     * Get the value of act_type_id
     */
    public function getActTypeId()
    {
        return $this->act_type_id;
    }

    /**
     * Set the value of act_type_id
     */
    public function setActTypeId($act_type_id): self
    {
        $this->act_type_id = $act_type_id;
    }

    /**
     * Get the value of act_writer
     */
    public function getActWriter()
    {
        return $this->act_writer;
    }

    /**
     * Set the value of act_writer
     */
    public function setActWriter($act_writer): self
    {
        $this->act_writer = $act_writer;
    }

    /**
     * Get the value of student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set the value of student
     */
    public function setStudent($student): self
    {
        $this->student = $student;
    }

    /**
     * Get the value of comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;
    }
}


?>