<?php

class ActCategory {
    private $act_category_id;
    private $category;

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

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category): self
    {
        $this->category = $category;
    }
}


?>