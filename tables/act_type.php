<?php

class ActTypes {
    private $act_type_id;
    private $act_type;
    private $act_category_id;

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
     * Get the value of act_type
     */
    public function getActType()
    {
        return $this->act_type;
    }

    /**
     * Set the value of act_type
     */
    public function setActType($act_type): self
    {
        $this->act_type = $act_type;
    }

    /**
     * Get the value of act_category_id
     */
    public function getActCategoryId()
    {
        return $this->act_category_id;
    }

    /**
     * Set the value of act_category_id
     */
    public function setActCategoryId($act_category_id): self
    {
        $this->act_category_id = $act_category_id;
    }
}


?>