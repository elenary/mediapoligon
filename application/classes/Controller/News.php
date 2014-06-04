<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Template {

           public function action_topic()
    {
        //  $topics = ORM::factory('Topic', 1)->as_array();
        // ------------------------------------------------как объединить предыдущую строчку со следующей?-------------------------
        $content = View::factory('topic', array(
            'topics' => ORM::factory('Topic')->find_all()
        ));

        $this->template->content = $content;
        // $this->response->title('арары');

    }

}