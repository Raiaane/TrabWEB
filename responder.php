<?php 
  session_start();

  include_once 'questaoDAO.php';
  include_once 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
      <title>Responder Questão</title>
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
         border-radius: 30px;
          font-family: verdana;
           width:150px; 
           height: 40px;
      }

      .btn-blue:hover{
        background-color:#B0C4DE ;
        box-shadow: 0 5px 0 #4682B4;
      }

      .formulario{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .formulario{
        display: flex;
        flex-direction: row;
        width:900px;
        height: 100%;
        font-size: 33px;
        background-color: white;
        margin-top:25px;
        border-radius: 40px;
      }

      .btn-blue{    
      transform: translateX(300px);
      }

      .formulario h3{
        position: absolute;
        left: 500px;
      }

      .formulario input{
       position: relative;
      left: 40px;
      top: -20px;
      width: 20px;
      height: 20px;
    }  

    .formulario span{
      position: relative;
      left: 60px;
      display: inline-block;
      font-size: 20px;
      font-family: System;
      width: 700px;
      height: 20px;
    }  
    }


    @media(max-width: 1000px){
      .formulario {
        width:300px;
        height: 100%;
       display: flex; flex: 1; flex-direction: column;
       font-size: 15px;
      }
      .btn-blue{
          
          transform: translateX(2px);}

      .formulario h3{
        position: relative;
        left:4px;
      }
       .formulario input{
     position: relative;
     top: -60px;
     left:-60px;
      width: 20px;
      height: 20px;
    }  

    .formulario span{
      margin-left: -120px;
      display: inline-block;
      font-size: 20px;
      font-family: System;
      width: 250px;
      height: 20px;
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
                                    <li><a href="index.php">Cadastro</a></li>
                                    <li><a href="index.php">Login</a></li>
                              </ul>
                        </li>
                        <li><a href="professor.php">Professor</a>
                        <ul>
                                    <li><a href="professor.php">Provas</a></li>
                                   
                              </ul></li>
                        <li><a href="dicas.php">Dicas</a></li>
                         <li><a href="index.php">SAIR</a></li>

                    
                  </ul>
     

            </nav> 

</div>


<center>
  <script src="js/jquery-3.3.1.min.js"></script>
  <div class="formulario">
   <center><h3>Responder prova</h3> <center><br><br>    
      <?php 

        $QuestaoDAO = new QuestaoDAO();
        
        $sql = $QuestaoDAO->ListarQuestao($_GET['materia']);

          while ($row = $sql->fetch()) { 

            echo '<span>"Id: '.$row['id'].' - '.$row['questao']                  .'</span><br><br>
            <input type="checkbox" name="alt"><span>A)'.$row['a1'].'</span><br><br>
            <input type="checkbox" name="alt"><span>B)'.$row['a2'].'</span><br><br>
            <input type="checkbox" name="alt"><span>C) '.$row['a3'].'</span><br><br>
            <input type="checkbox" name="alt"><span>D) '.$row['a4'].'</span><br><br><br>

            <br>
            
            <div class="guarda-resp">  
              <legend>Resposta certa: '.$row['gab'].'</legend>
            </div> 
            ';

          }
      
      ?>
      <button class="button_resp">Resposta:</button>
      <!-- <a href="?materia=matematica&ato=result" class="btn-blue">RESULTADOS</a> -->
  </div>
</center>
<style type="text/css">
  legend {
    display: none;
  }
  .show-resp {
    display: inline;
  }
  .show {
    display: inline-block;
    width: 100%;
    height: 50px;
    background: rgba(0,243,51,.5);
    color: black;
  }
  .button_resp{
    background-color: #4682B4;
        box-shadow: 0 5px 0 #B0C4DE;
         border-radius: 30px;
          font-family: verdana;
           width:150px; 
           height: 30px;
  }
</style>
<script type="text/javascript">
  
  $(document).ready(function() {
    $('.button_resp').click(function() {
      $('.guarda-resp').toggleClass('show');
      $('legend').toggleClass('show-resp');
    })
  });

</script>


</body>
</html>