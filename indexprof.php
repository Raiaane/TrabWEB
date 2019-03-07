<?php
  
  session_start();

  $_SESSION['materia'] = "";

  if (isset($_GET['cadasprova'])) { 

    if ($_GET['cadasprova'] == "matematica") {
      
      $_SESSION['materia'] = "matematica";

    }

    if ($_GET['cadasprova'] == "humanas") {
      
      $_SESSION['materia'] = "humanas";

    }

    if ($_GET['cadasprova'] == "linguagens") {
      
      $_SESSION['materia'] = "linguagens";

    }

    if ($_GET['cadasprova'] == "natureza") {
      
      $_SESSION['materia'] = "natureza";

    }

    echo "<script> location.href='cadasprova.php' </script>";

  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Index Professor</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type= "text/javascript" src="js/jquery.min.js"> </script>
  <script type= "text/javascript" src="js/jquery.cycle.all.js"> </script>


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
      .formulario{
        background-color: white;
        margin-top:25px;
        margin-left: 200px;
        border-radius: 40px;
        width: 900px;
        height: 700px;
      }

    .formulario input{
      margin-top: 25px;
      margin-left: 140px;
      width: 600px;
      height: 40px;
    }  

    .formulario label{
      font-size: 30px;
      margin-top: 45px;
      margin-left: 390px;
      /*font-family: Arial;*/
      height: 40px;
    }  
    .btn6{
          background-color: #7FFFD4;
           
            font-family: verdana; 
            width:200px; 
            height: 70px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-natu{
        background-color: #7FFFD4;
        box-shadow: 0 5px 0 #66CDAA;
         
          font-family: sans-serif;
           width:180px; 
           height: 60px;
      }
      .btn-natu:hover{
        background-color:#7FFFD4;
        box-shadow: 0 5px 0 #7FFFD4;
      }
      .btn7{
          background-color: #FFD700;
           
            font-family: verdana; 
            width:200px; 
            height: 70px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-huma{
        background-color: #FFD700;
        box-shadow: 0 5px 0 #CDAD00;
         
          font-family: sans-serif;
           width:180px; 
           height: 60px;
      }
      .btn-huma:hover{
        background-color:#FFD700;
        box-shadow: 0 5px 0 #FFD700;}

        .btn8{
          background-color: #FF7256;
           
            font-family: verdana; 
            width:200px; 
            height: 70px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-lin{
        background-color: #FF7256;
        box-shadow: 0 5px 0 #CD5B45;
         
          font-family: sans-serif;
           width:180px; 
           height: 60px;
      }
      .btn-lin:hover{
        background-color:#FF7256;
        box-shadow: 0 5px 0 #FF7256;}
        .btn9{
          background-color: #00C5CD;
           
            font-family: verdana; 
            width:200px; 
            height: 70px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-mat{
        background-color: #00C5CD;
        box-shadow: 0 5px 0 #00868B;
         
          font-family: sans-serif;
           width:180px; 
           height: 60px;
      }
      .btn-mat:hover{
        background-color:#00C5CD;
        box-shadow: 0 5px 0 #00C5CD;}
        .row {
  box-sizing: border-box;
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex: 0 1 auto;
  -webkit-box-flex: 0;
  flex: 0 1 auto;
  -ms-flex-direction: row;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -1rem;
  margin-left: -1rem;
  margin-top: 40px;
}

.col-xs-10 {
  -ms-flex-preferred-size: 83.333%;
  flex-basis: 83.333%;
  max-width: 83.333%;
}


.col-xs-12 {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  max-width: 100%;
}


.center-xs {
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  text-align: center;
}


.middle-xs {
  -ms-flex-align: center;
  -webkit-box-align: center;
  align-items: center;
}

@media only screen and (min-width: 75em) {
  .container2 {
    width: 71rem;
  }

.col-lg-2 {
    -ms-flex-preferred-size: 16.667%;
    flex-basis: 16.667%;
    max-width: 16.667%;
  }


.col-lg-4 {
    -ms-flex-preferred-size: 33.333%;
    flex-basis: 33.333%;
    max-width: 33.333%;
  }

.col-lg-10 {
    -ms-flex-preferred-size: 83.333%;
    flex-basis: 83.333%;
    max-width: 83.333%;
  }


  #showcase .logo {
    margin-left: 80%;
    margin-top: -70%;
    position: relative;

  }

.slide{
  position: relative;
  margin: 0 auto;
}

  .container2{
    margin-left: 80px;
    margin-top: 20px;
    height: 110px;
  }


  .primary-text{
    color:#56a79a;
  }

  .primary-background{
    background:#56a79a;
  }


  #main-header{
    border-bottom:1px solid #56a79a;
    background-color: #000000;
  }


  #navbar{
    text-transform:uppercase;
  }

  #navbar li{
    display:inline;
    padding-right:20px;
    list-style:none;
  }

.slide ul li {
  position: relative;
  margin-top: 100%;
}



  #showcase{
    
    border-bottom:1px solid #56a79a;
    margin-bottom:30px;
  }

 .showcase  ul li {
    list-style-type: none;
    position: absolute;      
    background-position: center;
    background-size: cover; 

    
 

    
  }

  #showcase .row{
    height:600px;
  }

  #showcase h1{
    font-size:50px;
    margin:0;
    padding-bottom:20px;
  }


  #showcase p{
    color:#ccc;
    margin:0;
  }

  #showcase .showcase-content{
    background:#333;
    color:#fff;
    border-radius:90px;
    padding:40px;
    opacity:0.8;
    margin-top: -10%;
  }

  #company {
    background:#48D1CC;
    color:#fff;
    padding:10px 0;
  }

  #company h4{
    text-transform:uppercase;
    margin-bottom:0;
  }

  #company ul{
    padding:0;
    list-style:none;
    line-height:2em;
  }

  #company input[type="text"]{
    padding:7px;
  }

  #company button{
    background:#222;
    color:#fff;
    padding:10px;
    border:0;
  }


  #main-footer{
    background:#56a79a;
    color:#fff;
  }



  #page{
    margin-bottom:40px;
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
  .contact form input[type="text"]{
    width:50%;
    height:30px;
    margin-bottom:10px;
  }



  .contact form textarea{
    width:50%;
    height:100px;
  }

  .contact form button{
    width:50%;
    padding:10px 0;
    border:0;
    background:#222;
    color:#fff;
  }

  .contact form label{
    text-transform:uppercase;
  }


  @media(max-width:800px){
    #showcase h1{
      font-size:30px;
    }
  }

  @media(max-width:500px){
    #showcase .showcase-content{
      padding:40px 10px;
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
                                    <li><a href="">Provas</a></li>
                                  
                              </ul></li>
                        <li><a href="dicas.php">Dicas</a></li>
                         <li><a href="index.php">SAIR</a></li>
                  </ul>
            </nav>
</div>

<div class="formulario">

   <!--  <form> -->
      
      <h1 style="margin-left: 400px; margin-top: 10px; font-family: fantasy;">CRIAR PROVAS</h1>
      <h5 style="margin-left: 300px; margin-top: 50px; font-family: inherit; font-size: 25px;">Em qual área deseja criar sua prova?</h5>

      <a href="?cadasprova=natureza"> <button class="btn6 btn-natu" style="margin-left: 130px; margin-top: 70px;">Natureza</button></a>
      <a href="?cadasprova=humanas"><button class="btn7 btn-huma" style="margin-left: 340px; margin-top: 70px;">Humanas</button></a>
       <img src="images/cere.png" style="margin-left: 420px; margin-top: -300px;">
      <a href="?cadasprova=linguagens"><button class="btn8 btn-lin" style="margin-left: 380px; margin-top: 80px;">Linguagens</button></a>
      <a href="?cadasprova=matematica"><button class="btn9 btn-mat" style="margin-left: 380px; margin-top: 80px;">Matematica</button></a>
      
<img src="images/brain4.png" style="margin-left: -400px; margin-top: -110px;">
<img src="images/teach5.png" style="margin-left: 600px; margin-top: -120px;">

    <!-- </form> -->
  
</div>

</body>
</html>