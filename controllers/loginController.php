<?php
class loginController extends Controller
{

    public function index()
    {
        $this->loadView('login');
    }
    public function logout() {
        if (isset($_SESSION['login'])) {
            unset($_SESSION['login']);
        }
        unset($_SESSION);
        header('location: '.BASE_URL);
    }

    public function logon() {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
            $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
            $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            $l = new Login();
            if ($l->logUser($email,$password)) {
                header('location: '.BASE_URL);
            } else {
                header('location: '.BASE_URL.'login/');
            }
        }
    }
    public function recovery2() {
        $dados = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
            $l = new Login();
            $dados_email = $l->checkEmail(trim(addslashes($_POST['email'])));

            if (is_array($dados_email) && count($dados_email)>0) {
                $dados['success'] = true;

                //TODO: ROTINA PARA ENVIAR O EMAIL. OS DADOS JÁ ESTÃO NA VARIAVEL.

            }
        }
        $this->loadView('forgot',$dados);
    }
    public function recovery() {
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
            $l = new Login();
            $dados_email = $l->checkEmail(trim(addslashes($_POST['email'])));

            if (is_array($dados_email) && count($dados_email)>0) {
                $dados['status'] = 'ok';
                echo json_encode($dados);
                die();

                //TODO: ROTINA PARA ENVIAR O EMAIL. OS DADOS JÁ ESTÃO NA VARIAVEL.

            }
        }
        $dados['status'] = 'error';
        echo json_encode($dados);
    }
}
