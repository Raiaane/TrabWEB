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
          background-color: #4682B4;
           
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
        
          font-family: verdana;
           width:150px; 
           height: 40px;
      }
      .btn-blue:hover{
        background-color:#B0C4DE ;
        box-shadow: 0 5px 0 #4682B4;
      }

</style>

<style type="text/css">
  .formulario{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .formulario{
        background-color: white;
        display: flex;
        border-radius: 40px;
        width: 900px;
        height: 650px;
      }

      .formulario input{
        
        width: 600px;
        height: 40px;
      }  

      .formulario label{
        font-size: 25px;
       
        font-family: System;
        height: 40px;
      }  
    }

    @media(max-width: 1000px){
      .formulario {
        width:300px;
        height: 300px;
        display: flex; flex: 1; flex-direction: column;
        font-size: 15px;
        background-color: white;
        border-radius: 40px;
        width: 300px;
        height: 550px;
        
      }

      .formulario input{
       /* margin-top: 25px;*/
        
        width: 200px;
        height: 20px;
      }  

      .formulario label{
        font-size: 25px;
        font-family: System;
        height: 40px;
      }  
    }

</style>

<body background="images/fundo4.jpg">

	<div class="container">
        
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu">&#9776;</label>

            <nav class="menu" >
            <h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Aluno</a>
                              <ul>
                                    <!-- <li><a href="index.php"><?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Cadastro</a></li>
                                    <li><a href="index.php"> <?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Login</a></li> -->
                              </ul>
                        </li>
                        <li><a href="professor.php">Professor</a>
                        <ul>
                                    <li><a href="cadasprova.php">Provas</a></li>
                                    <li><a href="">Gabaritos</a></li>
                              </ul></li>
                        <li><a href="">Dicas</a></li>
                        <li><a href="">Sair</a></li>

                    
                  </ul>
     

            </nav>

</div>
<style type="text/css">
@media(max-width: 2000px){
  .form-questao {
    transform: translateX(25%);
  }
  .img{
    transform: translateX(-280%);

  }
  .btn-blue{
    transform: translateY(-180%);
  }
}
@media(max-width: 1000px){
  .form-questao {
    transform: translateX(2%);
  }
  .img{
    transform: translateX(4%);
  }
  .btn-blue{
    transform: translateY(80%);
  }
}
</style>

<center>
<div class="formulario" style="margin-top: 40px;">
  
    <form class="form-questao" style="justify-content: center; align-items: center;">
    	
    	<label><b><i>Questão</b></i></label><br>
    	<input type="text" name="quetao"><br>
    	<label>Alternativa a</label><br>
    	<input type="text" name="alternativaa"><br>
    	<label>Alternativa b</label><br>
    	<input type="text" name="alternativab"><br>
        <label>Alternativa c</label><br>
    	<input type="text" name="alternativac"><br>
    	<label>Alternativa d</label><br>
    	<input type="text" name="alternativad"><br>
    	<label>Gabarito</label><br>
      
    <input type="gabar" name="gabarito"><br>
<img  class="img" src="images/icon20.png" style="width: 130px; height: 120px; /*margin-top: -180px; margin-left: 10px;*/">
<center>  <button type="submit" value="enviar" type="submit" name="enviar" class="btn btn-blue"><b>Cadastrar questão</b></button></center>
    </form>
	
</div>
</center>

</body>
</html>