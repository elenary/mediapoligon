<?php

class Model_User extends Model_Auth_User {
    public function getTitle() {
        return $this->subtitle;
    }
}