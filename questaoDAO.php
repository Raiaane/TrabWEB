<?php
include_once('config.php');
include_once('questao.php');
class QuestaoDAO 
{
    
    function Cadastra(Questao $questao, $table)
    {
        $con = new Conexao();
        $stmt = $con->Con();
        $sql = $stmt->prepare("INSERT INTO ".$table." (questao,a1,a2,a3,a4,gab) VALUES(?,?,?,?,?,?)");
        
        $quest = $questao->getQuestao();
        $a1 = $questao->getA1();
        $a2 = $questao->getA2();
        $a3 = $questao->getA3();
        $a4 = $questao->getA4();
        $gab = $questao->getGab();

        $sql->bindParam(1, $quest);
        $sql->bindParam(2, $a1);
        $sql->bindParam(3, $a2);
        $sql->bindParam(4, $a3);
        $sql->bindParam(5, $a4);
        $sql->bindParam(6, $gab);

         if($sql->execute()){
        
            echo "<script>alert('Cadastrado com sucesso')</script>";
        
        }else{
        
            echo "<script>alert('Usuario nao cadastrado')</script>";
        
        }
    
    }
    public function ListarQuestao($table) {
        
            $con = new Conexao();
            $pdo = $con->Con();
            
            $sql = $pdo->query("SELECT * FROM ".$table);
                 
            return $sql;
        
        }
    public function ListarGab($table) {
        
            $con = new Conexao();
            $pdo = $con->Con();
            
            $sql = $pdo->query("SELECT gabarito FROM ".$table);
                 
            return $sql;
        
        }

}