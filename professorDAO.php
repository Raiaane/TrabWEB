<<<<<<< HEAD
<?php
include_once('config.php');
include_once('profess.php');
class ProfessorDAO {
        public function Logar($user, $senha) {
        
            $con = new Conexao();
            $stmt = $con->Con();
            
            $sql = $stmt->query("SELECT usuario, senha FROM professor WHERE usuario = '".$user."' AND senha = '".$senha."'");
            
            $sql->execute();

            if ($sql->rowCount() > 0) {
            
                echo "
                    <script> location.href='indexprof.php'</script>
                ";
            
            } else {

                echo "<script>alert('deu errado')</script>";

            }
        
        }

}
=======
<?php
include_once('config.php');
include_once('profess.php');
class ProfessorDAO {
        public function Logar($user, $senha) {
        
            $con = new Conexao();
            $stmt = $con->Con();
            
            $sql = $stmt->query("SELECT usuario, senha FROM professor WHERE usuario = '".$user."' AND senha = '".$senha."'");
            
            $sql->execute();

            if ($sql->rowCount() > 0) {
            
                echo "
                    <script> location.href='indexprof.php'</script>
                ";
            
            } else {

                echo "<script>alert('deu errado')</script>";

            }
        
        }

}
>>>>>>> 99f5ff579bb8f95784cb876fb9b7e5e75a0f0ec4
?>