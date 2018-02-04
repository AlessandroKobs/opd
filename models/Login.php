<?php
/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 28/01/2018
 * Time: 16:10
 */

class Login extends Model {

    public function logUser($email, $pass) {
        // Verifica se foi enviado um email e senha "não vazios"
        if(empty($email) || empty($pass))
            return false;

        // Faz a consulta no banco de dados.
        $sql = $this->db->prepare('SELECT id_cliente FROM clientes WHERE email = :email AND senha = :pass');
        $sql->bindValue(':email',$email);
        $sql->bindValue(':pass',md5($pass));
        $sql->execute();

        // Verifica se houve resultado, caso contrário, retorna false;
        if ($sql->rowCount() < 1 ) {
            $_SESSION['erro'] = 'Usuário ou senha inválidos.';
            return false;
        }

        $_SESSION['login'] = $sql->fetch()['id_cliente'];
        return true;

    }

    public function checkEmail($email) {
        return ($this->get('clientes','email',$email));
    }

}