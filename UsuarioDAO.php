<?php
include_once('config.php');
include_once('Usuario.php');
class UsuarioDAO 
{
    
    function Cadastra(Usuario $usuario)
    {
        $con = new Conexao();
        $stmt = $con->Con();
        $sql = $stmt->prepare("INSERT INTO aluno (nome,telefone,usuario,senha,email,cpf) VALUES(?,?,?,?,?,?)");
        $nome = $usuario->getNome();
        $tel = $usuario->getTel();
        $user = $usuario->getUser();
        $pass = $usuario->getPass();
        $email = $usuario->getEmail();
        $cpf = $usuario->getCpf();

        $sql->bindParam(1, $nome);
        $sql->bindParam(2, $tel);
        $sql->bindParam(3, $user);
        $sql->bindParam(4, $pass);
        $sql->bindParam(5, $email);
        $sql->bindParam(6, $cpf);

         if($sql->execute()){
            echo "<script>alert('Cadastrado com sucesso')</script>";
        }else{
            echo "<script>alert('Usuario nao cadastrado')</script>";
        }
    }
}

    ?>