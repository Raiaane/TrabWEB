<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type= "text/javascript" src="js/jquery.min.js"> </script>
<script type= "text/javascript" src="js/jquery.cycle.all.js"> </script>
<script type= "text/javascript" src="js/jquery.mask.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
   $('.cpf').mask('000.000.000-00');
   $('.tele').mask('(00)00000-0000');
});
</script>
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
         /*margin-left: -650px;*/
          font-family: verdana;
           width:150px; 
           height: 40px;
      }
      .btn-blue:hover{
        background-color:#B0C4DE ;
        box-shadow: 0 5px 0 #4682B4;
      }
      


  /*.services ul li{
    list-style:none;
    padding:10px;
  }

  .services ul li:nth-child(odd){
    background:#333;
    color:#fff;
  }

  .services ul li:nth-child(even){
    background:#56a79a;
    color:#fff;
  }

  .contact form{
    background:#333;
    color:#fff;
    padding:20px;
  }
*/
  


</style>
<body background="images/fundo4.jpg">

<!-- menu ######################################-->
<div class="container">
        
		<input type="checkbox" id="bt_menu">
		<label for="bt_menu">&#9776;</label>

		<nav class="menu" >
		<h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">Aluno</a>
					<ul>
						<li><a href="index.php">Cadastro</a></li>
						<li><a href="index.php">Login</a></li>
					</ul>
				</li>
				<li><a href="professor.php">Professor</a>
				<ul>
						<li><a href="professor.php">Provas</a></li>
					
					</ul></li>
				<li><a href="dicas.php">Dicas</a></li>

		        
			</ul>
     

		</nav>

</div>


<style type="text/css">
    .resp{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .resp{
        display: flex;
        flex-direction: row;
        width:100%;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .resp {
        width:300px;
        height: 400px;
       display: flex; flex: 1; flex-direction: column;
      }
    }

   .cadastro, .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
    
   }

   .cadastro{
    margin: 30px 15%;
   }


   @media(max-width: 2000px){
      .cadastro {
        width:300px;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .cadastro {
        width:300px;
        height: 400px;
       
      }
    }


  }
	div.cadastro form{
		display: flex;
		flex-wrap: wrap;
		flex-wrap: row wrap;
	}

  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }

  .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
   }


   @media(max-width: 2000px){
      .login {
        width:300px;
        height: 270px;
       
      }
    }

    @media(max-width: 1000px){
      .login{
        width:300px;
        height: 270px;
       
      }
    }

  }
  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }
}


 

  /*@media(max-width: 800px){
        label[for="resp"]{
        display: block;
      }
   @media(min-width: 100px){
        label[for="resp"]{
        display: block;
      }
@media(max-height: 100px){
        label[for="resp"]{
        display: block;
      }
   @media(min-height: 100px){
        label[for="resp"]{
        display: block;
      }*/
</style>


<div class="resp" style="">
  
 <div class="cadastro"> 
  <center>
    <form method="post">
  
         
   
  <legend style="color: black; font-family: System; margin-top: 10px;"><b>CADASTRE-SE</b></legend><br>
    <label style="color: black; font-family: verdana;"><b>Nome</b></label><br>
    <input  style="width:200px; height:20px;" type="text" name="nome"  placeholder="Nome"><br>  

    <label style="color: black; font-family: verdana;"><b>Telefone</b></label><br>
    <input style="width:200px; height:20px;" type="text" name="telef" class="tele"  placeholder="(88)99999-9999"><br>
    
    <label style="color: black; font-family: verdana;"><b>Usuário</b></label><br>
    <input style="width:200px; height:20px;"type="text" name="usuario"  placeholder="Usuario"><br>
     
    <label style="color: black; font-family: verdana"><b>Senha</b></label><br> 
    <input style="width:200px; height:20px;" type="password" name="senha"  placeholder="*********"><br>

    <label style="color: black; font-family: verdana; z-index: 99"  ><b>Email</b></label><br> 
    <input style="width:200px; height:20px;  z-index: 9" type="text" name="email"  placeholder="gmail@gmail.com"> <br>
 
    <label style="color: black; font-family: verdana ; z-index: 99"><b>CPF</b></label> <br> 
    <input  style="width:200px; height:20px; z-index: 99 "type="text" name="cpf" class="cpf"  placeholder="111.111.111-11"><br>
 
    <button style="z-index: 99; margin-top: 40px; margin-left: 10px;""  type="submit" value="enviar" type="submit" name="enviar" class="btn btn-yellow"><b>CADASTRE-SE</b></button>
    
  </form>
  </center>
 </div>


<div class="cadastro" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System; margin-top: 27px;"><b>LOGIN</b></legend><br>

    <label style="color: black; font-family: verdana;" for="usuario"><b>Usuário</b></label><br>
    <input style="width:200px; height:20px;"type="text" name="usuario"  placeholder="Usuario"><br>

    <label style="color: black; font-family: verdana" for="senha"><b>Senha</b></label><br>
    <input  style="width:200px; height:20px;" type="password" name="senha"  placeholder="********"><br>  
    
    
   
       
    <button name="gravar" class="btn btn-blue" style="margin-left: 10px;"><b>LOGIN</b></button><br>
    
  </form>
  </center>

</div>


</div>
   
<?php
      include_once('UsuarioDAO.php');
      include_once ('Usuario.php');
      include_once 'config.php';
      
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
     <?php
  
  $Logar = new UsuarioDAO();
  $usuario = new Usuario();

  if (isset($_POST['gravar'])) {
    
    $Logar->Logar($_POST['usuario'], $_POST['senha']);
  
  }

?>


</body>
</html>

  
