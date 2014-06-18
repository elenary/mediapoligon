<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Corresp extends Controller {
    
    public function before() {
        if (!Auth::instance()->logged_in('corresp')) {
            $this->redirect('/index');
        }
        parent::before();
    }

    public function action_write()
    {
        $data = array();
        if ($this->request->post()) {
            $topic = ORM::factory('topic');
            $post_data = $this->request->post();
            unset($post_data['send']);
            foreach ($post_data as $key => $value) {
                $topic->set($key, $value);
            }
            try {
                $topic->save();
                $data['success'] = true;
            } catch (ORM_Validation_Exception $ex) {
                $data['errors'] = $ex->errors('validation');
            }
        }
        
        
        $content = View::factory('write', array(
            'tags' => ORM::factory('Tag')->find_all(), 'data' => $data)
        );
        $this->response->body($content);
    }
}