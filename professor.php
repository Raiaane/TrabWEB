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

.btn{
         margin-top: 30px;
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
         margin-top: -30px;
        margin-left: 10px;


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
         margin-top: 20px;
        margin-left: 10px;
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
        <li><a href="index.php">Home</a></li>
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


 

</style>


<div class="resp" style="">
  
 <div class="cadastro"> 
  <center>
    <form method="post">
  
         
   <label style="color: black; font-family: System; width: 90px;
    height: 25px;" ><b>CADASTRE-SE</b></label><br>
  
    <label style="color: black; font-family: verdana;"><b>Nome</b></label><br>
    <input  style="width:200px; height:20px;" type="text" name="nome"><br>

    <label style="color: black; font-family: verdana; z-index: 99"  ><b>Email</b></label><br>  
    <input style="width:200px; height:20px;  z-index: 9" type="text" name="email"> <br>

    <label style="color: black; font-family: verdana;"><b>Telefone</b></label><br>
    <input style="width:200px; height:20px;" type="text" name="telef"><br>
    
    <label style="color: black; font-family: verdana;"><b>Usuário</b></label><br>
    <input style="width:200px; height:20px;"type="text" name="usuario"><br>
     
    <label style="color: black; font-family: verdana"><b>Senha</b></label><br> 
    <input style="width:200px; height:20px;" type="password" name="senha"><br>

     
    
  <!--<img src="images/ask2.png" style="width: 130px; height: 120px;   position: absolute; ">-->
    <label style="color: black; font-family: verdana ; z-index: 99"><b>CPF</b></label> <br> 
    <input  style="width:200px; height:20px; z-index: 99 "type="text" name="cpf"><br>
 
    <button style="z-index: 99; margin-top: 40px;  "type="submit" value="enviar" type="submit" name="enviar" class="btn btn-yellow"><b>CADASTRE-SE</b></button>
    
  </form>
  </center>
 </div>


<div class="cadastro" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System;"><b>LOGIN</b></legend><br>

    <label style="color: black; font-family: verdana;" for="usuario"><b>Usuário</b></label><br>
    <input style="width:200px; height:20px;"type="text" name="usuario"><br>

    <label style="color: black; font-family: verdana" for="senha"><b>Senha</b></label><br>
    <input  style="width:200px; height:20px;" type="text" name="senha"><br>  
    
    <button class="btn btn-blue"><b>LOGIN</b></button><br>
      <img src="images/login.png" style="width: 130px; height: 120px; margin:30px -30px; position: absolute; ">   
  </form>
  </center>
</div>


</div>
   
<?php
      include_once('UsuarioDAO.php');
      include_once ('Profess.php');
      
      $Insere = new UsuarioDAO();
      $profess =  new Profess();
      if(isset($_POST['enviar'])){
      $profess->setNome($_POST['nome']);
      $profess->setEmail($_POST['email']);
      $profess->setTel($_POST['telef']);
      $profess->setUser($_POST['usuario']);
      $profess->setPass($_POST['senha']);
      $profess->setCpf($_POST['cpf']);

      $Insere->Cadastro($profess);
  }
  ?>
     <!--CODIGO DO LOGIN -->


</body>
</html>

  
