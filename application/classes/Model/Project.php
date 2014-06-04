<?php

class Model_Project extends Kohana_ORM {
    public function getTitle() {
        return $this->subtitle;
    }
}