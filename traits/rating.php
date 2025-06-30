<?php 

trait Rating {
    public $rating = 0;

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRating() {
        return $this->rating;
    }
}

?>