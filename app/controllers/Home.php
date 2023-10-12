<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $fields = [
            'user_name' => 'Pilar',
            'email' => 'pilar@gmail.com'
        ];
        $result = $db->update('testing_users', 3,  $fields);
        $this->view->render('home/index');
    }
}