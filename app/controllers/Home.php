<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $sql = "SELECT * FROM testing_users";
        $users = $db->query($sql);
        dnd($users);
        $this->view->render('home/index');
    }
}