<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

   // public $template = 'layouts/auth';

    public function action_authorization() {
        if (isset($_POST) && Valid::not_empty($_POST)) {
            $post = Validation::factory($_POST)
                ->rule('login', 'not_empty')
                ->rule('password', 'not_empty')
                ->rule('password', 'min_length', array(':value', 3));


            if ($post->check() && Auth::instance()->login(
                    $post['login'], $post['password'], true
                )) {
                if (Auth::instance()->logged_in('admin')) {
                    $this->redirect('/index/index/');
                }
            } else {
                $login_errors = __('Неверная комбинация логин/пароль');
            }
            $errors = $post->errors('validation', 'ru');

            $data = array(
                'errors' => $errors,
                'login_errors' => $login_errors
            );
        } else {
            $data = array();
        }
        $this->template->content = View::factory('/auth/index', $data);
    }

    public function action_logout() {
        Auth::instance()->logout(FALSE, TRUE);
        $this->redirect('/admin/auth');
    }

}
