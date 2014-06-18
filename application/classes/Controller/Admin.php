<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

    public function action_write()
    {
        $content = View::factory('write', array(
            'tags' => ORM::factory('Tag')->find_all())
        );
        $this->response->body($content);

    }



    public function action_newslist()
    {
        $content = View::factory('newslist', array(
            'topics' => ORM::factory('Topic')->find_all() )
        );
        $this->response->body($content);

    }



    public function action_edit()
    {
        $content = View::factory('edit');
        $this->response->body($content);

    }












}