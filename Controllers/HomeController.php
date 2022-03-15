<?php

class HomeController extends Controller
{
    public function __construct()
    {
        $a = new User();
       // $a->isLogged();
    }

    public function index()
    {

        $data = array();
        $p = new Post();
        $u = new User();
        $data['postLast'] = $p->getListLastPost();
        $data['userList'] = $u->getAllUser();
        $this->loadTemplate('home', $data);
    }
    public function exit()
    {
        unset($_SESSION['IdOfUser']);
        header("Location:" . BASE_URL);
    }
}
