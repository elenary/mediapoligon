<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Topic extends Kohana_ORM {

    // protected $_table_name = 'categories';
    // protected $_primary_key = 'cat_id';
    // protected $_db_group = 'my_db';

    /*  protected $_has_one = array(
      'geo' => array(
      'model' => 'geo',
      'foreign_key' => 'city'
      )
      ); */

    public function rules() {
        return array(
            'country' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'project' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'city' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'place' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'address' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'time' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'title' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'subtitle' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'text' => array(
                array('not_empty'),
                array('max_length', array(':value', 950)),
            ),
            'author_text' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'caption' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'author_media' => array(
                array('not_empty'),
                array('max_length', array(':value', 150)),
            ),
            'tags' => array(
                array('not_empty'),
                array('max_length', array(':value', 350)),
            )
        );
    }

    public function getID() {
        return $this->ID;
    }

    public function getPhoto() {

        if (isset($this->photo)) {
            echo "<img src='../../photo/", $this->photo, " ' style='max-width: 100%; height: auto;' alt='Фото'>";
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

    public function getIn_top() {
        if ($this->in_top == 'Yes') {
            echo "<img src='../../img/thumb.png' alt='intop' ";
        }
    }

    public function getFormat() {

        return $this->format;
    }

    public function checkPhoto() {

        if (isset($this->photo)) {
            echo "<img src='../../img/photo.png' alt='photo' ";
        }
    }

    public function checkVideo() {

        if (isset($this->video)) {
            echo "<img src='../../img/photo.png' alt='photo' ";
        }
    }

    public function getChecked_by_korr() {

        if ($this->checked_by_korr == 'Yes')
            echo "<img src='../../img/check.png' alt='yes' ";
        else
            echo "<img src='../../img/cross.png' alt='no' ";
    }

    public function getPublished() {

        if ($this->published == 'Yes')
            echo "<img src='../../img/check.png' alt='yes' ";
        else
            echo "<img src='../../img/cross.png' alt='no' ";
    }

}
