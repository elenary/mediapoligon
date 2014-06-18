<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public function action_index()
	{

        $content = View::factory('index', array(
        'topics' => ORM::factory('Topic')->find_all()
    ));
        $content2 = View::factory('index');
        $this->template->content = $content2;

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
        /*
        $user = ORM::factory('User', $this->request->param('id'));
        $user->username = $this->request->param('username');
        $user->save();

        $user->update();
        */
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


    public function action_registration()
    {
        $content = View::factory('registration');
        $this->template->content = $content;
    }
} // End Welcome
