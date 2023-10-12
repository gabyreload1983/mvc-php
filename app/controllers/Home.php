<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $result = $db->delete('testing_users', 6);
        $this->view->render('home/index');
    }
}