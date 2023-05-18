<?php
class points{
    private $shanyrak_id;
    private $point;

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
     * Get the value of point
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set the value of point
     */
    public function setPoint($point): self
    {
        $this->point = $point;
    }
}
?>