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
        $data['postLast'] = $p->getListLastPost();
       // $data['post'] = $p->getListPost();
        $this->loadTemplate('home', $data);
    }
    public function exit()
    {
        $data = array();
        $p = new Post();
      //  $data['post'] = $p->getListPost();
        unset($_SESSION['IdOfUser']);
        header("Location:" . BASE_URL);
    }
}
