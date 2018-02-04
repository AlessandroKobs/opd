<?php
class homeController extends Controller
{
    public function __construct() {
        $this->user = new Users();
        //dd($this->user);
        if (!$this->user->isLogged()) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = array();

        $this->loadTemplate('index', $data);
    }
}
