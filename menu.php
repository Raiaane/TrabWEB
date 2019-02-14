<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	
	* {
		padding: 0 auto;
		margin: 0;
	}

	.container {
		width: 100%;
		height: 60px;
		background: #48D1CC;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.teste ul li {
		display: inline;
		text-decoration: none;
		padding: 0px 30px;
		margin-left: 30px;
	}

	.teste ul li a {
		color: #fff; 
		text-decoration: none;
		
	}
	.flex-container{
		display: flex;
		justify-content: center;
		background-color: white;
		width: 300px;
		height: 440px;
		margin-left: 240px;
		margin-top: 60px;

	}
	.cadastroo{
		display:block;
		margin-top:10px;
        margin-left: -230px;
	}
	.cadasnome{

    	margin-top:20px;
    	margin-left: 155px;
		width: 250px;
		height: 25px;
    }


     .cadastelefone {
    	margin-top: 10px;
        margin-left: 155px;
		width: 250px;
		height: 25px;
    }

    .cadasusuario{
    	margin-top: 10px;
        margin-left: 155px;
		width: 250px;
		height: 25px;
    }

    .cadassenha{
        margin-top: 10px;
       margin-left: 155px;
		width: 250px;
		height: 25px;
    }

    .cadasemail{
        margin-top: 10px;
        margin-left: 155px;
		width: 250px;
		height: 25px;
    }

    .cadascpf{
    	margin-top: 10px;
        margin-left: 155px;
		width: 250px;
		height: 25px;
    }

    .cadastrese{
    	margin-top: 30px;
       /* margin-left: 260px;*/
		
    }

    .cadastresebutao{
    	margin-top: -230px;
        margin-left: 260px;
		
    }



    .flex-container2{
		display: flex;
		justify-content: center;
		background-color: white;
		width: 300px;
		height: 440px;
		margin-left: 790px;
		margin-top: -440px;
	}

	.loguin {
        margin-left:-90px;

	}
	.cadasnome2{
    	margin-top: 90px;
    	margin-left: -25px;
		width: 250px;
		height: 25px;
    }


   .cadasemail2{
        margin-top: 30px;
        margin-left: -25px;
		width: 250px;
		height: 25px;
    }

    .cadassenha2{
        margin-top: 30px;
        margin-left: -25px;
		width: 250px;
		height: 25px;
    }

    .cadastrese2{
    	margin-top: 130px;
        margin-left: 280px;
         width: 200px;
		
    }

    .cadastresebutao2{
    	margin-top: -200px;
        margin-left: -60px;

		
    }


	

</style>
<body background="images/fundo4.jpg">

<!-- menu #########################################################################################################################################################-->
	<div class="container">

		<nav><h2  style="margin-left: -30px; color: white; font-family: verdana; "> Simulado online</h2> </nav>
		<nav><img class="logo" src="images/icon2.png" style="padding-top: -20px; margin-left: -290px; width: 60px;"></nav>
		<nav class="teste">

			<ul>

				<li>
					<a href="aluno.php" style="font-family: verdana;" >ALUNO</a>
				</li>
				<li>
					<a href="professor.php" style="font-family: verdana;">PROFESSOR</a>
				</li>
				<li>
					<a href="" style="font-family: verdana;">CADASTRO</a>
				</li>
				<li>
					<a href="" style="font-family: verdana; ">SOBRE</a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- cadastro ################################################################################################################################################-->
	<form method="post">
	<div class="flex-container" style="color: white; "  >
		<img src="images/ask2.png" style="width: 130px; height: 120px; margin-top: 310px; margin-left: 50px;">
		
	    <div class="cadastroo">
	       
	       <label style="color: black; margin-top:90px; margin-left:180px; font-family: verdana;"><b><i>CADASTRE-SE</i></b></label><br>
		

		<div class="cadasnome">
			<label style="color: black; margin-left:60px; font-family: verdana;">Nome</label><br>
		<input type="text" name="nome">
		</div><br>

		<div class="cadastelefone">
			<center><label style="color: black;  margin-left:-80px; font-family: verdana;">Telefone</label><br></center>
		<input type="text" name="telefone">
		</div><br>

		<div class="cadasusuario">
			<center><label style="color: black;  margin-left:-85px;  font-family: verdana;">Usuário</label><br></center>
		<input type="text" name="usuario">
		</div><br>
		 
		 
		<div class="cadassenha">
			<center><label style="color: black; margin-left:-85px;   font-family: verdana">Senha</label><br> </center>
		<input  type="password" name="senha">
        </div><br>

        <div class="cadasemail">
			<center><label style="color: black;  margin-left:-85px;  font-family: verdana">Email</label><br> </center>
		<input  type="text" name="email">
        </div><br>

        <div class="cadascpf">
			<center><label style="color: black;  margin-left:-85px;  font-family: verdana">CPF</label> <br> </center>
		<input  type="text" name="cpf">
        </div><br>


	    <div class="cadastrese">
		<center> <button type="submit" value="Gravar" type="submit" style="background-color: #FFFF50; margin-top: -40px; margin-left: 60px; font-family: verdana; width:150px; height: 30px;"><b>CADASTRE-SE</b></button>
	    </div> </center>
    </div>
	    </div>
	    </form>
 <!--login ###################################################################################################################################################-->

