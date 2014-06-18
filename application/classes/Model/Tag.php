<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tag extends  Kohana_ORM {

    public function getTag_ID() {
        return $this->tag_ID;
    }

    public function getTag() {

          return $this->tag;

    }
}