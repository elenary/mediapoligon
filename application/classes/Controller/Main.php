<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public function action_index()
	{
        //  $topics = ORM::factory('Topic', 1)->as_array();
        // ------------------------------------------------как объединить предыдущую строчку со следующей?-------------------------
        $content = View::factory('index', array(
        'topics' => ORM::factory('Topic')->find_all()
    ));

        $this->template->content = $content;
       // $this->response->title('арары');

    }

    public function action_about()
    {
        $content = View::factory('about');
        $this->template->content = $content;
        //$this->response->body($content);
    }

    public function action_partners()
    {
        $content = View::factory('partners');
        $this->template->content = $content;
    }

    public function action_authors()
    {
        $content = View::factory('authors');
        $this->template->content = $content;
    }

    public function action_contacts()
{
    $content = View::factory('contacts');
    $this->template->content = $content;
}

    public function action_authorization()
    {
        $content = View::factory('authorization');
        $this->template->content = $content;
    }

    public function action_registration()
    {
        $content = View::factory('registration');
        $this->template->content = $content;
    }
} // End Welcome
