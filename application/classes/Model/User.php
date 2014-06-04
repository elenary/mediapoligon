<?php

class Model_User extends Kohana_ORM {
    public function getTitle() {
        return $this->subtitle;
    }
}