<?php
/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 28/01/2018
 * Time: 16:10
 */

class Users extends Model {
    protected $isLogged = false;
    private $id;
    private $permission;


    public function __construct($i = null){
        parent::__construct();

        // Realiza as rotinas de Login
        $this->setup($i);
        $this->checkLogin();

    }

    public function isLogged() {
        return $this->isLogged ? true : false;
    }
    private function checkLogin() {
        if(isset($_SESSION['login'])) {
            $this->isLogged = true;
        }
    }

    public function setup($i) {
        if ($i) {}
        if (!isset($_SESSION['login'])) {
            return false;
        }
        $this->id = $_SESSION['login'];
        return true;
    }


}