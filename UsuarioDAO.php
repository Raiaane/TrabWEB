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

    function Cadastro(Profess $Profess)
    {
        $con = new Conexao();
        $stmtt = $con->Con();
        $sqli = $stmtt->prepare("INSERT INTO professor (nome,email,telefone,usuario,senha,cpf) VALUES(?,?,?,?,?,?)");
        $nome = $Profess->getNome();
        $email = $Profess->getEmail();
        $tel = $Profess->getTel();
        $user = $Profess->getUser();
        $pass = $Profess->getPass();
        $cpf = $Profess->getCpf();

        $sqli->bindParam(1, $nome);
        $sqli->bindParam(2, $email);
        $sqli->bindParam(3, $tel);
        $sqli->bindParam(4, $user);
        $sqli->bindParam(5, $pass);
        $sqli->bindParam(6, $cpf);

         if($sqli->execute()){
            echo "<script>alert('Cadastrado com sucesso')</script>";
        }else{
            echo "<script>alert('Usuario nao cadastrado')</script>";
        }
    }
}

    ?>