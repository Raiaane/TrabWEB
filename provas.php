<!DOCTYPE html>
<html>
<head>
	<title>Criar Prova</title>
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
                                    <li><a href="index.php"><?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Cadastro</a></li>
                                    <li><a href="index.php"> <?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Login</a></li>
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

<div class="formulario">

    <form>
      
      <h2 style="margin-left: 400px; margin-top: 10px; font-family: fantasy;">CRIAR PROVAS</h2>
      <h3 style="margin-left: 350px; margin-top: 50px; font-family: inherit;">Em qual área deseja criar sua prova?</h3>
      <button class="btn6 btn-natu" style="margin-left: 130px; margin-top: 70px;">Natureza</button>
      <button class="btn7 btn-huma" style="margin-left: 340px; margin-top: 70px;">Humanas</button>
      <button class="btn8 btn-lin" style="margin-left: 380px; margin-top: 80px;">Linguagens</button>
      <button class="btn9 btn-mat" style="margin-left: 380px; margin-top: 80px;">Matematica</button>
      

<img src="images/teach4.png" style="margin-left: 600px; margin-top: -120px;">
<img src="images/brain2.png" style="margin-left: 100px; margin-top: -900px;">
    </form>
  
</div>

</body>
</html>