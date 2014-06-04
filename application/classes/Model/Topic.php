<?php defined('SYSPATH') or die('No direct script access.');

class Model_Topic extends  Kohana_ORM {

   // protected $_table_name = 'categories';
   // protected $_primary_key = 'cat_id';
   // protected $_db_group = 'my_db';

  /*  protected $_has_one = array(
        'geo' => array(
            'model' => 'geo',
            'foreign_key' => 'city'
        )
    );  */

    public function getID() {
        return $this->ID;
    }

    public function getPhoto() {

        if (isset($this->photo)) {
     //    '<img src="';
            return $this->photo;
     //       echo '" alt="Фото">';
        }
    }

    public function getCaption() {

        if (isset($this->caption))
            return $this->caption;

            }


    public function getAuthor_media() {

        if (isset($this->author_media))
            return $this->author_media;

    }

    public function getTitle() {
        return $this->title;
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function getTime() {
        return $this->time;
    }


    public function getPlace() {

        if (isset($this->place)) {

            return $this->place;
            echo ', ';
        }
    }

    public function getAddress() {

        if (isset($this->address)) {
            return $this->address;
            echo ', ';
        }
    }

    public function getCity() {

        return $this->city;
    }


    public function getCountry() {
        return $this->country;
    }


    public function getText() {

        return $this->text;
    }

    public function getAuthor_text() {

        return $this->author_text;
    }

    public function getIcon() {

        return $this->icon;
    }

    public function getTags() {

        return $this->tags;
    }




}