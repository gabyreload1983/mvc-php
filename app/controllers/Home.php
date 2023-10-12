<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $fields = [
            'user_name' => 'Pili',
            'email' => 'pili@gmail.com'
        ];
        $result = $db->insert('testing_users', $fields);
        $this->view->render('home/index');
    }
}