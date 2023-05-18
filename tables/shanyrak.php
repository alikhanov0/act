<?php
class shanyrak{
    private $shanyrak_id;
    private $curator_id;
    private $shanyrak_name;

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

    /**
     * Get the value of curator_id
     */
    public function getCuratorId()
    {
        return $this->curator_id;
    }

    /**
     * Set the value of curator_id
     */
    public function setCuratorId($curator_id): self
    {
        $this->curator_id = $curator_id;
    }

    /**
     * Get the value of shanyrak_name
     */
    public function getShanyrakName()
    {
        return $this->shanyrak_name;
    }

    /**
     * Set the value of shanyrak_name
     */
    public function setShanyrakName($shanyrak_name): self
    {
        $this->shanyrak_name = $shanyrak_name;
    }
}
?>