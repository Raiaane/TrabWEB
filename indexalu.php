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
      .formulario{
      	background-color: white;
      	margin: 40px 30%;
      	border-radius: 40px;
      	width: 70%;
      	height: 60vh;
        position: relative;
        justify-content: center;
        left: -15%;
        word-wrap: break-word;

      }



    .btn{
          background-color: #E99674;
           
            font-family: verdana; 
            width:150px; 
            height: 50px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-red{
        background-color: #E99674;
        box-shadow: 0 5px 0 #FF7F60;
         
          font-family: verdana;
           width:150px; 
           height: 50px;
      }
      .btn-red:hover{
        background-color:#FF7F60;
        box-shadow: 0 5px 0 #E99674;
      }
      .btn2{
          background-color: #FAFAD2;
           
            font-family: verdana; 
            width:150px; 
            height: 50px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-yellow{
        background-color:  #FAFAD2;
        box-shadow: 0 5px 0 #FF7F60;
         
          font-family: verdana;
           width:150px; 
           height: 50px;
      }
      .btn-yellow:hover{
        background-color: #FAFAD2;
        box-shadow: 0 5px 0  #FAFAD2 ;
      }
       .btn3{
          background-color: #EE82EE;
           
            font-family: verdana; 
            width:150px; 
            height: 50px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-rosa{
        background-color: #EE82EE;
        box-shadow: 0 5px 0 #DD40D0;
         
          font-family: verdana;
           width:150px; 
           height: 50px;
      }
      .btn-rosa:hover{
        background-color: #DD40D0;
        box-shadow: 0 5px 0  #DD40D0 ;
      }
      .btn4{
          background-color: #9FB6CD;
           
            font-family: verdana; 
            width:150px; 
            height: 50px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
           border-radius: 40px;
        }
        .btn-pink{
        background-color: #9FB6CD;
        box-shadow: 0 5px 0 #9FB6CD;
         
          font-family: verdana;
           width:150px; 
           height: 50px;
      }
      .btn-pink:hover{
        background-color:#8DB6CD ;
        box-shadow: 0 5px 0  #8DB6CD  ;
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
<style type="text/css">
  .formulario{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .formulario{
        display: flex;
        flex-direction: row;
        width:900px;
        height: 400px;
        font-size: 33px;
       
      }
    }

    @media(max-width: 1000px){
      .formulario {
        width:300px;
        height: 300px;
       display: flex; flex: 1; flex-direction: column;
       font-size: 15px;
      }
    }

</style>


<div class="formulario">
<center>
<label  style="font-family: System;"><b>Matemática e suas tecnologias</b></label>
<label><p>Matemática e suas Tecnologias é um dos eixos de estudo mais temidos pelos estudantes, seja aqueles que buscam o certificado do ensino médio pelo Encceja ou ingressar no ensino superior com o Enem. Muitos candidatos podem ficar desesperados só de imaginar as questões, mas, com preparação e organização é possível alcançar uma boa nota na matéria. Para testar seus conhcecimentos, utilize o botão abaixo:</p></label>
<label><button class="btn btn-red">Matemática</button></label>
</center>  	
</div>

<div class="formulario">
<center>
<label  style="font-family: System;"><b>Linguagens   e   códigos</b></label>
<label ><p>A prova de Linguagens, Códigos e suas Tecnologias não abrange somente o conteúdo de Língua Portuguesa, Literatura e Língua Estrangeira (Inglês ou Espanhol) – ela inclui também Artes, Educação Física e Tecnologias da Informação e Comunicação.
Teste seus conhecimentos aqui:
</p></label>
<label ><button class="btn2 btn-yellow">Linguagens</button></label>
<center>
</div>

<div class="formulario">
  <center>
<label  style="font-family: System;"><b>Ciências Humanas</b></label>
<label ><p>A prova de Linguagens, Códigos e suas Tecnologias não abrange somente o conteúdo de Língua Portuguesa, Literatura e Língua Estrangeira (Inglês ou Espanhol) – ela inclui também Artes, Educação Física e Tecnologias da Informação e Comunicação.
Teste seus conhecimentos aqui:
</p></label>
<label><button class="btn3 btn-rosa">Humanas</button></label>


      
</center>
    </form>
  
</div>
<div class="formulario">

<center>
<label  style="font-family: System;"><b>Ciências da Natureza</b></label>
<label ><p>As ciências naturais constituem numa classificação que abarca as áreas da ciência que visam a estudar a natureza em seus aspectos mais gerais e fundamentais, isso é, o universo como um todo.
Teste seus conhecimentos aqui:
</p></label>
<label><button class="btn4 btn-pink">Natureza</button></label>


      
</center>
    </form>

      
<center>
    </form>
  
</div>

<div class="formulario4">



      
<center>
    </form>
  
</div>
</form>
</body>
</html>