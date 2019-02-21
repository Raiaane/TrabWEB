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

.btn{
        
        
         margin-top: -40px;
          margin-left: 60px; 
          font-family: verdana;
           width:150px; 
           height: 40px;
           text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;

      }
      .btn-yellow{
        background-color: #FFFF50;
        box-shadow: 0 5px 0 #CDCD00;
      }
      .btn-yellow:hover{
        background-color:#CDCD00 ;
        box-shadow: 0 5px 0 #F5F5DC;
      }
        .btn2{
          background-color: #4682B4;
           margin-top: 90px; 
           margin-left: -650px;
            font-family: verdana; 
            width:150px; 
            height: 40px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
        }
        .btn-blue{
        background-color: #4682B4;
        box-shadow: 0 5px 0 #B0C4DE;
         margin-top: 90px;
         margin-left: -650px;
          font-family: verdana;
           width:150px; 
           height: 40px;
      }
      .btn-blue:hover{
        background-color:#B0C4DE ;
        box-shadow: 0 5px 0 #4682B4;
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
				<li><a href="indexalu.php">Aluno</a>
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
     

		</nav>

</div>

	<!-- cadastro ################################################################################################################################################-->
<style type="text/css">
	div.resp form{
		display: flex;
		flex-wrap: wrap;
		flex-wrap: row wrap;
	}
</style>

	<div class="resp">
<form method="post">
	<div class="flex-container" style="color: white; "  >
		<img src="images/ask2.png" style="width: 130px; height: 120px; margin-top: 310px; margin-left: 50px;">
		
	    	<div class="cadastroo">
	       
	       		<label style="color: black; margin-top:90px; margin-left:180px; font-family: System; width: 290px;
    height: 25px;" ><b>CADASTRE-SE</b></label><br>
		

				<div class="cadasnome">
					<label style="color: black; margin-left:60px; font-family: verdana;"><b>Nome</b></label><br>
				<input type="text" name="nome">
				</div><br>

				<div class="cadastelefone">
					<center><label style="color: black;  margin-left:-80px; font-family: verdana;"><b>Telefone</b></label><br></center>
				<input type="text" name="telef">
				</div><br>

				<div class="cadasusuario">
					<center><label style="color: black;  margin-left:-85px;  font-family: verdana;"><b>Usuário</b></label><br></center>
				<input type="text" name="usuario">
				</div><br>
		 
				<div class="cadassenha">
					<center><label style="color: black; margin-left:-85px;   font-family: verdana"><b>Senha</b></label><br> </center>
				<input  type="password" name="senha">
		        </div><br>

		        <div class="cadasemail">
					<center><label style="color: black;  margin-left:-85px;  font-family: verdana"><b>Email</b></label><br> </center>
				<input  type="text" name="email">
		        </div><br>

		        <div class="cadascpf">
					<center><label style="color: black;  margin-left:-85px;  font-family: verdana"><b>CPF</b></label> <br> </center>
				<input  type="text" name="cpf">
		        </div><br>

			    <div class="cadastrese">
				<center> <button type="submit" value="enviar" type="submit" name="enviar" class="btn btn-yellow"><b>CADASTRE-SE</b></button>
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
						<center><label style="color: black; margin-top:40px; margin-left: -85px; font-family: verdana; "><b>Usuário</b></label></center>
					<input type="text" name="user">
					</div>
			 
					<div class="cadassenha2">
						<center><label style="color: black; margin-top: 10px; margin-left: -85px; font-family: verdana"><b>Senha</b></label> </center>
					<input  type="password" name="pass">
			        </div>

			        <div class="cadasemail2">
						<center><label style="color: black; margin-top: 10px; margin-left: -80px; font-family: verdana"><b>Email</b></label> </center>
					<input  type="text" name="email">
			        </div>


			         <div class="cadastresebutao2">
					 <center><label style="color: black; margin-top: -200px; margin-left: -300px; font-family: System;"><b>LOGIN</b></label> </center>
				    </div> 

				    <div class="cadastrese2">
					 <center><button class="btn btn-blue"><b>LOGIN</b></button></center>
				    </div>
		    </div>
		</form>
	</div>
</form>
</div>
 <!-- ###################################################################################################################################################-->	    
<?php
      include_once('UsuarioDAO.php');
      include_once ('Usuario.php');
      
      $Insere = new UsuarioDAO();
      $usuario =  new Usuario();
   	  if(isset($_POST['enviar'])){
      $usuario->setNome($_POST['nome']);
      $usuario->setTel($_POST['telef']);
      $usuario->setUser($_POST['usuario']);
      $usuario->setPass($_POST['senha']);
      $usuario->setEmail($_POST['email']);
      $usuario->setCpf($_POST['cpf']);

      $Insere->Cadastra($usuario);
  }
  ?>

     <!--CODIGO DO LOGIN -->


</body>
</html>