<div class="flex-container2" style="color: white;" >
		<img src="images/icon4.png" style="width: 130px; height: 120px; margin-top: 320px; margin-left: 330px;">


<!-- Login-->
<form method="post">
    	<div class="loguin">
				<div class="cadasnome2">
					<center><label style="color: black; margin-top:40px; margin-left: -85px; font-family: verdana; ">Usuário</label></center>
				<input type="text" name="user">
				</div>
		 
				<div class="cadassenha2">
					<center><label style="color: black; margin-top: 10px; margin-left: -85px; font-family: verdana">Senha</label> </center>
				<input  type="password" name="pass">
		        </div>

		        <div class="cadasemail2">
					<center><label style="color: black; margin-top: 10px; margin-left: -80px; font-family: verdana">Email</label> </center>
				<input  type="text" name="email">
		        </div>


		         <div class="cadastresebutao2">
				 <center><label style="color: black; margin-top: -200px; margin-left: -300px; font-family: verdana;"><b><i>LOGIN</i></b></label> </center>
			    </div> 

			    <div class="cadastrese2">
				 <center><button style="background-color: #4682B4; margin-top: 90px; margin-left: -650px; font-family: verdana; width:150px; height: 30px; "><b>LOGIN</b></button></center>
			    </div>
	    </div>

</div>
</form>
 <!-- ###################################################################################################################################################-->	    
<?php
include 'config.php';
 error_reporting(0);
$nom = $_POST['nome'];
$tel = $_POST['telefone'];
$user = $_POST['usuario'];
$pass = $_POST['senha'];
$emai = $_POST['email'];
$cp = $_POST['cpf'];

if (!empty($nom)) {


	$sqli = "INSERT INTO aluno (nome, telefone, usuario, senha, email, cpf) VALUES ('$nom' , '$tel' , '$user', '$pass' , '$emai', '$cp')";
	$res = mysqli_query($conexao , $sqli);
	if ($res) {
		
		echo "<script> location:href='menu.php' </script>";
		;
		
	}else{
		echo "Falha no cadastro";
	}
}
?>

     <!--CODIGO DO LOGIN -->

	<?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {

        $sql_verificar_login_usuario = "SELECT * FROM aluno WHERE usuario = '".$_POST['user']."' and senha = '".$_POST['pass']."'";
        $query_verificar_login_usuario = mysqli_query($conexao, $sql_verificar_login_usuario);

        if (mysqli_num_rows($query_verificar_login_usuario) > 0) {
            
            $_SESSION['usuario'] = $_POST['user'];
            header('location: aluno.php');

        } else {

            echo "<script>
                    function ErroLogin(){

                        document.getElementById('alerta').className = 'form-control alert alert-danger';
                        document.getElementById('alerta').innerHTML = 'Usuário ou senha incorreto!';
                        
                    }
                </script>";
            
        }

    }
?>
</body>
</html>