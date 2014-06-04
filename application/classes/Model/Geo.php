<?php defined('SYSPATH') or die('No direct script access.');

class Model_Geo extends Kohana_ORM {

   /* protected $_belongs_to = array(
        'topic' => array(
            'model' => 'topic',
            'foreign_key' => 'city'
        )
    );   */


    public function getCountry() {
        return $this->country;
    }

    public function getCity() {
        return $this->city;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getAddress() {
        return $this->address;
    }

}