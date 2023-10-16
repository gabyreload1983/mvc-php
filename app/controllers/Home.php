<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $users = $db->findFirst("testing_users", [
            'conditions' => ["user_name = ?"],
            'bind' => ['gaby'],
            'order' => "email","user_name",
            'limit' => 2
        ]);
        dnd($users);
        $this->view->render('home/index');
    }
}