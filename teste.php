<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	

	*{
		margin: 0;
		padding: 0;
	}
	nav { display: flex;
		flex-direction: row
	 }
	.menu{
		width: 100%;
		height: 50px;
		background-color: #48D1CC;
		font-family: 'Arial';
		position: relative;
	}
      .menu ul{
      	list-style: none;
      	position: relative;
      }

  
      .menu ul li{
      	width: 150px;
      	float: left;
      }

      .menu a{

      	padding: 15px;
      	display: block;
      	text-decoration: none;
      	text-align: center;
      	background-color: #48D1CC;
      	color: #fff;
      	margin-left: 
      	
      }
      .menu ul ul{
      	position: absolute;
      	visibility: hidden;

      }
      .menu ul li:hover ul{
      	visibility: visible;
      }

      .menu a:hover{
      	background-color: #F0E68C;
      	color: #555;

      }

      .menu ul ul li{
      	float: none;
      	border-bottom: solid 1px #ccc;


      }

      .menu ul ul li a{
      	background-color: #F0E68C;
      
      }
      label[for="bt_menu"]{
      	padding: 5px;
      	background-color: #48D1CC;
      	color: #fff;
      	font-family: "Arial";
      	text-align: center;
      	font-size: 30px;
      	cursor: pointer;
      	width: 50px;
      	height: 50px;
      }
      #bt_menu{
      	display: none;
      }
      label[for="bt_menu"]{
      	display: none;
      }

      @media(max-width: 800px){
      	label[for="bt_menu"]{
      	display: block;
      }
      #bt_menu:checked ~ .menu{
      	margin-left: 0;
      }

      nav h2{ visibility: hidden; display: none; }
      .menu{
      	margin-top: 5px;
      	margin-left: -100%;
      	transition: all .4s;
      	width: 100%;
      }
      		menu ul{
      			width: 100%;
      			float: none;
      		}
      		.menu ul li{
      			width: 100%;
      			float: left;
      		}
      		.menu ul ul{
      			position: static;
      			overflow: hidden;
      			max-height: 0;
      			transition: all .4s;
      		}
      		.menu ul li:hover ul{
      			height: auto;
      			max-height: 800px;
      		}
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

<!-- menu ######################################-->
<div class="container">
        
		<input type="checkbox" id="bt_menu">
		<label for="bt_menu">&#9776;</label>

		<nav class="menu" >
		<h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="alunoo.php">Aluno</a>
					<ul>
						<li><a href="">Cadastro</a></li>
						<li><a href="">Login</a></li>
					</ul>
				</li>
				<li><a href="professor.php">Professor</a>
				<ul>
						<li><a href="">Provas</a></li>
						<li><a href="">Gabaritos</a></li>
					</ul></li>
				<li><a href="">Dicas</a></li>

		        
			</ul>
     
     <!--<h2  style="margin-left: -100px; color: white; font-family: verdana; "> Simulado online </h2> <h2> <img class="logo" src="images/icon2.png" style=" margin-top:-25px; margin-left: 510px; width: 60px;"></h2></ul><nav></nav>-->

		</nav>


		<!-- <nav><h2  style="margin-left: -30px; color: white; font-family: verdana; "> Simulado online</h2> </nav>
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
		</nav> -->
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
			     </center></div>

			</div>
	</div>
    <!-- </div>
	    </div> -->
</form>
 <!--login ###################################################################################################################################################-->
<form>
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
		</form>
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


</body>
</html>